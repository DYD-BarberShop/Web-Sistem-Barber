<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocion_model extends CI_Model {

  	public function getPromocion($id){
		$this->db->select("p.*");
		$this->db->from("promocion p");
		$this->db->where("p.id",$id);
		$resultados = $this->db->get();
		return $resultados->row();
	}

  	public function getPromociones(){
		$this->db->select("p.*");
		$this->db->from("promocion p");
		$resultados = $this->db->get();
		return $resultados->result();
  	}

  	public function getPromocionCliente(){
		$this->db->select("p.*");
		$this->db->from("promocion p");
		$this->db->where("p.estado","Despublicar");
		$resultados = $this->db->get();
		return $resultados->result();
	}

  	public function save($data){
    	return $this->db->insert("promocion",$data);
 	}

  	public function update($id,$data){
    	$this->db->where("id",$id);
    	return $this->db->update("promocion",$data);
  	}

	function capturarImagen($id){
		$this->db->select("imagen");
		$this->db->where("id", $id);
		$this->db->from("promocion");
		$resultado = $this->db->get();
		return $resultado->row()->imagen;
	}
}
