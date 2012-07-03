<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$_EXTCONF = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);

$subTypes = array();

if ($_EXTCONF['enableBE']) {
	$subTypes[] = 'getUserBE';
	$subTypes[] = 'authUserBE';
	
	$GLOBALS['TYPO3_CONF_VARS']['SVCONF']['auth']['setup']['BE_fetchUserIfNoSession'] = $_EXTCONF['BE_fetchUserIfNoSession'];
	
	if (TYPO3_MODE == 'BE') {
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_userauth.php']['logoff_post_processing'][] = 'EXT:'.$_EXTKEY.'/hooks/class.tx_shibbolethauth_userauth.php:tx_shibbolethauth_userauth->logoutBE';
	}
}

if ($_EXTCONF['enableFE']) {
	$subTypes[] = 'getUserFE';
	$subTypes[] = 'authUserFE';
	
	t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_shibbolethauth_pi1.php', '_pi1', 'list_type', 0);
	
	$GLOBALS['TYPO3_CONF_VARS']['SVCONF']['auth']['setup']['FE_fetchUserIfNoSession'] = $_EXTCONF['FE_fetchUserIfNoSession'];
}

t3lib_extMgm::addService($_EXTKEY, 'auth',  'tx_shibbolethauth_sv1',
	array(
		'title' => 'Shibboleth-Authentication',
		'description' => 'Authentication service for Shibboleth (BE & FE)',

		'subtype' => implode(',', $subTypes),

		'available' => TRUE,
		'priority' => $_EXTCONF['priority'],
		'quality' => 50,

		'os' => '',
		'exec' => '',

		'classFile' => t3lib_extMgm::extPath($_EXTKEY).'sv1/class.tx_shibbolethauth_sv1.php',
		'className' => 'tx_shibbolethauth_sv1',
	)
);
?>