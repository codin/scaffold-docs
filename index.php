<?php

/**
 *   Scaffold
 *   Mini-documentation script
 */

//  Get the current URL
$url = (string) filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);
if($url == '') $url = 'index';

$base = 'content/' . $url;

if(file_exists($base . '.php')) {
	$file = $base . '.php';
} else {
	if(file_exists($base . '/index.php')) {
		$file = $base . '/index.php';
	} else {
		header('location: ../');
	}
}

$nav = array(
	array(
		'slug' => 'start',
		'title' => 'Starting off',
		'pages' => array(
			array('system-requirements', 'System requirements'),
			array('paths', 'Managing include paths'),
			array('setup', 'Setting up Scaffold')
		)
	),
	
	array(
		'slug' => 'anatomy',
		'title' => 'Parts of an app',
		'pages' => array(
			array('controller', 'The controller'),
			array('model', 'The model'),
			array('view', 'The template <em>&amp;</em> view'),
			array('helper', 'The helper')
		)
	),
	
	array(
		'slug' => 'classes',
		'title' => 'Core classes',
		'pages' => array(
			array('ajax', 'AJAX'),
			array('cache', 'Cache'),
			array('config', 'Config'),
			array('crypt', 'Crypt'),
			array('csrf', 'CSRF'),
			array('database', 'Database'),
			array('error', 'Error'),
			array('file', 'File'),
			array('helper', 'Helper'),
			array('image', 'Image'),
			array('input', 'Input'),
			array('request', 'Request'),
			array('response', 'Response'),
			array('routes', 'Routes'),
			array('session', 'Session'),
			array('storage', 'Storage'),
			array('template', 'Template'),
			array('url', 'URL'),
			array('validator', 'Validator')
		)
	)
);

//  Grab the file
ob_start();
include_once $file;
$content = ob_get_clean();

//  And give it to the theme
include_once 'theme.php';
exit;