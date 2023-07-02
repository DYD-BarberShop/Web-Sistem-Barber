<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Pago_model extends CI_Model {

	public function getPreReserva($id){
			$this->db->select("r.*,h.inicio, h.fin, s.id as idservicio,s.*");
			$this->db->from("reserva r");
            $this->db->join("hora h","r.hora_id=h.id");
            $this->db->join("servicio s","r.servicio_id=s.id");
			$this->db->where("r.usuario_id",$id);
			$this->db->where("r.estado=","0");
			$this->db->order_by("r.id","desc");
			$resultados = $this->db->get();
			return $resultados->row();
	}

	public function getServicio($id){
		$this->db->select("s.precio, s.nombre");
		$this->db->from("servicio s");
		$this->db->where("s.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}


    public function delete($idUser){
        $this->db->where("usuario_id", $idUser);
        $this->db->where("estado", 0);
        return $this->db->delete("reserva");
    }

	public function save($data,$llave){
		$this->db->where("llave",$llave);
		return $this->db->update("reserva",$data);
	}

}
