<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {


	public function getUsuarios(){
		$this->db->select("u.*");
		$this->db->from("usuario u");
		$this->db->where("u.tipo","Admin");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getUsuario($id){
		$this->db->select("u.*");
		$this->db->from("usuario u");
		$this->db->where("u.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function save($data){
		return $this->db->insert("usuario",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("usuario",$data);
	}

	public function login($email, $password,$tipo){
		$this->db->where("email", $email);
		$this->db->where("password", $password);
		$this->db->where("tipo", $tipo);
		$resultados = $this->db->get("usuario");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}

	function capturarImagen($id){
	$this->db->select("imagen");
	$this->db->where("id", $id);
	$this->db->from("usuario");
	$resultado = $this->db->get();
	return $resultado->row();
	}
}
