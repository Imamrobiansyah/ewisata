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
        Data Waktu (Jam)
        <small>Tambah data Waktu (jam)</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('lokasijadwaljam') ?>">lokasi</a></li>
        <li class="active">Ubah Waktu (jam)</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ubah Data Waktu (Jam)</h3>
                    <div class="box-tools pull-right">

                    </div>
                </div>
                <form method="post" action="<?php echo base_url('lokasijadwaljam/ubah_proses') ?>">
                    {result}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="lokasi_code">Kode lokasi</label>
                            <input type="text" class="form-control" id="lokasi_code" name="lokasi_code" placeholder="Kode lokasi" value="{lokasi_code}">
                        </div>

						<div class="form-group">
								<label for="senin">Senin</label>
								<input type="time" class="form-control" id="senin" name="senin" placeholder="Kode lokasi" value="{senin} >
							</div>
							<div class="form-group">
								<label for="selasa">Selasa</label>
								<input type="time" class="form-control" id="selasa" name="selasa" placeholder="Selasa" value="{selasa}>
							</div>
							<div class="form-group">
								<label for="rabu">Rabu</label>
								<input type="time" class="form-control" id="rabu" name="rabu" placeholder="Rabu" value="{rabu}>
							</div>
							<div class="form-group">
								<label for="kamis">Kamis</label>
								<input type="time" class="form-control" id="kamis" name="kamis" placeholder="Kamis" value="{kamis}>
							</div>
							<div class="form-group">
								<label for="jumat">Jumat</label>
								<input type="time" class="form-control" id="jumat" name="jumat" placeholder="Jumat" value="{jumat}>
							</div>
							<div class="form-group">
								<label for="sabtu">Sabtu</label>
								<input type="time" class="form-control" id="sabtu" name="sabtu" placeholder="Sabtu" value="{sabtu}>
							</div>
							<div class="form-group">
								<label for="minggu">Minggu</label>
								<input type="time" class="form-control" id="minggu" name="minggu" placeholder="Minggu" value="{minggu} >
							</div>


                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url('lokasijadwaljam') ?>" class="btn btn-danger">Batal </a>
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
