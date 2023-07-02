<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reserva extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Barber_model");
        $this->load->model("Servicio_model");
        $this->load->model("Reserva_model");
        if (!$this->session->userdata("logincliente")) {
            redirect(base_url()."clientes/login");
        }
    }

    public function index(){
      $idusuario=$this->session->userdata("id");
      $data = array(
          "reservas" 	    => $this->Reserva_model->getReservas($idusuario),
      );
      $this->load->view("layoutCliente/structure/header");
      $this->load->view("layoutCliente/reservas/reserva",$data);
      $this->load->view("layoutCliente/structure/footer");
    }

    public function addreserva($id){

        $pusher = $this->ci_pusher->get_pusher();
        $iduser=$this->session->userdata("id");
        
        $this->Reserva_model->delete($iduser);

        $dato['id'] = $iduser;
        $event = $pusher->trigger('chatglobal', 'my_event', $dato);

          $data = array(
              "barbers" => $this->Barber_model->getBarbers(),
              "idservicio"=>$id,
          );
            
        $this->session->set_userdata("idServicio", $id);
        $this->load->view("layoutCliente/structure/header");
        $this->load->view("layoutCliente/reservas/addreserva",$data);
        $this->load->view("layoutCliente/structure/footerreserva");
    
    }

    public function save() {
      
        $idusuario=$this->session->userdata("id");
        $fecha    = $this->input->post("fecha");
        $hora     = $this->input->post("hora");
        $servicio = $this->input->post("servicio");
        $barber   =$this->input->post("barber");

        $data= array(
            'baber_id'    => $barber,
            'servicio_id' => $servicio,
            'usuario_id'  => $idusuario,
            'fecha'       => $fecha,
            'hora'        => $hora,
        );

        if ($this->Reserva_model->save($data)) {
            redirect(base_url() . "clientes/Reserva");
        } else {
            redirect(base_url() . "Home");
        }
    }
}
