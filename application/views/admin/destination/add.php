<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Kota Tujuan</title>
  <?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
	<header class="main-header">
	  <a href="index2.html" class="logo">
		<span class="logo-mini"><b>T</b>Om</span>
		<span class="logo-lg">Tiket Om</span>
	  </a>
	  <nav class="navbar navbar-static-top">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</a>
		<div class="navbar-custom-menu">
		  <ul class="nav navbar-nav">
			<li class="dropdown user user-menu">
			  <a href="http://localhost/ukk">
				<span class="hidden-xs">View Store</span>
			  </a>
			</li>
		  </ul>
		</div>
	  </nav>
	</header>
	<aside class="main-sidebar">
	  <section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
		  <li class="header"><i class="fa fa-reorder"> MENU NAVIGASI</i></li>
		  <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
		  <li><a href="#""><i class="fa fa-user"></i> <span>Users</span></a></li>
		  <li><a href="#"><i class="fa fa-ticket"></i> <span>Data Tiket</span></a></li>
		  <li><a href="#"><i class="fa fa-user"></i> <span>Data User</span></a></li>
		</ul>
	  </section>
	</aside>
	<div class="content-wrapper">
	  <section class="content-header">
		<h1>Tambah Kota</h1>
	  </section>

	  <section class="content col col-md-6">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Kota</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<form class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nama Kota</label>

						<div class="col-sm-10">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Nama Kota">
						</div>
					</div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<button type="submit" class="btn btn-default"><a href="<?php echo base_url(); ?>admin/destinations">Kembali</a></button>
					<button type="submit" class="btn btn-info pull-right">Tambah</button>
				</div>
				<!-- /.box-footer -->
			</form>
		</div>
	  </section>
	
  </div>
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>