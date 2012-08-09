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
class Tx_Clubmanagement_Domain_Model_Statistics extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * minute
	 *
	 * @var integer
	 */
	protected $minute;

	/**
	 * player
	 *
	 * @var Tx_Clubmanagement_Domain_Model_Player
	 */
	protected $player;

	/**
	 * type
	 *
	 * @var Tx_Clubmanagement_Domain_Model_StatisticsType
	 */
	protected $type;

	/**
	 * Returns the minute
	 *
	 * @return integer $minute
	 */
	public function getMinute() {
		return $this->minute;
	}

	/**
	 * Sets the minute
	 *
	 * @param integer $minute
	 * @return void
	 */
	public function setMinute($minute) {
		$this->minute = $minute;
	}

	/**
	 * Returns the player
	 *
	 * @return Tx_Clubmanagement_Domain_Model_Player $player
	 */
	public function getPlayer() {
		return $this->player;
	}

	/**
	 * Sets the player
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Player $player
	 * @return void
	 */
	public function setPlayer(Tx_Clubmanagement_Domain_Model_Player $player) {
		$this->player = $player;
	}

	/**
	 * Returns the type
	 *
	 * @return Tx_Clubmanagement_Domain_Model_StatisticsType $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param Tx_Clubmanagement_Domain_Model_StatisticsType $type
	 * @return void
	 */
	public function setType(Tx_Clubmanagement_Domain_Model_StatisticsType $type) {
		$this->type = $type;
	}

}
?>