<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
      $this->load->model("Servicio_model");
			$this->load->model("Reserva_model");
			$this->load->model("Barber_model");
			$this->load->model("Promocion_model");

			if ($this->session->userdata("logincliente")) {
				$llave = $this->session->userdata("llave");
				if($user= $this->Barber_model->getUser($llave)){
					$this->session->set_userdata("id",$user->id);
				}
			}

	}

	public function index(){
		$data = array(
			"servicios" 		=> $this->Servicio_model->getServicios2(),
			"barbers" 			=> $this->Barber_model->getBarbers(),
			"promociones" 	=> $this->Promocion_model->getPromocionCliente(),
		);
		$this->load->view("layoutCliente/structure/header");
		$this->load->view("layoutCliente/home",$data);
		$this->load->view("layoutCliente/structure/footer");
	}

}
