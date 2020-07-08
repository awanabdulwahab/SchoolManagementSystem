<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></link>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"></link>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url() ?>tools/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
     <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url().'tools/css/style.css'?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url() ?>tools/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
Brad Diesel
<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url() ?>tools/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
John Pierce
<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url() ?>tools/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
Nora Silvester
<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
<span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
<span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
<span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url() ?>tools/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>tools/dist/img/user8-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Abdul Wahab Awan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="<?php echo base_url().'index.php/admin';?>" class="nav-link active">
              <i class="nav-icon fas fa-th"></i> Dashboard
			</a>
		  </li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Category Management
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?php echo base_url().'index.php/school/category';?>" class="nav-link">
							<i class="far fa-circle nav-icon text-danger"></i>
							<p>Add Category</p>
						</a>
					</li>
				</ul>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon text-warning" ></i>
							<p>Edit Category</p>
						</a>
					</li>
				</ul>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon text-danger"></i>
							<p>Delete Category</p>
						</a>
					</li>
				</ul>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>View Category</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Class Management
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Classes</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview ">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Course Management
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Courses</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Student Management
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Student Registraiton</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Student Attendence
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Student Attendence</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Exam Management
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Manage Exam</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Staff Management
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Staf</p>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item has-treeview">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>Result Generate
					</p>
					<i class="right fas fa-angle-left"></i>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="./index.html" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Result</p>
						</a>
					</li>
				</ul>
			</li>
		</ul>
	  </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
?>
