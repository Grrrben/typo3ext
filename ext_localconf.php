<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Vendor.' . $_EXTKEY,
	'Frontend',
	array(
		'Plz' => 'list, show, new, create, edit, update, delete',
		
	),
	// non-cacheable actions
	array(
		'Plz' => 'create, update, delete',
		
	),
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT

);
