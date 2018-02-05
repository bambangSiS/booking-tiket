<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kota Tujuan</title>
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
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Manage Data</h1>
				<div class="row">
					<div class="col-sm-2 col-md-2">
				 </div>
			 </div>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Rute</h3>
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
								<tbody>
									<tr>
										<th>No</th>
										<th>Pergi</th>
										<th>Tiba</th>
										<th>Dari</th>
										<th>Tujuan</th>
										<th>Maskapai</th>
										<th>Harga</th>
										<th>Action</th>
										<?php $no = 1; ?>
									</tr><?php foreach ($rute as $data){?>
									<tr>
										<td><?php  echo $no++; ?></td>
										<td><?php echo date('m M Y h:i'); $data->depart_at ?></td>
										<td><?php echo date('m M Y h:i'); $data->arrival ?></td>
										<td><?php echo $data->mangkat ?> (<?php echo $data->rute_from ?>)</td>
										<td><?php echo $data->mangkat ?> (<?php echo $data->rute_from ?>)</td>
										<td><?php echo $data->maskapai ?></td>
										<td>Rp. <?php echo $data->price ?></td>
										<td>
											<a href="" class="btn btn-default btn-sm"><span class="fa fa-pencil"> Edit</span></a>
											<a href="<?php echo base_url('admin/rute/del/'.$data->id) ?>" class="btn btn-default btn-sm"><span class="fa fa-trash"> Delete</span></a>
										</td>
									</tr><?php } ?>
								</tbody>
								</table>
							</div>  
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>