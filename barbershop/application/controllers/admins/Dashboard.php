<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Backend_model");
		$this->load->model("Barber_model");
		if (!$this->session->userdata("loginadmin")) {
			redirect(base_url()."admins/Login");
		}
	}

	public function index()
	{
		$data = array(
			"añoreserva" => $this->Backend_model->dataReserva(date("Y")),
			"usuario" => $this->Backend_model->dataComparativo("usuario"),
			"reserva" => $this->Backend_model->dataComparativo("reserva"),
			"servicio" => $this->Backend_model->dataComparativo("servicio"),
			"barber" => $this->Backend_model->dataComparativo("barber")
		);
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/dasboard", $data);
		$this->load->view("layoutAdmin/structure/footer");
	}

	public function getRData(){
    	$year = $this->input->post("year");
		$resultados = $this->Backend_model->dataReserva($year);
		echo json_encode($resultados);
	}

	public function getNRData(){
		$resultados = $this->Backend_model->dataNuevaReserva();
		echo json_encode($resultados);
	}

}
