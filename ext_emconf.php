<?php

########################################################################
# Extension Manager/Repository config file for ext "shibboleth_auth".
#
# Auto generated 03-07-2012 18:14
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Shibboleth Authentication',
	'description' => 'Shibboleth Single Sign On Authentication (BE & FE). The FE Users will be imported automatically into the configured storage pid.',
	'category' => 'services',
	'shy' => 0,
	'version' => '2.5.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'excludeFromUpdates',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Tamer Erdogan',
	'author_email' => 'tamer.erdogan@univie.ac.at',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '4.0.0-0.0.0',
			'typo3' => '4.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:14:{s:9:"ChangeLog";s:4:"4e8b";s:10:"README.txt";s:4:"b7c4";s:21:"ext_conf_template.txt";s:4:"b189";s:12:"ext_icon.gif";s:4:"eb04";s:17:"ext_localconf.php";s:4:"0ff9";s:14:"ext_tables.php";s:4:"0d95";s:16:"locallang_db.xml";s:4:"bf65";s:19:"shibboleth_logo.png";s:4:"aac6";s:14:"doc/manual.sxw";s:4:"ae19";s:42:"hooks/class.tx_shibbolethauth_userauth.php";s:4:"b47b";s:35:"pi1/class.tx_shibbolethauth_pi1.php";s:4:"aa94";s:17:"pi1/locallang.xml";s:4:"569d";s:17:"pi1/template.html";s:4:"1fbc";s:35:"sv1/class.tx_shibbolethauth_sv1.php";s:4:"773b";}',
);

?>
