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
 * Test case for class Tx_Clubmanagement_Domain_Model_Team.
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
class Tx_Clubmanagement_Domain_Model_TeamTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Clubmanagement_Domain_Model_Team
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Clubmanagement_Domain_Model_Team();
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
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getPlayerReturnsInitialValueForObjectStorageContainingTx_Clubmanagement_Domain_Model_Player() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getPlayer()
		);
	}

	/**
	 * @test
	 */
	public function setPlayerForObjectStorageContainingTx_Clubmanagement_Domain_Model_PlayerSetsPlayer() { 
		$player = new Tx_Clubmanagement_Domain_Model_Player();
		$objectStorageHoldingExactlyOnePlayer = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePlayer->attach($player);
		$this->fixture->setPlayer($objectStorageHoldingExactlyOnePlayer);

		$this->assertSame(
			$objectStorageHoldingExactlyOnePlayer,
			$this->fixture->getPlayer()
		);
	}
	
	/**
	 * @test
	 */
	public function addPlayerToObjectStorageHoldingPlayer() {
		$player = new Tx_Clubmanagement_Domain_Model_Player();
		$objectStorageHoldingExactlyOnePlayer = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOnePlayer->attach($player);
		$this->fixture->addPlayer($player);

		$this->assertEquals(
			$objectStorageHoldingExactlyOnePlayer,
			$this->fixture->getPlayer()
		);
	}

	/**
	 * @test
	 */
	public function removePlayerFromObjectStorageHoldingPlayer() {
		$player = new Tx_Clubmanagement_Domain_Model_Player();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($player);
		$localObjectStorage->detach($player);
		$this->fixture->addPlayer($player);
		$this->fixture->removePlayer($player);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getPlayer()
		);
	}
	
	/**
	 * @test
	 */
	public function getCoachReturnsInitialValueForObjectStorageContainingTx_Clubmanagement_Domain_Model_Coach() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCoach()
		);
	}

	/**
	 * @test
	 */
	public function setCoachForObjectStorageContainingTx_Clubmanagement_Domain_Model_CoachSetsCoach() { 
		$coach = new Tx_Clubmanagement_Domain_Model_Coach();
		$objectStorageHoldingExactlyOneCoach = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCoach->attach($coach);
		$this->fixture->setCoach($objectStorageHoldingExactlyOneCoach);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCoach,
			$this->fixture->getCoach()
		);
	}
	
	/**
	 * @test
	 */
	public function addCoachToObjectStorageHoldingCoach() {
		$coach = new Tx_Clubmanagement_Domain_Model_Coach();
		$objectStorageHoldingExactlyOneCoach = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCoach->attach($coach);
		$this->fixture->addCoach($coach);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCoach,
			$this->fixture->getCoach()
		);
	}

	/**
	 * @test
	 */
	public function removeCoachFromObjectStorageHoldingCoach() {
		$coach = new Tx_Clubmanagement_Domain_Model_Coach();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($coach);
		$localObjectStorage->detach($coach);
		$this->fixture->addCoach($coach);
		$this->fixture->removeCoach($coach);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCoach()
		);
	}
	
}
?>