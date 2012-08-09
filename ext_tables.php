<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Teams',
	'Teams'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Reports',
	'Reports'
);

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Coaches',
	'Coaches'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Club Management');

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_season', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_season.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_season');
$TCA['tx_clubmanagement_domain_model_season'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_season',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,date_from,date_to,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Season.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_season.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_team', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_team.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_team');
$TCA['tx_clubmanagement_domain_model_team'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_team',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,image,player,coach,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Team.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_team.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_player', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_player.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_player');
$TCA['tx_clubmanagement_domain_model_player'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_player',
		'label' => 'first_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'first_name,last_name,position,birthday,picture,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Player.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_player.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_coach', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_coach.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_coach');
$TCA['tx_clubmanagement_domain_model_coach'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_coach',
		'label' => 'first_name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'first_name,last_name,email,phone,mobile,be_user,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Coach.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_coach.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_report', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_report.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_report');
$TCA['tx_clubmanagement_domain_model_report'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_report',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,teaser,report_text,half_time_result,full_time_result,placement,home_game,date,opponent,team,statistics,type,season,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Report.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_report.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_reporttype', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_reporttype.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_reporttype');
$TCA['tx_clubmanagement_domain_model_reporttype'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_reporttype',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ReportType.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_reporttype.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_statistics', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_statistics.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_statistics');
$TCA['tx_clubmanagement_domain_model_statistics'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_statistics',
		'label' => 'minute',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'minute,player,type,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Statistics.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_statistics.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_clubmanagement_domain_model_statisticstype', 'EXT:clubmanagement/Resources/Private/Language/locallang_csh_tx_clubmanagement_domain_model_statisticstype.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_clubmanagement_domain_model_statisticstype');
$TCA['tx_clubmanagement_domain_model_statisticstype'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:clubmanagement/Resources/Private/Language/locallang_db.xlf:tx_clubmanagement_domain_model_statisticstype',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/StatisticsType.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_clubmanagement_domain_model_statisticstype.gif'
	),
);

?>