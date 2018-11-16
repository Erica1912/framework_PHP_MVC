<?php
	class Paginas extends Controlador{
		public function __construct(){
			
		}

		public function index(){
			$datos = [
				'titulo' => 'Bienvenidos a mi página'				
			];
			$this->vista('paginas/inicio', $datos);

		}		
	}

?>