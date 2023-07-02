<?php

class Cliente extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Cliente_model");
        if (!$this->session->userdata("loginadmin")) {
          redirect(base_url()."admins/Login");
        }
    }

    public function index() {
      $data = array(
          "clientes" => $this->Cliente_model->getClientes(),
      );
	  $this->load->view("layoutAdmin/structure/head");
	  $this->load->view("layoutAdmin/structure/navbar");
	  $this->load->view("layoutAdmin/structure/sidebar");
	  $this->load->view("layoutAdmin/cliente/index", $data);
	  $this->load->view("layoutAdmin/structure/footer");
	  $this->load->view("layoutAdmin/js/cliente");
    }

    public function reserva() {

      $idusuario = $this->input->post("id");

      $data = array(
          "reservacs" 	    => $this->Cliente_model->getReservas($idusuario),
      );

	  $this->load->view("layoutAdmin/structure/head");
	  $this->load->view("layoutAdmin/structure/navbar");
	  $this->load->view("layoutAdmin/structure/sidebar");
	  $this->load->view("layoutAdmin/cliente/reserva", $data);
	  $this->load->view("layoutAdmin/structure/footer");
    }
}
