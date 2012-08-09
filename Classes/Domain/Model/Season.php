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
class Tx_Clubmanagement_Domain_Model_Season extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $title;

	/**
	 * dateFrom
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $dateFrom;

	/**
	 * dateTo
	 *
	 * @var DateTime
	 * @validate NotEmpty
	 */
	protected $dateTo;

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
	 * Returns the dateFrom
	 *
	 * @return DateTime $dateFrom
	 */
	public function getDateFrom() {
		return $this->dateFrom;
	}

	/**
	 * Sets the dateFrom
	 *
	 * @param DateTime $dateFrom
	 * @return void
	 */
	public function setDateFrom($dateFrom) {
		$this->dateFrom = $dateFrom;
	}

	/**
	 * Returns the dateTo
	 *
	 * @return DateTime $dateTo
	 */
	public function getDateTo() {
		return $this->dateTo;
	}

	/**
	 * Sets the dateTo
	 *
	 * @param DateTime $dateTo
	 * @return void
	 */
	public function setDateTo($dateTo) {
		$this->dateTo = $dateTo;
	}

}
?>