<?php
$this->load->view('_partials/header');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('_partials/topbar');
$this->load->view('_partials/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Lokasi Jadwal (Jam)
		<small>Tambah data Lokasi Jadwal (Jam)</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="<?php echo base_url('lokasijadwaljam') ?>">Lokasi Jadwal (Jam)</a></li>
		<li class="active">Tambah Lokasi Jadwal (Jam)</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-6">
			<div class="box box-primary">
				<!-- Default box -->
				<div class="box-header with-border">
					<h3 class="box-title">Input Data Jadwal (Jam)</h3>
					<div class="box-tools pull-right">

					</div>
				</div>
				<form method="post" action="<?php echo base_url('lokasijadwaljam/add_proses') ?>">
					<div class="box-body">
						<div class="col-md-12">
						<div class="form-group">
                  				<label>Lokasi</label>
                  				<select name="lokasi_code" class="form-control" style="width: 100%;">
                  				<option>Pilih Lokasi</option>
                    			<?php foreach ($result as $r) {
                      			echo "<option value='$r->lokasi_code'>$r->lokasi</option>";
                    			} ?>
                  				</select>
							</div>
							<div class="form-group">
								<label for="senin">Senin</label>
								<input type="time" class="form-control" id="senin" name="senin" placeholder="Kode lokasi" >
							</div>
							<div class="form-group">
								<label for="selasa">Selasa</label>
								<input type="time" class="form-control" id="selasa" name="selasa" placeholder="Selasa" >
							</div>
							<div class="form-group">
								<label for="rabu">Rabu</label>
								<input type="time" class="form-control" id="rabu" name="rabu" placeholder="Rabu" >
							</div>
							<div class="form-group">
								<label for="kamis">Kamis</label>
								<input type="time" class="form-control" id="kamis" name="kamis" placeholder="Kamis" >
							</div>
							<div class="form-group">
								<label for="jumat">Jumat</label>
								<input type="time" class="form-control" id="jumat" name="jumat" placeholder="Jumat" >
							</div>
							<div class="form-group">
								<label for="sabtu">Sabtu</label>
								<input type="time" class="form-control " id="sabtu" name="sabtu" placeholder="Sabtu" >
							</div>
							<div class="form-group">
								<label for="minggu">Minggu</label>
								<input type="time" class="form-control timepicker" id="minggu" name="minggu" placeholder="Minggu" >
							</div>


						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?php echo base_url('lokasijadwaljam') ?>" class="btn btn-danger">Batal </a>
						</div>

				</form>
			</div>
		</div>
	</div>
</section><!-- /.content -->

<?php
$this->load->view('_partials/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('_partials/footer');
?>
