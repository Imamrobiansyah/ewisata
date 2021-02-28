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
        <li><a href="<?php echo base_url('lokasi_foto') ?>">lokasi</a></li>
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
                <form action="<?php base_url(" lokasi_foto/edit") ?>" method="post" enctype="multipart/form-data" >
                   
                    <div class="box-body">
					<input type="hidden" name="id" value="<?php echo $result->lokasi_code?>" />
					<div class="form-group">
								<label for="lokasi_code">Kode lokasi</label>
								<input type="text" class="form-control" id="lokasi_code" name="lokasi_code" placeholder="Kode lokasi" value="<?php echo $result->lokasi_code ?>">
							</div>
                            <!-- <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" name="foto" accept="uploads/*" multiple>
                            </div> -->

							<div class="form-group">
            					<label for="name">Foto</label>
            					<input type="file" name="foto" >
								<input type="hidden" name="old_image" value="<?php echo $result->foto ?>" />
           						 <p class="help-block">Foto max 6 Mb</p>
          					</div>							
							  <div class="form-group">
								<label for="status">status</label>
								<input type="text" class="form-control" id="status" name="status" placeholder="status" value="<?php echo $result->status ?>">
							</div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" value="Save">Update</button>
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
