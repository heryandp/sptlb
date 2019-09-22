<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('serverside/M_get');
		
	}

	// Ambil data yang belum dibuat ND / baru di impor
	public function belum_nd()
	{
		echo $this->M_get->belum_nd(array());
	}

}

/* End of file Get.php */
/* Location: ./application/controllers/serverside/Get.php */