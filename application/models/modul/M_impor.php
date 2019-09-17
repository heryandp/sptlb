<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_impor extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function input($data)
	{
		$query = "INSERT IGNORE INTO t_sptlb (".$data['id_spt'].",) VALUES ()";
		$this->db->query($query);
	}

}

/* End of file M_impor.php */
/* Location: ./application/models/modul/M_impor.php */