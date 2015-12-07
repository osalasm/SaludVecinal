<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->model("usuario");
		$this->usuario->encontrar(1);
		$nombre = $this->usuario->getNombre();
		$apellido = $this->usuario->getApellido();
		if($this->_esVecino()) {
			$this->vecino = array("nombre" => $nombre, "apellido" => $apellido);
			$this->load->view("home", $this->vecino);
		}
		if($this->_esProfesional()) {
			$this->profesional = array("nombre" => $nombre, "apellido" => $apellido);
			$this->load->view("home2", $this->profesional);
		}
		if($this->_esAdministrador()) {
			$this->administrador = array("nombre" => $nombre, "apellido" => $apellido);
			$this->load->view("home3", $this->administrador);				
		}
	}

	private function _esVecino() {
		return false;
	}

	private function _esProfesional() {
		return false;
	}

	private function _esAdministrador() {
		return true;
	}
}
