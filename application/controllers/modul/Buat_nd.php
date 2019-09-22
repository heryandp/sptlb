<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat_nd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('modul/buat_nd');
	}

	public function buat($id_spt)
	{
		$this->load->view('modul/buat_nd_buat');
	}
}

/* End of file Buat_nd.php */
/* Location: ./application/controllers/modul/Buat_nd.php */