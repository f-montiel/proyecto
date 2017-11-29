<?php

	require_once "Config/Autoload.php";
	Config\Autoload::run();

    $estudiante = new Models\Estudiante;

    die(var_dump($estudiante));

?>