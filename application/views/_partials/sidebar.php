 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama_user'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

         <li class="treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('dashboard') ?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                </ul>
        </li>      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="<?php echo base_url('desa') ?>"><i class="fa fa-circle-o"></i> Desa</a></li>
          <li><a href="<?php echo base_url('kecamatan') ?>"><i class="fa fa-circle-o"></i> Kecamatan</a></li>
            <li><a href="<?php echo base_url('kota') ?>"><i class="fa fa-circle-o"></i> Kota</a></li>
            <li><a href="<?php echo base_url('provinsi') ?>"><i class="fa fa-circle-o"></i> Provinsi</a></li>
            <li><a href="<?php echo base_url('kategori') ?>"><i class="fa fa-circle-o"></i> Kategori</a></li>
            <li><a href="<?php echo base_url('tiketkategori') ?>"><i class="fa fa-circle-o"></i>Tiket Kategori</a></li>
          </ul>
        </li>                
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Administrator</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i> Users</a></li>            
          </ul>
        </li>          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">