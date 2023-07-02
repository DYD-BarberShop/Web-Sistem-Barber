<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Servicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Servicio_model");
        if (!$this->session->userdata("loginadmin")) {
          redirect(base_url()."admins/Login");
        }
    }

    public function index() {
      $data = array(
          "servicios" => $this->Servicio_model->getServicios2(),
      );
	  $this->load->view("layoutAdmin/structure/head");
	  $this->load->view("layoutAdmin/structure/navbar");
	  $this->load->view("layoutAdmin/structure/sidebar");
	  $this->load->view("layoutAdmin/servicio/index", $data);
	  $this->load->view("layoutAdmin/structure/footer");
	  $this->load->view("layoutAdmin/js/servicio");
    }

    public function new() {
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/servicio/new");
		$this->load->view("layoutAdmin/structure/footer");
    }

    public function save(){

      $nombre        = $this->input->post("nombre");
      $stilo         = $this->input->post("stilo");
      $precio        = $this->input->post("precio");
      $descripcion   = $this->input->post("descripcion");

      $config['upload_path']   = './assets/cliente/img/cortesMes';
      $config['allowed_types'] = 'gif|jpg|png|PNG';

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('imagen')) {
          $imagen = "default-book.png";
      } else {
          $data = array('upload_data' => $this->upload->data());
          $imagen = $data["upload_data"]["file_name"];
      }

      $data = array(
          'nombre'          => $nombre,
          'stilo'           => $stilo,
          'precio'          => $precio,
          'imagen'          => $imagen,
          'descripcion'     => $descripcion,
          'estado'          => "1",
      );

      if ($this->Servicio_model->save($data)) {
          redirect(base_url() . "admins/Servicio");
      } else {
          redirect(base_url() . "admins/Servicio/new");
      }
    }

    public function edit($id){
  		$data  = array(
  			'servicio' => $this->Servicio_model->getServicio($id),
  		);
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/servicio/edit", $data);
		$this->load->view("layoutAdmin/structure/footer");
  	}

    public function update(){
      $id            = $this->input->post("id");
      $nombre        = $this->input->post("nombre");
      $stilo         = $this->input->post("stilo");
      $precio        = $this->input->post("precio");
      $descripcion   = $this->input->post("descripcion");

	  $imagen = $this->Servicio_model->capturarImagen($id);

      $config['upload_path']   = './assets/cliente/img/cortesMes';
      $config['allowed_types'] = 'gif|jpg|png|PNG';

      $this->load->library('upload', $config);

	  if ($this->upload->do_upload('imagen')) {
		  unlink("./assets/cliente/img/cortesMes/".$imagen);
		  $data   = array('upload_data' => $this->upload->data());
		  $imagen = $data["upload_data"]["file_name"];
	  }
	  
      $data = array(
          'nombre'          => $nombre,
          'stilo'           => $stilo,
          'precio'          => $precio,
          'descripcion'     => $descripcion,
		  'imagen'          => $imagen
      );

      if ($this->Servicio_model->update($id,$data)) {
          redirect(base_url()."admins/Servicio");
      } else {
          redirect(base_url()."admins/Servicio/edit/".$id);
      }
    }

    public function delete($id){
  		$data  = array(
  			'estado' => "0",
  		);
  		$this->Servicio_model->update($id,$data);
  		redirect(base_url() . "admins/Servicio");
  	}

}
