<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barber_model extends CI_Model {

	public function getBarber($id){
		$this->db->select("b.*");
		$this->db->from("barber b");
		$this->db->where("b.id",$id);
		$resultados = $this->db->get();
		return $resultados->row();
	}

	public function getBarbers(){
		$this->db->select("b.*");
		$this->db->from("barber b");
			$this->db->where("estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("barber",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("barber",$data);
	}

	function capturarImagen($id){
		$this->db->select("imagen");
		$this->db->where("id", $id);
		$this->db->from("barber");
		$resultado = $this->db->get();
		return $resultado->row()->imagen;
	}

  	function getTotal(){
		$this->db->select("count(*) as data");
		$this->db->from("barber");
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getUser($email){
		$this->db->select("u.id");
		$this->db->from("usuario u");
		$this->db->where("u.email", $email);
		$result = $this->db->get();
		return $result->row();
	}
}
