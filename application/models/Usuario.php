<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Model {
	private $id;
	private $nombre;
	private $apellido;
	private $email;
	private $rut;

	public function encontrarRut($rut) {
		$sql = "SELECT * FROM usuario WHERE rut = $rut";
		$query = $this->db->query($sql);
		$row = $query->row();
		
		$this->id = $row->ID;
		$this->nombre = $row->NOMBRE;
		$this->apellido = $row->APELLIDO;
		$this->email = $row->CORREO_ELECTRONICO;
		$this->rut = $row->RUT;
			

		#session_register("id");
		#$_SESSION['id'] = $row->ID;
	}

	public function tipoUsuario(){
		return $this->id;	
	}

	public function esCredencialValida($rut, $contrasena){
		$query = $this->db->get_where('usuario', array('rut' => $rut, 'contrasena' => $contrasena));
		return ($query->num_rows() > 0);
	}

	public function getRut() {
		return $this->rut;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellido() {
		return $this->apellido;
	}
}
