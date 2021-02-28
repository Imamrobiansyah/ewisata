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
        Lokasi Tiket
        <small>Tambah data Lokasi Tiket</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="../dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('lokasitiket') ?>">Lokasi Tiket</a></li>
        <li class="active">Tambah Lokasi Tiket</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-6">
            <div class="box box-primary">
                <!-- Default box -->
                <div class="box-header with-border">
                    <h3 class="box-title">Input Data Lokasi Tiket</h3>
                    <div class="box-tools pull-right">

                    </div>
                </div>
                <form method="post" action="<?php echo base_url('lokasitiket/add_proses') ?>">
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="lokasi_code">Kode lokasi</label>
                                <input type="text" class="form-control" id="lokasi_code" name="lokasi_code"
                                    placeholder="Kode lokasi" required>
                            </div>
                            <div class="form-group">
                                <label for="tiket_code">Kode Tiket</label>
                                <input type="text" class="form-control" id="tiket_code" name="tiket_code"
                                    placeholder="Kode tiket" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="harga"
                                    required>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?php echo base_url('lokasitiket') ?>" class="btn btn-danger">Batal </a>
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