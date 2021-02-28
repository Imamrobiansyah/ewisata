 <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js'); ?>"></script>
 <!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
 <!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript">
	function deleteConfirm(url_action) {
		//console.log(url_action);
		var conf = confirm('Anda yakin ingin menghapus data ?');
		if (conf) {
			window.location=url_action;
			//console.log(url_action);
		}
	}

	$("#provinsi").change(function(){

// variabel dari nilai combo box provinsi
var prov_code = $("#provinsi").val();

// Menggunakan ajax untuk mengirim dan dan menerima data dari server
$.ajax({
	url : "<?php echo base_url();?>/lokasi/get_kota",
	method : "POST",
	data : {prov_code:prov_code},
	async : false,
	dataType : 'json',
	success: function(data){
		var html = '';
		var i;

		for(i=0; i<data.length; i++){
			html += '<option value='+data[i].kota_code+'>'+data[i].kota+'</option>';
		}
		$('#kota').html(html);
		$('#kota').val('').trigger('change');
	}
});
});

$("#kota").change(function(){

// variabel dari nilai combo box kota
var kota_code = $("#kota").val();

// Menggunakan ajax untuk mengirim dan dan menerima data dari server
$.ajax({
	url : "<?php echo base_url();?>/lokasi/get_kec",
	method : "POST",
	data : {kota_code:kota_code},
	async : false,
	dataType : 'json',
	success: function(data){
		var html = '';
		var i;

		for(i=0; i<data.length; i++){
			html += '<option value='+data[i].kec_code+'>'+data[i].kecamatan+'</option>';
		}
		$('#kecamatan').html(html);
		$('#kecamatan').val('').trigger('change');
	}
});
});
$("#kecamatan").change(function(){

// variabel dari nilai combo box kota
var kec_code = $("#kecamatan").val();

// Menggunakan ajax untuk mengirim dan dan menerima data dari server
$.ajax({
	url : "<?php echo base_url();?>/lokasi/get_desa",
	method : "POST",
	data : {kec_code:kec_code},
	async : false,
	dataType : 'json',
	success: function(data){
		var html = '';
		var i;

		for(i=0; i<data.length; i++){
			html += '<option value='+data[i].desa_code+'>'+data[i].desa+'</option>';
		}
		$('#desa').html(html);
		$('#desa').val('').trigger('change');
	}
});
});

</script>

