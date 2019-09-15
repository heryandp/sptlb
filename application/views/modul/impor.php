<?php $this->load->view('template/head'); ?>

<body>

<?php $this->load->view('template/sidebar'); ?>

<div id="konten" class="ui grid">
  <div class="sixteen wide column">
	<div class="ui segment">
	  <p>Impor Berkas</p>
	  <input type="file" (change)="fileEvent($event)" name="filecsv" accept=".csv" class="inputfile" id="imporcsv" />
	  <label for="imporcsv" class="ui green button">
	    <i class="ui download icon"></i> 
	    Load Data (.csv)
	  </label>
	  <input type="button" (change)="fileEvent($event)" class="inputfile" id="previewcsv" />
	  <label for="previewcsv" class="ui orange button">
	    <i class="search icon"></i> 
	    Preview CSV
	  </label>
	  	<button id="uploadcsv" class="ui primary button"><i class="ui upload icon"></i>Impor CSV</button>
	    <script type="text/javascript">
		    $(function () {
		        $("#previewcsv").bind("click", function () {
		            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.csv|.txt)$/;
		            if (regex.test($("#imporcsv").val().toLowerCase())) {
		                if (typeof (FileReader) != "undefined") {
		                    var reader = new FileReader();
		                    reader.onload = function (e) {
		                        var table = $("<tbody/>");
		                        var rows = e.target.result.split("\n");
	                            console.log(rows.length);
		                        for (var i = 1; i < rows.length-1; i++) {
		                            var row = $("<tr/>");
		                            var cells = rows[i].split(';');
		                            if (cells.length = 10) {
		                                for (var j = 0; j < cells.length; j++) {
		                                    var cell = $("<td class='"+j+"_csv'/>");
		                                    cell.html(cells[j]);
		                                    row.append(cell);
		                                }
		                                table.append(row);
		                            } else {
		                            	alert("Format CSV tidak sesuai!");
		                            }
		                        }
		                        $("#tabelcsv tbody").remove();
		                        $("#tabelcsv").append(table);
		                        $("#uploadcsv").show();
		                    }
		                    reader.readAsText($("#imporcsv")[0].files[0]);
		                } else {
		                    alert("Browser tidak mendukung HTML5!");
		                }
		            } else {
		                alert("File tidak valid atau belum diupload!");
		            }
		        });
		    });
		</script>
	  	<div style="padding-top:1em;overflow-x: scroll;">
		  	<table id="tabelcsv" class="ui small celled table">
			  <thead>
			    <tr>
			    	<th>No</th>
				    <th>NPWP</th>
				    <th>Tanda Terima</th>
				    <th>Tanggal SPT</th>
				    <th>Nilai</th>
				    <th>Masa</th>
				    <th>Restitusi</th>
				    <th>Sumber</th>
				    <th>Pembetulan</th>
				    <th>Tanggal Terima</th>
			  	</tr>
			   </thead>
			   <tbody>
			   	
			   </tbody>
		    </table>
	    </div>
	    <p><i class="info icon"></i>Delimiter menggunakan titik koma (;). Download format (.csv) <a href="<?php echo base_url('assets/template_impor_sptlb.csv'); ?>">di sini</a></p>
	</div>
  </div>
</div>
</body>
<script type="text/javascript">
	$("#uploadcsv").hide();

	$(document).on('click', '#uploadcsv', function(){
		alert('YES');

		// Set Var dulu bos
		var csv_npwp = [];
		var csv_tanda_terima = [];
		var csv_tanggal_spt = [];
		var csv_nilai = [];
		var csv_masa = [];
		var csv_restitusi = [];
		var csv_sumber = [];
		var csv_pembetulan = [];
		var csv_tanggal_terima = [];

		// Push
		$('.1_csv').each(function(){
	  	 csv_npwp.push($(this).text());
	  	});
	  	$('.2_csv').each(function(){
	  	 csv_tanda_terima.push($(this).text());
	  	});
	  	$('.3_csv').each(function(){
	  	 csv_tanggal_spt.push($(this).text());
	  	});
	  	$('.4_csv').each(function(){
	  	 csv_nilai.push($(this).text());
	  	});
	  	$('.5_csv').each(function(){
	  	 csv_masa.push($(this).text());
	  	});
	  	$('.6_csv').each(function(){
	  	 csv_restitusi.push($(this).text());
	  	});
	  	$('.7_csv').each(function(){
	  	 csv_sumber.push($(this).text());
	  	});
	  	$('.8_csv').each(function(){
	  	 csv_pembetulan.push($(this).text());
	  	});
	  	$('.9_csv').each(function(){
	  	 csv_tanggal_terima.push($(this).text());
	  	});

	  	// Ajax bos
	  	$.ajax({
	  		method:"post",
	  		data:{npwp:csv_npwp,tanda_terima:csv_tanda_terima},
	  		success:function(data){
	  			console.log(npwp);
	  		}
	  	});

	  // $.ajax({
	  //  url:"import.php",
	  //  method:"post",
	  //  data:{student_name:student_name, student_phone:student_phone},
	  //  success:function(data)
	  //  {
	  //   $('#csv_file_data').html('<div class="alert alert-success">Data Imported Successfully</div>');
	  //  }
	  // })
	 });

</script>
<?php $this->load->view('template/foot'); ?>
