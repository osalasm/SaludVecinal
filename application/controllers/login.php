<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function index(){
		if(isset($_POST["RUT"]) && isset($_POST["contrasena"])) {
			$rut = $_POST["RUT"];
			$contrasena = $_POST["contrasena"];
		
			if($this->_credencialesValidas($rut, $contrasena) &&
				$this->_esRutValido($rut)) {
				redirect(BASE_URL . "home");
			} else {
				$mensaje = "Usuario Invalido";
				$a = array("mensaje" => $mensaje);
				$this->load->view("login", $a);
			}
		} else {
			$this->load->view("login");
		}
	}

	//Devuelve verdadero si Rut y Contraseña coinciden, 
	//de lo contrario retorna falso.
	private function _credencialesValidas($rut, $contrasena) {
		$this->load->model("Usuario");
		if($this->Usuario->esCredencialValida($rut, $contrasena)){
			return true;
		}
	}

	private function _esRutValido($rut) {
		// Algoritmo de validacion de rut
		return true;
	}


}
