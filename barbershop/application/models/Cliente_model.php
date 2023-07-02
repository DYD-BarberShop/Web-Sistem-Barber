<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_model extends CI_Model {



  public function getClientes(){
		$this->db->select("c.*");
		$this->db->from("usuario c");
		$this->db->where("c.tipo","");
		$resultados = $this->db->get();
		return $resultados->result();
	}

  public function getReservas($id){
		$this->db->select("r.*,r.id as idreserva,s.*,b.nombre as barber, h.*");
		$this->db->from("reserva r");
		$this->db->join("servicio s","r.servicio_id = s.id");
		$this->db->join("barber b","r.baber_id = b.id");
		$this->db->join("hora h","r.hora_id = h.id");
		$this->db->where("r.usuario_id",$id);
    	$this->db->order_by("r.fecha","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}

}
