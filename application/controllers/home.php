<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		
		$this->load->model("usuario");
		$this->usuario->encontrar(2);
		echo $this->usuario->getNombre() . "<br>";
		echo $this->usuario->getApellido();
	}
}