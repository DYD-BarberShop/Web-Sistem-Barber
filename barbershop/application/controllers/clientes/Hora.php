<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hora extends CI_Controller {

    public function __construct() {
        parent::__construct();

        date_default_timezone_set('America/Lima');
        $this->load->model("Hora_model");

        if (!$this->session->userdata("logincliente")) {
          redirect(base_url()."clientes/Login");
      }

    }


    public function getData(){

      $fecha = $this->input->post("fecha");
      $result=$this->Hora_model->getHoras($fecha);

      echo json_encode($result);
    }

    public function preReserva(){

      $pusher = $this->ci_pusher->get_pusher();

      $idUser = $this->session->userdata("id");
      $servicio = $this->input->post("servicio");
      $fecha =$this->input->post("fecha");
      $idh	= $this->input->post("idh");
      $barbero	= $this->input->post("barbero");
  
      $data = array(
          "hora_id"                =>	 $idh,
          "servicio_id"                =>	 $servicio,
          "baber_id"                =>	 $barbero,
          "usuario_id"                =>	 $idUser,
          "fecha"	 				           =>	 $fecha,
          "llave" 			              =>	$idUser."0",
      );
  
      if ($this->Hora_model->save($data)){
        $this->session->set_userdata("fecha",$fecha);
        $data['id'] = $this->session->userdata('id');
        $event = $pusher->trigger('chatglobal', 'my_event', $data);
        echo json_encode("success");
      }

    }
  

}
