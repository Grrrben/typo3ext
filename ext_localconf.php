<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Vendor.' . $_EXTKEY,
	'Plugin',
	array(
		'Plugin' => 'show',
		
	),
	// non-cacheable actions
	array(
        'Plugin' => 'show',
		
	),
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT

);
