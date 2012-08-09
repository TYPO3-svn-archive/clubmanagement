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
class Tx_Clubmanagement_Domain_Model_Team extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * image
	 *
	 * @var string
	 */
	protected $image;

	/**
	 * player
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Player>
	 */
	protected $player;

	/**
	 * coach
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Coach>
	 */
	protected $coach;

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
		$this->player = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->coach = new Tx_Extbase_Persistence_ObjectStorage();
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
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Adds a Player
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Player $player
	 * @return void
	 */
	public function addPlayer(Tx_Clubmanagement_Domain_Model_Player $player) {
		$this->player->attach($player);
	}

	/**
	 * Removes a Player
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Player $playerToRemove The Player to be removed
	 * @return void
	 */
	public function removePlayer(Tx_Clubmanagement_Domain_Model_Player $playerToRemove) {
		$this->player->detach($playerToRemove);
	}

	/**
	 * Returns the player
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Player> $player
	 */
	public function getPlayer() {
		return $this->player;
	}

	/**
	 * Sets the player
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Player> $player
	 * @return void
	 */
	public function setPlayer(Tx_Extbase_Persistence_ObjectStorage $player) {
		$this->player = $player;
	}

	/**
	 * Adds a Coach
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Coach $coach
	 * @return void
	 */
	public function addCoach(Tx_Clubmanagement_Domain_Model_Coach $coach) {
		$this->coach->attach($coach);
	}

	/**
	 * Removes a Coach
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Coach $coachToRemove The Coach to be removed
	 * @return void
	 */
	public function removeCoach(Tx_Clubmanagement_Domain_Model_Coach $coachToRemove) {
		$this->coach->detach($coachToRemove);
	}

	/**
	 * Returns the coach
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Coach> $coach
	 */
	public function getCoach() {
		return $this->coach;
	}

	/**
	 * Sets the coach
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_Clubmanagement_Domain_Model_Coach> $coach
	 * @return void
	 */
	public function setCoach(Tx_Extbase_Persistence_ObjectStorage $coach) {
		$this->coach = $coach;
	}

}
?>