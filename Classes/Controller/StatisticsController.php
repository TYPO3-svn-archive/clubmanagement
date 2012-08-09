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
class Tx_Clubmanagement_Controller_StatisticsController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * statisticsRepository
	 *
	 * @var Tx_Clubmanagement_Domain_Repository_StatisticsRepository
	 */
	protected $statisticsRepository;

	/**
	 * injectStatisticsRepository
	 *
	 * @param Tx_Clubmanagement_Domain_Repository_StatisticsRepository $statisticsRepository
	 * @return void
	 */
	public function injectStatisticsRepository(Tx_Clubmanagement_Domain_Repository_StatisticsRepository $statisticsRepository) {
		$this->statisticsRepository = $statisticsRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$statisticss = $this->statisticsRepository->findAll();
		$this->view->assign('statisticss', $statisticss);
	}

	/**
	 * action show
	 *
	 * @param Tx_Clubmanagement_Domain_Model_Statistics $statistics
	 * @return void
	 */
	public function showAction(Tx_Clubmanagement_Domain_Model_Statistics $statistics) {
		$this->view->assign('statistics', $statistics);
	}

}
?>