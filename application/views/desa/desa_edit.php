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
        desa
        <small>Tambah data desa</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url('desa') ?>">desa</a></li>
        <li class="active">Ubah desa</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ubah Data desa</h3>
                    <div class="box-tools pull-right">

                    </div>
                </div>
                <form method="post" action="<?php echo base_url('desa/ubah_proses') ?>">
                    {result}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="desa_code">Kode Desa</label>
                            <input type="text" class="form-control" id="desa_code" name="desa_code" placeholder="Kode Desa" value="{desa_code}">
                        </div>
                        <div class="form-group">
                            <label for="kec_code">Kecamatan Desa</label>
                            <input type="text" class="form-control" id="kec_code" name="kec_code" placeholder="Kecamatan Desa" value="{kec_code}">
                        </div>
                        <div class="form-group">
                            <label for="desa">Kode Desa</label>
                            <input type="text" class="form-control" id="desa" name="desa" placeholder="Desa" value="{desa}">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url('desa') ?>" class="btn btn-danger">Batal </a>
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