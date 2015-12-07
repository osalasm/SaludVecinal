<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){

		if(isset($_POST["RUT"]) && isset($_POST["password"])) {
			$rut = $_POST["RUT"];
			$password = $_POST["password"];
			
			if($this->_credencialesValidas($rut, $password) &&
				$this->_esRutValido($rut)) {
				redirect(BASE_URL . "home");
			} else {
				$mensaje = "Usuario Invalido";
				$recordar = "Si";
				$a = array("mensaje" => $mensaje, "recordar" => $recordar);
				$this->load->view("login", $a);
			}
		} else {
			$this->load->view("login");
		}
	}

	//Devuelve verdadero si Rut y Contraseña coinciden, 
	//de lo contrario retorna falso.
	private function _credencialesValidas($usuario_rut, $usuario_contrasena){
		return true;
	}

	private function _esRutValido($rut) {
		// Algoritmo de validacion de rut
		return true;
	}


}