<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hora_model extends CI_Model {

  public function getClientes(){
		$this->db->select("c.*");
		$this->db->from("usuario c");
		$this->db->where("c.tipo","Cliente");
		$resultados = $this->db->get();
		return $resultados->result();
	}

  public function getHoras($fecha){
		$dateSelect = date('Y-m-d', strtotime($fecha));
		$dateNow    = date("Y-m-d");
		$this->db->select("h.*");
		$this->db->from("hora h");
		$this->db->join("reserva r","r.hora_id=h.id AND r.fecha='".$fecha."'","left");
		$this->db->where("r.hora_id",null,true);
		if($dateSelect==$dateNow){
			$this->db->where("h.inicio >","'".date("H:i")."'",false);
		}
		$this->db->order_by("h.id","asc");
		$resultados = $this->db->get();
		if($dateSelect>=$dateNow){
			return $resultados->result();
		}
		
	}

	public function save($data){
		//$this->db->query('ALTER TABLE reserva AUTO_INCREMENT 1');
		return $this->db->insert("reserva",$data);
	}


}
