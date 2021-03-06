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
    <small>Tambah data Users</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('users') ?>">Users</a></li>
    <li class="active">Ubah Users</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
<div class="col-md-6">
<div class="box box-primary">  
<div class="box-header with-border">
          <h3 class="box-title">Ubah Data Users</h3>
          <div class="box-tools pull-right">
            
          </div>
        </div>
  <form method="post" action="<?php echo base_url('users/ubah_proses') ?>">
    {result}
    <div class="box-body">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="{username}" required readonly="readonly">
      </div>
      <div class="form-group">
        <label for="nama_user">Nama</label>
        <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama" value="{nama_user}" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{email}" required>
      </div>
      <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Telepon" value="{telepon}" required>
      </div>
      <div class="form-group">
        <label for="hak_akses" class="control-label">Akses User</label>
        <div class="form-group">
          <select class="form-control" name="hak_akses">
            <option value="Super Admin">Super Admin</option>
            <option value="Dispora">Dispora</option>            
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="status" class="control-label">Status User</label>
        <div class="form-group">
          <select class="form-control" name="status">
            <option value="aktif">Aktif</option>
            <option value="non aktif">Non Aktif</option>
          </select>
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="<?php echo base_url('users') ?>" class="btn btn-danger">Batal </a>
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