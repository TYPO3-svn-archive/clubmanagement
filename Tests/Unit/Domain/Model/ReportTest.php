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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_Clubmanagement_Domain_Model_Report.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Club Management
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class Tx_Clubmanagement_Domain_Model_ReportTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Clubmanagement_Domain_Model_Report
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Clubmanagement_Domain_Model_Report();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getTeaserReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTeaserForStringSetsTeaser() { 
		$this->fixture->setTeaser('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTeaser()
		);
	}
	
	/**
	 * @test
	 */
	public function getReportTextReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setReportTextForStringSetsReportText() { 
		$this->fixture->setReportText('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getReportText()
		);
	}
	
	/**
	 * @test
	 */
	public function getHalfTimeResultReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setHalfTimeResultForStringSetsHalfTimeResult() { 
		$this->fixture->setHalfTimeResult('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getHalfTimeResult()
		);
	}
	
	/**
	 * @test
	 */
	public function getFullTimeResultReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFullTimeResultForStringSetsFullTimeResult() { 
		$this->fixture->setFullTimeResult('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFullTimeResult()
		);
	}
	
	/**
	 * @test
	 */
	public function getPlacementReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPlacement()
		);
	}

	/**
	 * @test
	 */
	public function setPlacementForIntegerSetsPlacement() { 
		$this->fixture->setPlacement(12);

		$this->assertSame(
			12,
			$this->fixture->getPlacement()
		);
	}
	
	/**
	 * @test
	 */
	public function getHomeGameReturnsInitialValueForBoolean() { 
		$this->assertSame(
			TRUE,
			$this->fixture->getHomeGame()
		);
	}

	/**
	 * @test
	 */
	public function setHomeGameForBooleanSetsHomeGame() { 
		$this->fixture->setHomeGame(TRUE);

		$this->assertSame(
			TRUE,
			$this->fixture->getHomeGame()
		);
	}
	
	/**
	 * @test
	 */
	public function getDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDateForDateTimeSetsDate() { }
	
	/**
	 * @test
	 */
	public function getOpponentReturnsInitialValueFor() { }

	/**
	 * @test
	 */
	public function setOpponentForSetsOpponent() { }
	
	/**
	 * @test
	 */
	public function getTeamReturnsInitialValueForTx_Clubmanagement_Domain_Model_Team() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getTeam()
		);
	}

	/**
	 * @test
	 */
	public function setTeamForTx_Clubmanagement_Domain_Model_TeamSetsTeam() { 
		$dummyObject = new Tx_Clubmanagement_Domain_Model_Team();
		$this->fixture->setTeam($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getTeam()
		);
	}
	
	/**
	 * @test
	 */
	public function getStatisticsReturnsInitialValueForObjectStorageContainingTx_Clubmanagement_Domain_Model_Statistics() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getStatistics()
		);
	}

	/**
	 * @test
	 */
	public function setStatisticsForObjectStorageContainingTx_Clubmanagement_Domain_Model_StatisticsSetsStatistics() { 
		$statistic = new Tx_Clubmanagement_Domain_Model_Statistics();
		$objectStorageHoldingExactlyOneStatistics = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneStatistics->attach($statistic);
		$this->fixture->setStatistics($objectStorageHoldingExactlyOneStatistics);

		$this->assertSame(
			$objectStorageHoldingExactlyOneStatistics,
			$this->fixture->getStatistics()
		);
	}
	
	/**
	 * @test
	 */
	public function addStatisticToObjectStorageHoldingStatistics() {
		$statistic = new Tx_Clubmanagement_Domain_Model_Statistics();
		$objectStorageHoldingExactlyOneStatistic = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneStatistic->attach($statistic);
		$this->fixture->addStatistic($statistic);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneStatistic,
			$this->fixture->getStatistics()
		);
	}

	/**
	 * @test
	 */
	public function removeStatisticFromObjectStorageHoldingStatistics() {
		$statistic = new Tx_Clubmanagement_Domain_Model_Statistics();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($statistic);
		$localObjectStorage->detach($statistic);
		$this->fixture->addStatistic($statistic);
		$this->fixture->removeStatistic($statistic);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getStatistics()
		);
	}
	
	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForTx_Clubmanagement_Domain_Model_ReportType() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForTx_Clubmanagement_Domain_Model_ReportTypeSetsType() { 
		$dummyObject = new Tx_Clubmanagement_Domain_Model_ReportType();
		$this->fixture->setType($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getType()
		);
	}
	
	/**
	 * @test
	 */
	public function getSeasonReturnsInitialValueForTx_Clubmanagement_Domain_Model_Season() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getSeason()
		);
	}

	/**
	 * @test
	 */
	public function setSeasonForTx_Clubmanagement_Domain_Model_SeasonSetsSeason() { 
		$dummyObject = new Tx_Clubmanagement_Domain_Model_Season();
		$this->fixture->setSeason($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getSeason()
		);
	}
	
}
?>