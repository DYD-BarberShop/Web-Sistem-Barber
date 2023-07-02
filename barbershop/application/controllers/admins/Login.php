
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("Usuario_model");
	}

	public function index()
	{
      	if ($this->session->userdata("loginadmin")) {
						redirect(base_url()."admins/Dashboard");
				}
				else{
						$this->load->view("layoutAdmin/login");
				}
	}

	public function login(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$tipo="Admin";
		$res = $this->Usuario_model->login($email, sha1($password),$tipo);

		if (!$res) {
			$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url()."admins/Login");
		}
		else{
			$data  = array(
				'id'      		 => $res->id,
				'nombres' 		 => $res->nombre,
				'email'   		 => $res->email,
        'imagen'  		 => $res->imagen,
      	'loginadmin'   => TRUE,
				'logincliente' => FALSE
			);
			$this->session->set_userdata($data);
			redirect(base_url()."admins/Dashboard");
		}
	}


    public function actulisarusuario(){
				$idusuario=$this->session->userdata("id");
        $this->load->model("Usuario_model");
				$res = $this->Usuario_model->getUsuario($idusuario);
				$data  = array(
					'id' => $res->id,
					'nombres' => $res->nombre,
					'email' =>$res->email,
        	'imagen' => $res->imagen,
					'loginadmin' => TRUE
              );
			$this->session->set_userdata($data);
      redirect(base_url()."admins/Usuario/perfil");
    }

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url()."admins/Login");
	}
}
