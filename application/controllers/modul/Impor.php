<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Impor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('modul/M_impor');
	}

	public function index()
	{
		$this->load->view('modul/impor');
	}

	public function proses()
	{
		// var_dump($_POST['data']);
		foreach ($_POST['data'] as $item) {
			// list buta replace stringnya gaes
			$awal = array('PPWBIDR','PPWBUSD','PPTOP','PPTOPS','PPTOPSS',',00','.');
			$baru = array('Tahunan Badan (IDR)','Tahunan Badan (USD)','Tahunan OP','Tahunan OP S','Tahunan OP SS','','');

			// jenis spt
			$jenis_spt = explode("/",$item['tanda_terima']);
			$jenis_spt = str_replace($awal, $baru, $jenis_spt[1]);
			
			// tanggal spt
			$tanggal_spt = explode("/",$item['tgl_spt']);
			$tanggal_spt = $tanggal_spt[2]."-".$tanggal_spt[1]."-".$tanggal_spt[0];

			// tanggal terima spt
			$tanggal_terima = explode("/",$item['tgl_terima']);
			$tanggal_terima = $tanggal_terima[2]."-".$tanggal_terima[1]."-".$tanggal_terima[0];

			// nilai
			$nilai = str_replace($awal, $baru, $item['nilai']);

			// user impor
			$user = '817931438';

			$data = array(
				'id_spt' => md5($item['tanda_terima']),
				'npwp' => $item['npwp'],
				'jenis_spt' => $jenis_spt,
				'tanda_terima' => $item['tanda_terima'],
				'tgl_spt' => $tanggal_spt,
				'nilai' => $nilai,
				'masa' => $item['masa'],
				'restitusi' => $item['restitusi'],
				'sumber' => $item['sumber'],
				'pembetulan' => $item['pembetulan'],
				'user_impor' => $user,
			);

			$this->M_impor->input($data);
		}
			
	}

}

/* End of file Impor.php */
/* Location: ./application/controllers/modul/Impor.php */