<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Servicio_model extends CI_Model {

	public function getServicio($id){
		$this->db->select("s.*");
		$this->db->from("servicio s");
		$this->db->where("s.id",$id);
		$resultados = $this->db->get();
		return $resultados->row();
	}

	public function getServicios2(){
		$this->db->select("s.*");
		$this->db->from("servicio s");
		$this->db->where("s.estado","1");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getServicios(){
		$this->db->select("s.*,count(*) as data");
		$this->db->from("reserva r");
		$this->db->join("servicio s","r.servicio_id = s.id");
		$this->db->group_by("r.servicio_id");
    	$this->db->order_by("data","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("servicio",$data);
	}

	public function update($id,$data){
		$this->db->where("id",$id);
		return $this->db->update("servicio",$data);
	}

	function capturarImagen($id){
	$this->db->select("imagen");
	$this->db->where("id", $id);
	$this->db->from("servicio");
	$resultado = $this->db->get();
	return $resultado->row()->imagen;
	}
}
