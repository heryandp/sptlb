<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Selesai extends CI_Controller {

	public function index()
	{
		$this->load->view('modul/selesai');		
	}

	public function detail()
	{
		$this->load->view('modul/detail');
	}

}

/* End of file Selesai.php */
/* Location: ./application/controllers/modul/Selesai.php */