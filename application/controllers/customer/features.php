<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class features extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_customer/header');
		$this->load->view('customer/features');
		$this->load->view('templates_customer/footer');
	}

}

/* End of file features.php */
