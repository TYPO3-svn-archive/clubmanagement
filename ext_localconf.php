<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Teams',
	array(
		'Season' => 'list, show',
		'Team' => 'list, show',
		'Player' => 'list, show',
		'Coach' => 'list, show',
		'Report' => 'list, show',
		'Statistics' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Season' => '',
		'Team' => '',
		'Player' => '',
		'Coach' => '',
		'Report' => '',
		'Statistics' => '',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Reports',
	array(
		'Season' => 'list, show',
		'Team' => 'list, show',
		'Player' => 'list, show',
		'Coach' => 'list, show',
		'Report' => 'list, show',
		'Statistics' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Season' => '',
		'Team' => '',
		'Player' => '',
		'Coach' => '',
		'Report' => '',
		'Statistics' => '',
		
	)
);

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Coaches',
	array(
		'Season' => 'list, show',
		'Team' => 'list, show',
		'Player' => 'list, show',
		'Coach' => 'list, show',
		'Report' => 'list, show',
		'Statistics' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Season' => '',
		'Team' => '',
		'Player' => '',
		'Coach' => '',
		'Report' => '',
		'Statistics' => '',
		
	)
);

?>