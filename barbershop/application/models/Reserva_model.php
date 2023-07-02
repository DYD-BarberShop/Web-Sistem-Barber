<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva_model extends CI_Model {

	public function getReservas($id){
		$this->db->select("r.*,r.id as idreserva,s.*,h.*");
		$this->db->from("reserva r");
		$this->db->join("servicio s","r.servicio_id = s.id");
		$this->db->join("hora h","r.hora_id = h.id");
		$this->db->where("r.usuario_id",$id);
		$this->db->where("r.estado", 1);
		$this->db->order_by("r.fecha","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getReservasAdmin(){
		$this->db->select("r.*,r.id as idreserva,s.nombre as servicio,h.*,u.nombre as cliente,b.nombre as barbero");
		$this->db->from("reserva r");
		$this->db->join("servicio s","r.servicio_id = s.id");
		$this->db->join("hora h","r.hora_id = h.id");
		$this->db->join("usuario u","r.usuario_id = u.id");
		$this->db->join("barber b","r.baber_id = b.id");
		$this->db->order_by("r.fecha","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save($data){
			return $this->db->insert("reserva",$data);
	}

	public function delete($idUser){
	$this->db->where("usuario_id", $idUser);
	$this->db->where("estado", 0);
	return $this->db->delete("reserva");
	}

}
