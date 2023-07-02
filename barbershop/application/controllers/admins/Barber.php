<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barber extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Barber_model");
        if (!$this->session->userdata("loginadmin")) {
          redirect(base_url()."admins/Login");
        }
    }

    public function index() {
      $data = array(
          "barbers" => $this->Barber_model->getBarbers(),
      );
	  $this->load->view("layoutAdmin/structure/head");
	  $this->load->view("layoutAdmin/structure/navbar");
	  $this->load->view("layoutAdmin/structure/sidebar");
	  $this->load->view("layoutAdmin/barber/index", $data);
	  $this->load->view("layoutAdmin/structure/footer");
	  $this->load->view("layoutAdmin/js/barber");
    }

    public function new() {
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/barber/new");
		$this->load->view("layoutAdmin/structure/footer");
    }

    public function save(){

      $nombre        = $this->input->post("nombre");
      $descripcion   = $this->input->post("descripcion");

      $config['upload_path']   = './assets/cliente/img/barber';
      $config['allowed_types'] = 'gif|jpg|png|PNG';

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('imagen')) {
          $imagen = "default.png";
      } else {
          $data = array('upload_data' => $this->upload->data());
          $imagen = $data["upload_data"]["file_name"];
      }

      $data = array(
          'nombre'          => $nombre,
          'descripcion'     => $descripcion,
          'imagen'          => $imagen,
          'estado'          => "1",
      );

      if ($this->Barber_model->save($data)) {
          redirect(base_url() . "admins/Barber");
      } else {
          redirect(base_url() . "admins/Barber/new");
      }
    }

    public function edit($id){
  		$data  = array(
  			"barber" => $this->Barber_model->getBarber($id),
  		);
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/barber/edit", $data);
		$this->load->view("layoutAdmin/structure/footer");
  	}

    public function update(){
		$id            = $this->input->post("id");
		$nombre        = $this->input->post("nombre");
		$descripcion   = $this->input->post("descripcion");
		$imagen = $this->Barber_model->capturarImagen($id);
  
		$config['upload_path']   = './assets/cliente/img/barber';
		$config['allowed_types'] = 'gif|jpg|png|PNG';
  
		$this->load->library('upload', $config);
  
		if ($this->upload->do_upload('imagen')) {
            unlink("./assets/cliente/img/barber/".$imagen);
            $data   = array('upload_data' => $this->upload->data());
            $imagen = $data["upload_data"]["file_name"];
		}
  
		$data = array(
			'nombre'          => $nombre,
			'descripcion'     => $descripcion,
			'imagen'          => $imagen,
			'estado'          => "1",
		);
  
		if ($this->Barber_model->update($id, $data)) {
			redirect(base_url()."admins/Barber");
		} else {
			redirect(base_url()."admins/Barber/edit");
		}
    }

    public function delete($id){
  		$data  = array(
  			'estado' => "0",
  		);
  		$this->Barber_model->update($id,$data);
  		redirect(base_url() . "admins/Barber");
  	}

}
