<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impor extends CI_Controller {

	public function index()
	{
		$this->load->view('modul/impor');
	}

	public function proses()
	{
		var_dump($_POST);
	}

}

/* End of file Impor.php */
/* Location: ./application/controllers/modul/Impor.php */