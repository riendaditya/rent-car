<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class about extends CI_Controller {

	public function index()
	{
		$this->load->view('templates_customer/header.php');
		$this->load->view('customer/about.php');
		$this->load->view('templates_customer/footer.php');
	}

}

/* End of file about.php */
