<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		
		$this->load->model("usuario");
		$this->b = $this->usuario->encontrar(1);
		$this->load->view("home", $this->b);
		//echo $this->usuario->getNombre() . "<br>";
		//echo $this->usuario->getApellido();
	}
}
