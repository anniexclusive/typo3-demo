<?php
defined('TYPO3') or die('Access denied.');

// show application context in the backend
$applicationContext = \TYPO3\CMS\Core\Core\Environment::getContext();
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' (' . $applicationContext . ')';

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['publicplan_package'] = 'EXT:publicplan_package/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:publicplan_package/Configuration/TsConfig/Page/All.tsconfig">');
