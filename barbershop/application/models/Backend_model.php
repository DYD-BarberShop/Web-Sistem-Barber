<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_model extends CI_Model {

	public function dataComparativo($nombre){
		$this->db->select("count(*) as data");
		$this->db->from($nombre);
		if($nombre!="usuario"){
	        	$this->db->where("estado", 1);
	        } else {
			$this->db->where("tipo", "");
		}
		$resultados = $this->db->get();
		return $resultados->row();



	}

	public function dataReserva($year){
		$this->db->select("MONTH(fecha) as mes,count(*) as data");
		$this->db->from('reserva');
		$this->db->where("fecha >=",$year."-01-01");
		$this->db->where("fecha <=",$year."-12-31");
		$this->db->group_by("mes");
		$this->db->order_by("mes");
		$resultados = $this->db->get();
		return json_encode($resultados->result());
	}

	public function dataNuevaReserva(){
		$this->db->select("r.*,r.id as idreserva,s.*");
		$this->db->from("reserva r");
		$this->db->join("servicio s","r.servicio_id = s.id");
		$this->db->order_by("r.fecha","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}
}
