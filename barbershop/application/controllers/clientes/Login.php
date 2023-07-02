
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("Usuario_model");
		$this->load->model("Login_model");
	}

	public function index()
	{
      	if ($this->session->userdata("logincliente")) {
			redirect(base_url()."home");
		}
		else{
			$this->load->view("layoutCliente/login");
		}
	}

	function  verificar(){

		$idToken = $this->input->post("idtoken");
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$imagen = $this->input->post("imagen");
        
		$dataresp = array(
			'nombre' => $name,
			'email' => $email,
			'imagen'   =>  $imagen
		);
		
		$datasession = array(
			'loginadmin'   => FALSE,
			'logincliente' => TRUE
		);
	
		$idUser = $this->Login_model->save($dataresp);

		$this->session->set_userdata(array_merge($dataresp,$datasession, array('id' => $idUser)));
	
		echo "success";
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url()."Home");
	}

}
