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
		Lokasi
		<small>Tambah data Lokasi</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="<?php echo base_url('lokasi') ?>">Lokasi</a></li>
		<li class="active">Tambah Lokasi</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-6">
			<div class="box box-primary">
				<!-- Default box -->
				<div class="box-header with-border">
					<h3 class="box-title">Input Data Users</h3>
					<div class="box-tools pull-right">

					</div>
				</div>
				
				<form method="post" action="<?php echo base_url('lokasi/add_proses') ?>">
					<div class="box-body">
						<div class="col-md-12">
							<div class="form-group">
								<label for="lokasi_code">Kode lokasi</label>
								<input type="text" class="form-control" id="lokasi_code" name="lokasi_code" placeholder="Kode lokasi" required>
							</div>
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required>
							</div>
                			<div class="form-group">
                  				<label>Kategori</label>
                  				<select name="kategori" class="form-control" style="width: 100%;">
                  				<option>Pilih Kategori</option>
                    			<?php foreach ($result as $r) {
                      			echo "<option value='$r->kat_code'>$r->kategori</option>";
                    			} ?>
                  				</select>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="ex. Jl.Serang km 36 cikupa " required=""></textarea>
								<small id="" class="form-text text-muted">Pastikan alamat sesuai dengan lokasi</small>
							</div>
							<div class="form-group">
				    			<label>Provinsi</label>
				    			<select class="form-control" name="provinsi" id="provinsi" required>
				    			<option value="0">Pilih Provinsi</option>
				    			<?php foreach($p as $row):?>
				    			<option value="<?php echo $row->prov_code;?>"><?php echo $row->provinsi;?></option>
				    			<?php endforeach;?>
				    			</select>
							</div>

							<div class="form-group">
				    			<label>Kota</label>
				   			 	<select class="form-control" id="kota" name="kota" required>
				    			<option value="">Pilih Provinsi Terlebih Dulu</option>

				    			</select>
								</div>

								<div class="form-group">
				    			<label>Kecamatan</label>
				   			 	<select class="form-control" id="kecamatan" name="kecamatan" required>
				    			<option value="">Pilih Kota Terlebih Dulu</option>

				    			</select>
								</div>

								<div class="form-group">
				    			<label>Desa</label>
				   			 	<select class="form-control" id="desa" name="desa" required>
				    			<option value="">Pilih Kecamatan Terlebih Dulu</option>

				    			</select>
								</div>
							<div class="form-group">
								<label for="kode_pos">Kode Pos</label>
								<input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos" required>
							</div>
							<div class="form-group">
								<label for="telepon">Telepon</label>
								<input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon" required>
							</div>
							<div class="form-group">
								<label for="fax">Fax</label>
								<input type="number" class="form-control" id="fax" name="fax" placeholder="Fax" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email" required">
								<small id="emailHelpId" class="form-text text-muted">ex: nama@mail.com</small>
							</div>
							<div class="form-group">
								<label for="status">Status</label>
								<input type="text" class="form-control" id="status" name="status" placeholder="Status" required>
							</div>
							<div class="form-group">
              					<label>Deskripsi</label>
              					<textarea name="deskripsi" class="form-control ckeditor" placeholder="Deskripsi Lengkap" required=""></textarea>
            				</div>
						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="<?php echo base_url('lokasi') ?>" class="btn btn-danger">Batal </a>
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
