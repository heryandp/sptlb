<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}

	public function tentang()
	{
		$this->load->view('tentang');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */