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
        Users
        <small>Tambah data Kecamatan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('desa') ?>">Kecamatan</a></li>
        <li class="active">Tambah Kecamatan</li>
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
                <form method="post" action="<?php echo base_url('kecamatan/add_proses') ?>">
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="kec_code">Kode kecamatan</label>
                                <input type="text" class="form-control" id="kec_code" name="kec_code" placeholder="Kode kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label for="kota_code">Kode kota</label>
                                <input type="text" class="form-control" id="kota_code" name="kota_code" placeholder="Kode kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Desa</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" required>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('kecamatan') ?>" class="btn btn-danger">Batal </a>
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