<?php 

namespace Config;

	class Enrutador
	{

		public static function run(request $request)
		{
			$controlador = $request->getControlador() . "Controlador";
			$ruta = ROOT . "Controllers" . DS . $controlador . ".php";
			$metodo = $request->getMetodo();
			$argumento = $request->getArgumento();
			if(is_readable($ruta)) {
				require_once $ruta;
				$mostrar = "Controllers\\" . $controlador;
				$controlado = new $mostrar;
				if(!isset($metodo)){
					call_user_func(array($controlador, $metodo)); 
				}
				else{
					call_user_func_array(array($controlador, $metodo), $argumento);
				}
			}
		}


	}


?>