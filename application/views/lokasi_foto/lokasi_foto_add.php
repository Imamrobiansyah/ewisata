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
		Lokasi Foto
		<small>Tambah data Foto Lokasi</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="<?php echo base_url('lokasi_foto') ?>">Lokasi Foto</a></li>
		<li class="active">Tambah Foto Lokasi</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-6">
			<div class="box box-primary">
				<!-- Default box -->
				<div class="box-header with-border">
					<h3 class="box-title">Data Foto Lokasi</h3>
					<div class="box-tools pull-right">

					</div>
					<?php $this->load->view("_partials/breadcrumb.php") ?>

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
	<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

				<form action="<?php base_url('lokasi_foto/add') ?>" method="post" enctype="multipart/form-data" >
					<div class="box-body">
						<div class="col-md-12">
							<div class="form-group">
								<label for="lokasi_code">Kode lokasi</label>
								<input type="text" class="form-control" id="lokasi_code" name="lokasi_code" placeholder="Kode lokasi" required>
							</div>
                            <!-- <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" accept="uploads/*" multiple>
                            </div> -->

							<div class="form-group">
            					<label for="name">Foto</label>
            					<input type="file" name="foto" required>
           						 <p class="help-block">Foto max 6 Mb</p>
          					</div>							
							  <div class="form-group">
								<label for="status">status</label>
								<input type="text" class="form-control" id="status" name="status" placeholder="status" required>
							</div>
						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<button name="simpan" type="submit" class="btn btn-primary" value="Save">Simpan</button>
							<a href="<?php echo base_url('lokasi_foto') ?>" class="btn btn-danger">Batal </a>
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
