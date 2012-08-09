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
 * Test case for class Tx_Clubmanagement_Domain_Model_Player.
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
class Tx_Clubmanagement_Domain_Model_PlayerTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Clubmanagement_Domain_Model_Player
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Clubmanagement_Domain_Model_Player();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() { 
		$this->fixture->setFirstName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFirstName()
		);
	}
	
	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() { 
		$this->fixture->setLastName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getLastName()
		);
	}
	
	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForIntegerSetsPosition() { 
		$this->fixture->setPosition(12);

		$this->assertSame(
			12,
			$this->fixture->getPosition()
		);
	}
	
	/**
	 * @test
	 */
	public function getBirthdayReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setBirthdayForDateTimeSetsBirthday() { }
	
	/**
	 * @test
	 */
	public function getPictureReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setPictureForStringSetsPicture() { 
		$this->fixture->setPicture('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getPicture()
		);
	}
	
}
?>