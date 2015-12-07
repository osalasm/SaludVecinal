<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Model {
	private $nombre;
	private $apellido;
	private $email;

	public function encontrar($id) {
		$sql = "SELECT * FROM usuario WHERE id = $id";
		$query = $this->db->query($sql);
		$row = $query->row();

		$this->nombre = $row->nombre;
		$this->apellido = $row->apellido;
		$this->email = $row->email;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getApellido() {
		return $this->apellido;
	}



}