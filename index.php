<?php 

	define('DS', DIRECTORY_SEPARATOR);
	difene('ROOT', realpah(dirname(__file__)) . DS);

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	
 ?>