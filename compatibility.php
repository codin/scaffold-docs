<?php

//  Check PHP version
	if(version_compare(5.3, phpversion()) >= 0) {
		die('<b>NOT SUPPORTED</b> Your PHP version is too low. Scaffold requires PHP 5.3, and you have' . phpversion());
	}
	
//  Check whether PDO exists
	if(!class_exists('PDO')) {
		die('<b>NOT SUPPORTED</b> You don’t have PDO enabled on your server. Speak to your webhost.');
	}
	
//  Check server version
	if(function_exists('apache_get_version')) {
	//  Apache version
		$version = explode(' ', apache_get_version());
		$version = str_replace('Apache/', '', $version[0]);
		
		if(version_compare(2, $version) >= 0) {
			die('<b>NOT SUPPORTED</b> You need a newer version of Apache. Seriously, that’s old, man.');
		}
		
	//  Whether mod_rewrite is installed
		if(!in_array('mod_rewrite', apache_get_modules())) {
			die('<b>PARTIALLY SUPPORTED</b> Scaffold should work as normal, but you won’t get pretty URLs. Ask your webhost about <code>mod_rewrite</code> support.');
		}
	}
	
//  Get permissions
	$permissions = substr(decoct(fileperms(dirname(getcwd()))), -3, 3);
	if($permissions < 700) {
		die('<b>NOT SUPPORTED</b> It appears you don’t have full access to modify, execute, and move files from outside the current folder. I might be wrong, though.');
	}
	
//  All good!
	echo '<b>SUPPORTED!</b> Scaffold seems compatible with your server. Yay!';