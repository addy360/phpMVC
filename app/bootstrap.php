<?php

	//loading config file
	require_once('../app/config/setting.php');

	//loading libraries

	// require_once('libraries/Core.php');
	// require_once('libraries/Controller.php');
	// require_once('libraries/Database.php');

	//AUTOLOADS LIBRARIES
	//for this function to work, class names should have the same names as files
	spl_autoload_register(function($className){
		require_once('libraries/'.$className.'.php');
	});