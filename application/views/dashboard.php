<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi SPTLB</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/semantic/semantic.min.css') ?>">
	<style type="text/css">
		.marginlefting {
		   margin-left: 60px !important;
		 }
		 
		 .displaynone {
		   display: none !important;
		 }
		 
		 .displayblock {
		   display: block !important;
		 }
		 
		 .sidebar .item i {
		   font-size: 24px;
		   margin-top: -5px !important;
		 }
		 
		 .logo {
		   height: 48px !important;
		   padding: 10px !important;
		 }
		 
		 .logo img {
		   width: 100% !important;
		   height: 38px !important;
		 }
		 
		 .title.item {
		   padding: .92857143em 1.14285714em !important;
		 }
		 
		 .dropdown .menu .header {
		   padding-top: 3.9px!important;
		   padding-bottom: 3.9px!important;
		 }

		 #konten {
		 	margin-left:14em;
		 	padding-top: 1em;
		 	padding-left: 5em;
		 	padding-right: 2em;
		 }
	</style>
	<script src="<?php echo base_url('assets/jquery-3.4.1.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/semantic/semantic.min.js') ?>"></script>
</head>
<body>
  <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important;">
  <h2 class="ui small left aligned header">
    <img class="ui image" src="<?php echo base_url('assets/logo.png') ?>">
    <div class="content">
    Aplikasi SPTLB
    </div>
  </h2>
  <div class="ui accordion">
    <a href="#" class="active item">
      <b>Dashboard</b>
    </a>

    <a href="#" class="item">
      <b>Cari Berkas</b>
    </a>

    <a class="title item"><b>Seksi XXX</b>  <i class="dropdown icon"></i></a>
    <div class="content">
	    <a class="active item" href="dashboard.html">Impor Berkas</a>
	    <a class="item">
		    <div class="ui green horizontal label">99</div>
		    Berkas Masuk
		</a>
	    <a href="#" class="item">
		    <div class="ui red horizontal label">99</div>
		    Tindak Lanjut Berkas
		</a>
		<a href="#" class="item">
		    Selesai
		</a>
    </div>

    <a href="#" class="item">
      <b>Pengaturan</b>
    </a>

    <a href="#" class="item">
     <b>Tentang</b>
    </a>

  </div>
</div>
<div class="pusher">
  <div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
   <!--  <a class="item openbtn">
      <i class="icon content"></i>
    </a> -->
    <a class="item">Dashboard</a>
    <div class="right menu">
      <div class="item">
        Heryan Dwiyoga Putra - Seksi Pemeriksaan
      </div>
      <div class="item">
        <div class="ui red button">Keluar</div>
      </div>
    </div>
  </div>
</div>
<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Testssssssssssssssssssssssss</p>
	</div>
  </div>
  <div class="sixteen wide column"></div>
</div>
</body>
<script type="text/javascript">
	// using context
	$( document ).ready(function() {
		$('.ui.accordion').accordion({
		   selector: {}
		});
	});
</script>
</html>