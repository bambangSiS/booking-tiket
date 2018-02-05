<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit</title>
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
		<h1>Tambah Kota</h1>
	  </section>

	  <section class="content col col-md-6">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Kota</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<?php foreach ($destination as $data){?>
			<form action="<?php echo base_url(). 'admin/destinations/update/'.$data->id; ?>" method="post" class="form-horizontal">
				<div class="box-body">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Nama Kota</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="destination" value="<?php echo $data->destination ?>">
						</div>
					</div>
					<?php } ?>
				</div>
				<!-- /.box-body -->
				<div class="box-footer">
					<a href="<?php echo base_url(); ?>admin/destinations" class="btn btn-default">Batal</a>
					<button type="submit" class="btn btn-info pull-right" name="submit">Update</button>
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