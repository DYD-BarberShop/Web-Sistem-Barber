<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Promocion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Promocion_model");
        if (!$this->session->userdata("loginadmin")) {
          redirect(base_url()."admins/Login");
        }
    }

    public function index() {
		$data = array(
			"promociones" => $this->Promocion_model->getPromociones(),
		);
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/promocion/index", $data);
		$this->load->view("layoutAdmin/structure/footer");
		$this->load->view("layoutAdmin/js/promocion");
    }

    public function new() {
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/promocion/new");
		$this->load->view("layoutAdmin/structure/footer");
    }

    public function save(){

		$nombre        = $this->input->post("nombre");
		$descuento     = $this->input->post("descuento");
		$descripcion   = $this->input->post("descripcion");

		$config['upload_path']   = './assets/cliente/img/promocion';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('imagen')) {
			$imagen = "default.png";
		} else {
			$data = array('upload_data' => $this->upload->data());
			$imagen = $data["upload_data"]["file_name"];
		}

		$data = array(
			'nombre'          => $nombre,
			'descuento'       => $descuento,
			'imagen'          => $imagen,
			'descripcion'     => $descripcion,
			'estado'          => "Publicar",
		);

		if ($this->Promocion_model->save($data)) {
			redirect(base_url() . "admins/Promocion");
		} else {
			redirect(base_url() . "admins/Promocion");
		}
    }

    public function edit(){
      	$id = $this->input->post("id");
  		$data  = array('promocion' => $this->Promocion_model->getPromocion($id));
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/promocion/edit", $data);
		$this->load->view("layoutAdmin/structure/footer");
  	}

    public function update(){

      	$id            = $this->input->post("id");
      	$nombre        = $this->input->post("nombre");
      	$descuento     = $this->input->post("descuento");
      	$descripcion   = $this->input->post("descripcion");
		$imagen        = $this->Promocion_model->capturarImagen($id);

		$config['upload_path']   = './assets/cliente/img/promocion';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('imagen')) {
            unlink("./assets/cliente/img/promocion/".$imagen);
            $data   = array('upload_data' => $this->upload->data());
            $imagen = $data["upload_data"]["file_name"];
		}

		$data = array(
			'nombre'          => $nombre,
			'descuento'       => $descuento,
			'imagen'          => $imagen,
			'descripcion'     => $descripcion
		);

		if ($this->Promocion_model->update($id, $data)) {
			redirect(base_url()."admins/Promocion");
		} else {
			redirect(base_url()."admins/Promocion/edit");
		}
    }

    public function changeState(){
      $id            = $this->input->post("id");
      $estado        = $this->input->post("estado");

      if($estado=="Despublicar"){
        $estados="Publicar";
      }else{
        $estados="Despublicar";
      }
  		$data  = array(
  			'estado' =>$estados,
  		);
  		$this->Promocion_model->update($id,$data);
  		redirect(base_url() . "admins/Promocion");
  	}

}
