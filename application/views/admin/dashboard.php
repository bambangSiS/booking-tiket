<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/admin/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/admin/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/admin/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/admin/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet"
	href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
					<li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dasboard</span></a></li>
					<li><a href="<?php echo base_url(); ?>admin/members"><i class="fa fa-user"></i> <span>Daftar Member</span></a></li>
					<li><a href="tiket.php"><i class="fa fa-ticket"></i> <span>Data Tiket</span></a></li>
					<li><a href=""><i class="fa fa-user"></i> <span>Data User</span></a></li>
				</ul>
			</section>
		</aside>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Dashboard</h1>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Daftar Member</h3>
								<div class="box-tools">
									<div class="input-group input-group-sm" style="width: 150px;">
										<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
										<div class="input-group-btn">
											<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body table-responsive no-padding">
								<table class="table table-hover">
									<tbody><tr>
										<th>ID</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Username</th>
										<th>Password</th>
										<th colspan="2">Action</th>
									</tr><?php foreach ($users as $data){?>
									<tr>
										<td><?php echo $data->id ?></td>
										<td><?php echo $data->nama ?></td>
										<td><?php echo $data->email ?></td>
										<td><?php echo $data->username ?></td>
										<td>********</td>
										<td>Edit</td>
										<td>Delete</td>
									</tr>
									<?php } ?>
								</tbody></table>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="control-sidebar-bg"></div>
</div>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url(); ?>gudang/admin/dist/js/demo.js"></script>
<script>
	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : false,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
		})
	})
</script>
</body>
</html>