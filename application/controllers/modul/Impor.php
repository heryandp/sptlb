<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impor extends CI_Controller {

	public function index()
	{
		$this->load->view('modul/impor');
	}

	public function proses()
	{
	    $filename = $_FILES["filecsv"]["tmp_name"];
	    
	    $file = fopen($filename, "r");

	    while ($getData = fgetcsv($file, 10000, ",") !== FALSE) {
			echo $getData[0];
			echo "1";
	    }
	}

}

/* End of file Impor.php */
/* Location: ./application/controllers/modul/Impor.php */