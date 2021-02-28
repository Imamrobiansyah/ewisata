<?php
$this->load->view('_partials/header');
?>
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
<!--tambahkan custom css disini-->
<?php
$this->load->view('_partials/topbar');
$this->load->view('_partials/sidebar');
?>
<!-- Content Header (Page header) -->
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Lokasi
        <small>Manajemen Data Lokasi</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Lokasi</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <h3 class="box-title">
                <a href="<?php echo base_url('lokasi/add'); ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
            </h3>
            <div class="btn-group">
                    <a class="btn btn-success btn-sm btn-flat" href="<?=base_url().'dom_pdf/download/1'?>">download-pdf</a>
            </div>
        </div>
    </div>
    

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Lokasi</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" cellspacing="0" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Lokasi</th>
                                            <th>Nama</th>
                                            <th>Kode Kategori</th>
                                            <th>Alamat</th>
                                            <th>Kode Provinsi</th>
                                            <th>Kode Kota</th>
                                            <th>Kode Kecamatan</th>
                                            <th>Kode Desa</th>
                                            <th>Kode Pos</th>
                                            <th>Telepon</th>
                                            <th>Fax</th>
											<th>Email</th>
											<th>Status</th>
											<th>Deskripsi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1;foreach ($lok as $lokasi) : ?>
                                            <tr>
											<td><?=$no++; ?>.</td>
											<td>
                                                    <?php echo $lokasi->lokasi_code; ?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->nama; ?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->kategori; ?>
                                                </td>                                                <td>
                                                    <?php echo $lokasi->alamat; ?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->provinsi; ?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->kota; ?>
                                                </td>                                                <td>
                                                    <?php echo $lokasi->kecamatan;?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->desa; ?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->kode_pos; ?>
                                                </td>                                                <td>
                                                    <?php echo $lokasi->telepon; ?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->fax; ?>
                                                </td>
                                                <td>
                                                    <?php echo $lokasi->email; ?>
                                                </td>
												<td>
                                                    <?php echo $lokasi->status; ?>
                                                </td>
												<td>
												<?php echo $lokasi->deskripsi; ?>
                                                </td>

                                                <td>
                                                    <a href="<?php echo base_url('lokasi/ubah/' . $lokasi->lokasi_code); ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                                                    <button onclick="deleteConfirm('<?php echo base_url('lokasi/delete/' . $lokasi->lokasi_code); ?>')" href="" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus </button>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                </div>
            </div>
        </div>
</section>
<!-- /.content -->
<!-- /.content -->
<?php
$this->load->view('_partials/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('_partials/footer');
?>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
