<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impor extends CI_Controller {

	public function index()
	{
		$this->load->view('modul/impor');
	}

	public function proses()
	{
		// var_dump($_POST['data']);
		foreach ($_POST['data'] as $item) {
			$data = array(
				'npwp' => $item['npwp'],
			);
			var_dump($data);
		}
	}

}

/* End of file Impor.php */
/* Location: ./application/controllers/modul/Impor.php */