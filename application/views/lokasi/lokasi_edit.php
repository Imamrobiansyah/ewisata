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
        <li><a href="<?php echo base_url('lokasi') ?>">lokasi</a></li>
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
                <form method="post" action="<?php echo base_url('lokasi/ubah_proses') ?>">
                    {result}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="lokasi_code">Kode lokasi</label>
                            <input type="text" class="form-control" id="lokasi_code" name="lokasi_code" placeholder="Kode lokasi" value="{lokasi_code}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="{nama}">
                        </div>
                        <div class="form-group">
                            <label for="kat_code">Kode Kategori</label>
                            <input  class="form-control" id="kat_code" name="kat_code" placeholder="kode kategori" value="{kat_code}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" >{alamat}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="prov_code">Kode Provinsi</label>
                            <input type="text" class="form-control" id="prov_code" name="prov_code" placeholder="Kode Provinsi" value="{prov_code}">
                        </div>
                        <div class="form-group">
                            <label for="kota_code">Kode Kota</label>
                            <input type="text" class="form-control" id="kota_code" name="kota_code" placeholder="Kode Kota" value="{kota_code}">
                        </div>
                        <div class="form-group">
                            <label for="kec_code">Kode Kecamatan</label>
                            <input type="text" class="form-control" id="kec_code" name="kec_code" placeholder="Kode Kecamatan" value="{kec_code}">
                        </div>
                        <div class="form-group">
                            <label for="desa_code">Kode Desa</label>
                            <input type="text" class="form-control" id="desa_code" name="desa_code" placeholder="Kode Desa" value="{desa_code}">
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="Kode Pos" value="{kode_pos}">
                        </div>
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="number" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="{telepon}">
                        </div>
                        <div class="form-group">
                            <label for="fax">Fax</label>
                            <input type="number" class="form-control" id="fax" name="fax" placeholder="Fax" value="{fax}">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email" value="{email}">
                          <small id="emailHelpId" class="form-text text-muted">Email</small>
                        </div>
                        <div class="form-group">
                          <label for="status">Status</label>
                          <input type="text" class="form-control" name="status" id="status"  placeholder="Status" value="{status}">
                        </div>
						<div class="form-group">
              					<label>Deskripsi</label>
              					<textarea name="deskripsi" class="form-control ckeditor" placeholder="Deskripsi Lengkap" >{deskripsi}</textarea>
            				</div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?php echo base_url('lokasi') ?>" class="btn btn-danger">Batal </a>
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
