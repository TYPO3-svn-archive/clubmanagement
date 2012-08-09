<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Thomas Löffler <loeffler@spooner-web.de>, Spooner Web
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package clubmanagement
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_Clubmanagement_Domain_Model_Report extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * teaser
	 *
	 * @var string
	 */
	protected $teaser;

	/**
	 * reportText
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $reportText;

	/**
	 * halfTimeResult
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $halfTimeResult;

	/**
	 * fullTimeResult
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $fullTimeResult;

	/**
	 * placement
	 *
	 * @var integer
	 * @validate NotEmpty
	 */
	protected $placement;

	/**
	 * homeGame
	 *
	 * @var boolean
	 */
	protected $homeGame = FALSE;

	/**
	 * date
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $date;

	/**
	 * opponent
	 *
	 * @var
	 */
	protected $opponent;

	/**
	 * team
	 *
	 * @var Tx_Clubmanagement_Domain_Model_Team
	 */
	protected $team;

	/**
	 * statistics
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Statistics>
	 */
	protected $statistics;

	/**
	 * type
	 *
	 * @var Tx_Clubmanagement_Domain_Model_ReportType
	 */
	protected $type;

	/**
	 * season
	 *
	 * @var Tx_Clubmanagement_Domain_Model_Season
	 */
	protected $season;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->statistics = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the teaser
	 *
	 * @return string $teaser
	 */
	public function getTeaser() {
		return $this->teaser;
	}

	/**
	 * Sets the teaser
	 *
	 * @param string $teaser
	 * @return void
	 */
	public function setTeaser($teaser) {
		$this->teaser = $teaser;
	}

	/**
	 * Returns the reportText
	 *
	 * @return string $reportText
	 */
	public function getReportText() {
		return $this->reportText;
	}

	/**
	 * Sets the reportText
	 *
	 * @param string $reportText
	 * @return void
	 */
	public function setReportText($reportText) {
		$this->reportText = $reportText;
	}

	/**
	 * Returns the halfTimeResult
	 *
	 * @return string $halfTimeResult
	 */
	public function getHalfTimeResult() {
		return $this->halfTimeResult;
	}

	/**
	 * Sets the halfTimeResult
	 *
	 * @param string $halfTimeResult
	 * @return void
	 */
	public function setHalfTimeResult($halfTimeResult) {
		$this->halfTimeResult = $halfTimeResult;
	}

	/**
	 * Returns the fullTimeResult
	 *
	 * @return string $fullTimeResult
	 */
	public function getFullTimeResult() {
		return $this->fullTimeResult;
	}

	/**
	 * Sets the fullTimeResult
	 *
	 * @param string $fullTimeResult
	 * @return void
	 */
	public function setFullTimeResult($fullTimeResult) {
		$this->fullTimeResult = $fullTimeResult;
	}

	/**
	 * Returns the placement
	 *
	 * @return integer $placement
	 */
	public function getPlacement() {
		return $this->placement;
	}

	/**
	 * Sets the placement
	 *
	 * @param integer $placement
	 * @return void
	 */
	public function setPlacement($placement) {
		$this->placement = $placement;
	}

	/**
	 * Returns the homeGame
	 *
	 * @return boolean $homeGame
	 */
	public function getHomeGame() {
		return $this->homeGame;
	}

	/**
	 * Sets the homeGame
	 *
	 * @param boolean $homeGame
	 * @return void
	 */
	public function setHomeGame($homeGame) {
		$this->homeGame = $homeGame;
	}

	/**
	 * Returns the boolean state of homeGame
	 *
	 * @return boolean
	 */
	public function isHomeGame() {
		return $this->getHomeGame();
	}

	/**
	 * Returns the date
	 *
	 * @return DateTime $date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Sets the date
	 *
	 * @param DateTime $date
	 * @return void
	 */
	public function setDate($date) {
		$this->date = $date;
	}

	/**
	 * Returns the opponent
	 *
	 * @return  $opponent
	 */
	public function getOpponent() {
		return $this->opponent;
	}

	/**
	 * Sets the opponent
	 *
	 * @param  $opponent
	 * @return void
	 */
	public function setOpponent($opponent) {
		$this->opponent = $opponent;
	}

	/**
	 * Returns the team
	 *
	 * @return Tx_Clubmanagement_Domain_Model_Team $team
	 */
	public function getTeam() {
		return $this->team;
	}

	/**
	 * Sets the team
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Team $team
	 * @return void
	 */
	public function setTeam(Tx_Clubmanagement_Domain_Model_Team $team) {
		$this->team = $team;
	}

	/**
	 * Adds a Statistics
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Statistics $statistic
	 * @return void
	 */
	public function addStatistic(Tx_Clubmanagement_Domain_Model_Statistics $statistic) {
		$this->statistics->attach($statistic);
	}

	/**
	 * Removes a Statistics
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Statistics $statisticToRemove The Statistics to be removed
	 * @return void
	 */
	public function removeStatistic(Tx_Clubmanagement_Domain_Model_Statistics $statisticToRemove) {
		$this->statistics->detach($statisticToRemove);
	}

	/**
	 * Returns the statistics
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Statistics> $statistics
	 */
	public function getStatistics() {
		return $this->statistics;
	}

	/**
	 * Sets the statistics
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Statistics> $statistics
	 * @return void
	 */
	public function setStatistics(Tx_Extbase_Persistence_ObjectStorage $statistics) {
		$this->statistics = $statistics;
	}

	/**
	 * Returns the type
	 *
	 * @return Tx_Clubmanagement_Domain_Model_ReportType $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param Tx_Clubmanagement_Domain_Model_ReportType $type
	 * @return void
	 */
	public function setType(Tx_Clubmanagement_Domain_Model_ReportType $type) {
		$this->type = $type;
	}

	/**
	 * Returns the season
	 *
	 * @return Tx_Clubmanagement_Domain_Model_Season $season
	 */
	public function getSeason() {
		return $this->season;
	}

	/**
	 * Sets the season
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Season $season
	 * @return void
	 */
	public function setSeason(Tx_Clubmanagement_Domain_Model_Season $season) {
		$this->season = $season;
	}

}
?>