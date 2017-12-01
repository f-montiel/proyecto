<?php 

	require_once "Config/Autoload.php";
	Config\Autoload::run();
	$facundo = new Models\estudiante();
	$facundo->set("nombre", "Facundo");
	$facundo->set("edad", 32);
	$facundo->add();
	$vista = $facundo->view();
	print $view;

 ?>