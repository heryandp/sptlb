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
		 	padding-left: 5em;
		 }
	</style>
	<script src="<?php echo base_url('assets/jquery-3.4.1.min.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/semantic/semantic.min.js') ?>"></script>
</head>
<body>
	<div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important;">
  <div class="item logo">
    <img src="https://image.flaticon.com/icons/svg/866/866218.svg" /><img src="https://image.flaticon.com/icons/svg/866/866218.svg" style="display: none" />
  </div>
  <div class="ui accordion">
    <a class="item">
      <b>Dashboard</b>
    </a>

    <a class="item">
      <b>Seksi Pelayanan</b>
    </a>

    <a class="item" href="dashboard.html">Impor Berkas</a>
    <a class="item">
	    <div class="ui green horizontal label">99</div>
	    Berkas Masuk
	</a>
    <a class="item">
	    <div class="ui red horizontal label">99</div>
	    Tindak Lanjut Berkas
	</a>

    <a class="item">
      <b>Seksi Waskon</b>
    </a>

    <a class="item">
      <b>Seksi Pemeriksaan</b>
    </a>
    
    <a class="item">
      <b>Pengaturan</b>
    </a>

    <a class="item">
      <b>Tentang</b>
    </a>
  </div>
  <!-- <div class="ui dropdown item displaynone">
    <z>Dashboard</z>
    <i class="icon demo-icon heart icon-heart"></i>

    <div class="menu">
      <div class="header">
        Dashboard
      </div>
      <div class="ui divider"></div>
      <a class="item" href="dashboard.html">Dashboard
                    </a>
    </div>
  </div> -->
</div>
<div class="pusher">
  <div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
    <a class="item openbtn">
      <i class="icon content"></i>
    </a>
    <a class="item">Dashboard</a>
    <div class="right menu">
      <div class="item">
        <div class="ui red button">Keluar</div>
      </div>
    </div>
  </div>
</div>
<div id="konten" class="ui grid">
  <div class="fourteen wide column">
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
	   $(".openbtn").on("click", function() {
	   $(".ui.sidebar").toggleClass("very thin icon");
	   $(".asd").toggleClass("marginlefting");
	   $(".sidebar z").toggleClass("displaynone");
	   $(".ui.accordion").toggleClass("displaynone");
	   $(".ui.dropdown.item").toggleClass("displayblock");

	   $(".logo").find('img').toggle();

	 })
	 $(".ui.dropdown").dropdown({
	   allowCategorySelection: true,
	   transition: "fade up",
	   context: 'sidebar',
	   on: "hover"
	 });

	 $('.ui.accordion').accordion({
	   selector: {

	   }
	 });
	});
</script>
</html>