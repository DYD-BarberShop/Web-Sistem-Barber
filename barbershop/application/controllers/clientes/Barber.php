<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barber extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
  {
		redirect(base_url()."#barber");
	}
}
