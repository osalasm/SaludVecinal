<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		
		$this->load->model("usuario");
		$this->usuario->encontrar(1);
		$nombre = $this->usuario->getNombre();
		$apellido = $this->usuario->getApellido();
		$this->b = array("nombre" => $nombre, "apellido" => $apellido);
		$this->load->view("home", $this->b);
	}
}
