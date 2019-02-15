<?php
include('checkactivemenu.php');
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata['username']; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="<?php echo $menu00; ?>">
        <a href="<?php echo base_url().'home'?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="<?php echo $menu01; ?> treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Master Data</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">5</span>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url().'company'?>"><i class="fa fa-circle-o"></i>Company</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>User</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Role</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Department</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Permit</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Transaction</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="company"><i class="fa fa-circle-o"></i>Absent IN/OUT</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Permit Request</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar"></i>
          <span>Reports</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="company"><i class="fa fa-circle-o"></i>Absent History</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Permit & Approval History</a></li>
        </ul>
      </li>
      <li class="header">ADMIN SETUP</li>
        <li class="#">
        <a href="menuinitializer">
          <i class="fa fa-dashboard"></i> <span>Menuinitializer</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>