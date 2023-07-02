<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Usuario_model");
    }

    public function index() {
        $this->load->view("layoutCliente/registro");
    }

    public function registro() {

        $nombres  = $this->input->post("nombres");
        $email    = $this->input->post("email");
        $password = $this->input->post("password");

        $config['upload_path'] = './assets/template/clienteTemplate/img/usuario';
        $config['allowed_types'] = 'gif|jpg|png|PNG';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('imagen')) {
            $imagen = "default-book.png";
        } else {
            $data = array('upload_data' => $this->upload->data());
            $imagen = $data["upload_data"]["file_name"];
        }

        $data = array(
            'nombre'   => $nombres,
            'email'    => $email,
            'password' => sha1($password),
            'imagen'   => $imagen,
            'tipo'     => "Cliente",
        );

        if ($this->Usuario_model->save($data)) {
            redirect(base_url() . "clientes/login");
        } else {
            redirect(base_url() . "registro");
        }
    }

    public function profile()
    {
      $this->load->view("layoutCliente/structure/header");
      $this->load->view("layoutCliente/profile");
      $this->load->view("layoutCliente/structure/footer");
    }

    public function update(){

    	  $idusuario=$this->session->userdata("id");
    		$nombres = $this->input->post("nombres");
    		$email = $this->input->post("email");

    		$data  = array(
    			'nombre' => $nombres,
    			'email' => $email,
    		);

    		if ($this->Usuario_model->update($idusuario,$data)) {
    			redirect(base_url()."clientes/login/actulisarusuario/");
    		}
    		else{
					redirect(base_url()."clientes/usuario");
    		}


    	}
    public function changeImage() {
        $idusuario=$this->session->userdata("id");

        $config['upload_path'] = './assets/template/clienteTemplate/img/usuario';
        $config['allowed_types'] = 'gif|jpg|png|PNG';

        $this->load->library('upload', $config);

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('imagen')) {
            $imagen = "";
        } else {
            $registro = $this->Usuario_model->capturarImagen($idusuario);
	    			unlink("./assets/template/clienteTemplate/img/usuario/".$registro->imagen);
            $data   = array('upload_data' => $this->upload->data());
            $imagen = $data["upload_data"]["file_name"];
        }

        $datauser = array(
             'imagen'=>$imagen,
        );

        if ($this->Usuario_model->update($idusuario,$datauser)) {
	        redirect(base_url()."clientes/login/actulisarusuario");
				}
				else
				{
					redirect(base_url()."clientes/usuario");
        }

    }
}
