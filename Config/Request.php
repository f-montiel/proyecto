<?php

namespace Config;

	class Request
	{
		private $controlador;
		private $metodo;
		private $argumento;

		public function __construct()
		{
			$uri = $_SERVER['REQUEST_URI'];

			if(isset($uri)){
				$ruta = $uri; // filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
				$ruta = explode("/", $ruta);
				$ruta = array_filter($ruta);
				$this->controlador = ucfirst(strtolower(array_shift($ruta)));
				$this->metodo = strtolower(array_shift($ruta));

				if(!$this->metodo) {
					$this->metodo = "index";
				}

				$this->argumento = $ruta;
			}
		}

		public function getControlador()
		{
			return $this->controlador;
		}

		public function getMetodo()
		{
			return $this->metodo;
		}

		public function getArgumento()
		{
			return $this->argumento;
		}
	}


?>