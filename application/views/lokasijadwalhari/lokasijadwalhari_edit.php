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
        lokasi
        <small>Tambah data lokasi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('lokasijadwalhari') ?>">lokasi</a></li>
        <li class="active">Ubah lokasi</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ubah Data lokasi</h3>
                    <div class="box-tools pull-right">

                    </div>
                </div>
                <form method="post" action="<?php echo base_url('lokasijadwalhari/ubah_proses') ?>">
                    {result}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="lokasi_code">Kode lokasi</label>
                            <input type="text" class="form-control" id="lokasi_code" name="lokasi_code" placeholder="Kode lokasi" value="{lokasi_code}">
                        </div>

						<div class="form-group">
      							 <label>Hari Senin</label>
       							<select name="senin" id="senin" class="form-control select2">
       							 <option value="">{senin}</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
								<div class="form-group">
      							 <label>Hari Selasa</label>
       							<select name="selasa" id="selasa" class="form-control select2">
       							 <option value="">{selasa}</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Rabu</label>
       							<select name="rabu" id="rabu" class="form-control select2">
       							 <option value="">{rabu}</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Kamis</label>
       							<select name="kamis" id="kamis" class="form-control select2">
       							 <option value="">{kamis}</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Jumat</label>
       							<select name="jumat" id="jumat" class="form-control select2">
       							 <option value="">{jumat}</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Sabtu</label>
       							<select name="sabtu" id="sabtu" class="form-control select2">
       							 <option value="">{sabtu}</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>
							<div class="form-group">
      							 <label>Hari Minggu</label>
       							<select name="minggu" id="minggu" class="form-control select2">
       							 <option value="">{minggu}</option>
      							  <option value="Buka">Buka</option>
      							  <option value="Tutup">Tutup</option>
    							</select>
    						</div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url('lokasijadwalhari') ?>" class="btn btn-danger">Batal </a>
                    </div>
                    {/result}
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
