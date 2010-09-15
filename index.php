<?php

/*
*	PUBLIC FOLDER NAME
*	There should be all *.css, *.js and image files.
*	Use it only if neccesary.
*/
$public_folder = "public";

/*
*	SYSTEM FOLDER NAME
*	The main folder of the system.
*/
$system_folder = "system";

/*
*	APPLICATION FOLDER NAME
*	Folder where application files will be stored.
*/
$application_folder = "application";

/* Setting up main constants */
# Name of main file. Usually "index.php".
defined('SELF') or define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
# Mainly used file extension ".php".
defined('EXT') or define('EXT', ".php");
# Path to the main file. Usually "index.php".
defined('ROOT') or define('ROOT', str_replace(SELF, "", __FILE__));

/* Three main paths */
# Path to public folder. Use it only if NECCESARY.
defined('PUBPATH') or define('PUBPATH', realpath(ROOT."/".$public_foler));
# Path to application folder.
defined('APPPATH') or define('APPPATH', realpath(ROOT."/".$application_folder));
# Path to system folder.
defined('SYSPATH') or define('SYSPATH', realpath(ROOT."/".$system_folder));

# Start session
session_start();

# Include configs
require_once(realpath(SYSPATH.'/config/config'.EXT));

# Getting all needed classes
function __autoload($class) {
	if(file_exists(realpath(APPPATH.'/libraries/'.$class.EXT))) {
		require_once(realpath(APPPATH.'/libraries/'.$class.EXT));
	} else if(file_exists(realpath(SYSPATH.'/libraries/'.$class.EXT))) {
		require_once(realpath(SYSPATH.'/libraries/'.$class.EXT));
	} else {
		require_once(realpath(SYSPATH.'/libraries/database/'.$class.EXT));
	}
}

# Create MySQL DB instance
$db = new MySQLDatabase();

if(isset($_REQUEST['act']) && ($_REQUEST['act'] == 'pictures')) {

	$pics = array();
	$pics['images'] = array();
	
	$dirIter = new DirectoryIterator(realpath(APPPATH.'/upload/'));
	
	foreach($dirIter as $file) {
		if($file->isDot()) continue;
		$tmp = explode('.', $file->getFilename());
		$pics['images'][] = array('name' => (strlen($file->getBasename($tmp[count($tmp)-1])) <= 15) ? $file->getBasename($tmp[count($tmp)-1]) : substr($file->getBasename($tmp[count($tmp)-1]), 0, 15).'...', 'url' => 'application/upload/'.$file->getFilename());
	}
	
	$pics['success'] = true;
	$pics['rowsCount'] = count($pics['images']);
	
	echo json_encode($pics);

/* } else if(isset($_REQUEST['act']) && ($_REQUEST['act'] == 'pictures_temp')) {
	
	$pics = array();
	$pics['images'] = array();
	
	$dirIter = new DirectoryIterator(realpath(APPPATH.'/upload/'));
	
	foreach($dirIter as $file) {
		if($file->isDot()) continue;
		$tmp = explode('.', $file->getFilename());
		$pics['images'][] = array('name' => (strlen($file->getBasename($tmp[count($tmp)-1])) <= 15) ? $file->getBasename($tmp[count($tmp)-1]) : substr($file->getBasename($tmp[count($tmp)-1]), 0, 15).'...', 'url' => 'application/upload/'.$file->getFilename());
	}
	
	$pics['success'] = true;
	$pics['rowsCount'] = count($pics['images']);
	
	echo json_encode($pics); */
	
} else {

	require_once(realpath(APPPATH.'/pages/main'.EXT));
	#require_once(realpath(APPPATH.'/pages/temp'.EXT));
}