<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuario_model");
        if (!$this->session->userdata("loginadmin")) {
          redirect(base_url()."admins/Login");
        }
    }

    public function index() {
      $data = array(
          "usuarios" => $this->Usuario_model->getUsuarios(),
      );
	  $this->load->view("layoutAdmin/structure/head");
	  $this->load->view("layoutAdmin/structure/navbar");
	  $this->load->view("layoutAdmin/structure/sidebar");
	  $this->load->view("layoutAdmin/usuario/index", $data);
	  $this->load->view("layoutAdmin/structure/footer");
	  $this->load->view("layoutAdmin/js/usuario");
    }

    public function new() {
		$this->load->view("layoutAdmin/structure/head");
		$this->load->view("layoutAdmin/structure/navbar");
		$this->load->view("layoutAdmin/structure/sidebar");
		$this->load->view("layoutAdmin/usuario/new");
		$this->load->view("layoutAdmin/structure/footer");
    }

    public function save() {

        $nombres  = $this->input->post("nombres");
        $email    = $this->input->post("email");
        $password = $this->input->post("password");

        $data = array(
            'nombre'   => $nombres,
            'email'    => $email,
            'password' => sha1($password),
            'imagen'   => "defaultUser.png",
            'tipo'     => "Admin",
        );

        if ($this->Usuario_model->save($data)) {
            redirect(base_url() . "admins/Usuario");
        } else {
            redirect(base_url() . "Registro");
        }
    }

    public function perfil()
    {
      $id=$this->session->userdata("id");
      $data  = array(
          'usuario' => $this->Usuario_model->getUsuario($id),
      );
	  $this->load->view("layoutAdmin/structure/head");
	  $this->load->view("layoutAdmin/structure/navbar");
	  $this->load->view("layoutAdmin/structure/sidebar");
	  $this->load->view("layoutAdmin/perfil", $data);
	  $this->load->view("layoutAdmin/structure/footer");
    }

    public function update(){

		$idusuario=$this->session->userdata("id");
		$nombres = $this->input->post("nombres");
		$email = $this->input->post("email");

		$idusuario=$this->session->userdata("id");

		$config['upload_path'] = './assets/cliente/img/usuario';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['file_name']     = "user".$idusuario;
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('imagen')) {
			$data   = array('upload_data' => $this->upload->data());
			$imagen = $data["upload_data"]["file_name"];
		}

		$data  = array(
            'nombre'   => $nombres,
            'email'    => $email,
			'imagen'   => $imagen
		);

		if ($this->Usuario_model->update($idusuario,$data)) {
			redirect(base_url()."admins/Login/actulisarusuario/");
		}
		else{
			redirect(base_url()."admins/Usuario/perfil");
		}

	}
}
