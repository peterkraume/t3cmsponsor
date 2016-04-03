<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Homepage',
	'T3CM Sponsor Anzeige Homepage'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'T3CM Sponsor');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3cmsponsor_domain_model_sponsor', 'EXT:t3cmsponsor/Resources/Private/Language/locallang_csh_tx_t3cmsponsor_domain_model_sponsor.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3cmsponsor_domain_model_sponsor');
$GLOBALS['TCA']['tx_t3cmsponsor_domain_model_sponsor'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:t3cmsponsor/Resources/Private/Language/locallang_db.xlf:tx_t3cmsponsor_domain_model_sponsor',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,logo,status,url,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Sponsor.php',
		'iconfile' => 'EXT:t3cmsponsor/Resources/Public/Icons/tx_t3cmsponsor_domain_model_sponsor.png'
	),
);
