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
		Lokasi Jadwal (Hari)
		<small>Tambah data Lokasi Jadwal (Hari)</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="<?php echo base_url('lokasijadwalhari') ?>">Lokasi Jadwal (Hari)</a></li>
		<li class="active">Tambah Lokasi Jadwal (Hari)</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-6">
			<div class="box box-primary">
				<!-- Default box -->
				<div class="box-header with-border">
					<h3 class="box-title">Input Data Jadwal (Hari)</h3>
					<div class="box-tools pull-right">

					</div>
				</div>
				<form method="post" action="<?php echo base_url('lokasijadwalhari/add_proses') ?>">
					<div class="box-body">
						<div class="col-md-12">
							<div class="form-group">
								<label for="lokasi_code">Kode lokasi</label>
								<input type="text" class="form-control" id="lokasi_code" name="lokasi_code" placeholder="Kode lokasi" required>
							</div>
							<div class="form-group">
      							 <label>Hari Senin</label>
       							<select name="senin" id="senin" class="form-control select2">
								   <option value="">-- Buka/Tutup --</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Selasa</label>
       							<select name="selasa" id="selasa" class="form-control select2">
								   <option value="">-- Buka/Tutup --</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Rabu</label>
       							<select name="rabu" id="rabu" class="form-control select2">
								   <option value="">-- Buka/Tutup --</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Kamis</label>
       							<select name="kamis" id="kamis" class="form-control select2">
								   <option value="">-- Buka/Tutup --</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Jumat</label>
       							<select name="jumat" id="jumat" class="form-control select2">
								   <option value="">-- Buka/Tutup --</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Sabtu</label>
       							<select name="sabtu" id="sabtu" class="form-control select2">
								   <option value="">-- Buka/Tutup --</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Minggu</label>
       							<select name="minggu" id="minggu" class="form-control select2">
       							 <option value="">-- Buka/Tutup --</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?php echo base_url('lokasijadwalhari') ?>" class="btn btn-danger">Batal </a>
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
