<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'T3CM.' . $_EXTKEY,
	'Homepage',
	array(
		'Sponsor' => 'slider'
	),
	// non-cacheable actions
	array(
        'Sponsor' => 'slider'
	)
);
