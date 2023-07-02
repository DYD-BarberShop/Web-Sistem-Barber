<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function save($data){

		$auth =$data["email"];
		$this->db->where("email",$auth);
		$results = $this->db->get("usuario");

		if ($results->num_rows() > 0) {
			$this->db->where("email",$auth);
			$this->db->update("usuario",$data);
			return $results->row()->id;
		}else{
			$this->db->query('ALTER TABLE usuario AUTO_INCREMENT 1');
			$this->db->insert("usuario",$data);
			return $this->db->insert_id();
		}
				
	}

}
