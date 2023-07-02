<?php

class Reserva extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Reserva_model");
        if (!$this->session->userdata("loginadmin")) {
          redirect(base_url()."admins/Login");
        }
    }

    public function index() {
      $data = array(
          "reservas" => $this->Reserva_model->getReservasAdmin(),
      );
	  $this->load->view("layoutAdmin/structure/head");
	  $this->load->view("layoutAdmin/structure/navbar");
	  $this->load->view("layoutAdmin/structure/sidebar");
	  $this->load->view("layoutAdmin/reserva", $data);
	  $this->load->view("layoutAdmin/structure/footer");
	  $this->load->view("layoutAdmin/js/reserva");
    }
}
