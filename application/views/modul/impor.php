<?php $this->load->view('template/head'); ?>

<body>

<?php $this->load->view('template/sidebar'); ?>

<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Impor Berkas</p>
	  	<table class="ui small celled table">
		  <thead>
		    <tr><th>No</th>
		    <th>Wajib Pajak</th>
		    <th>NPWP</th>
		    <th>Jenis SPT</th>
		    <th>Tanda Terima</th>
		    <th>Tanggal SPT</th>
		    <th>Nilai</th>
		    <th>Masa</th>
		    <th>Restitusi</th>
		    <th>Tanggal Terima</th>
		    <th>Aksi</th>
		  </tr></thead>
		  <tbody>
		  </tbody>
	    </table>
	</div>
  </div>
</div>
</body>

<?php $this->load->view('template/foot'); ?>
