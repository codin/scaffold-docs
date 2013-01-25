<?php

/**
 *   Scaffold
 *   Mini-documentation script
 */

//  Get the current URL
$url = (string) filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);
if($url == '') $url = 'index';

$base = 'content/' . $url;

if(file_exists($base . '.html')) {
	$file = $base . '.html';
} else {
	if(file_exists($base . '/index.html')) {
		$file = $base . '/index.html';
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
	),
	
	array(
		'slug' => 'functions',
		'title' => 'Core functions'
	),
	
	array(
		'slug' => 'config',
		'title' => 'Configuring your app',
		
		'pages' => array(
			array('cache', 'Cache'),
			array('crypt', 'Crypt'),
			array('csrf', 'CSRF'),
			array('database', 'Database'),
			array('email', 'Email'),
			array('env', 'Environment'),
			array('error', 'Error'),
			array('file', 'File'),
			array('image', 'Image'),
			array('input', 'Input'),
			array('language', 'Language'),
			array('misc', 'Miscellaneous'),
			array('paths', 'Paths'),
			array('routes', 'Routes'),
			array('session', 'Session'),
			array('template', 'Template')
		)
	)
);

//  Grab the file
$content = file_get_contents($file);

//  And give it to the theme
if(!isset($_GET['ajax'])) {
	include_once 'theme.php';
	exit;
}

echo json_encode(array('pie' => $content));