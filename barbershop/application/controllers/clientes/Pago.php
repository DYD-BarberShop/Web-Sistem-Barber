<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pago extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model("Pago_model");
		$this->load->library('paypal');
		if (!$this->session->userdata("logincliente")) {
            redirect(base_url()."clientes/Login");
        }
	}

	public function index()
	{
        $idUser=$this->session->userdata("id");
		
		if(empty($this->Pago_model->getPreReserva($idUser))){
			redirect(base_url()."Home/#corte");
		}else{
			$data = array(
				"prereserva" 	    => $this->Pago_model->getPreReserva($idUser),
			 );
			$this->load->view("layoutCliente/structure/header");
			$this->load->view("layoutCliente/pago",$data);
			$this->load->view("layoutCliente/structure/footerpago");
		}

    }
    
    public function eliminar(){
        $pusher = $this->ci_pusher->get_pusher();
        $iduser=$this->session->userdata("id");
		$dato['id'] = $iduser;
		$event = $pusher->trigger('chatglobal', 'my_event', $dato);
		$this->Pago_model->delete($iduser);
		redirect(base_url()."#corte");
    }

    public function pay(){

		$this->paypal->set_api_context();

		$id	= $this->input->post("idservicio");
		
		if(!$id==null){

			$data=$this->Pago_model->getServicio($id);

			$payment_method  = "paypal";
			$return_url     		   = base_url()."clientes/Pago/success_payment";
			$cancel_url    			  = base_url()."clientes/Pago";
			$total                         = $data->precio;
			$description             = $data->nombre;
			$intent         			  = "sale";
			
			$this->paypal->create_payment( $payment_method, $return_url, $cancel_url, 
        	$total, $description, $intent );

			return;
		}
		
	}

	public function success_payment(){

		if ( !empty( $_GET['paymentId'] ) && !empty( $_GET['PayerID'] ) ) {

		    $this->paypal->execute_payment( $_GET['paymentId'], $_GET['PayerID'] );

            $llave			 = date("Y.m.d.H.i.s");
            $idUser	 = $this->session->userdata("id");
            
			$data = array(
					"estado"	 	 =>1,
					"llave"	 			=>$llave.$idUser,
			);

			if ($this->Pago_model->save($data,$idUser."0")) {
				redirect(base_url()."clientes/Reserva");
			}
            
		}
	}

}
