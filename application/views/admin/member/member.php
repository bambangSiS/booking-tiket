<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar User</title>
	<?php $this->load->view('admin/common/scatas'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view('admin/common/header'); ?>
		<?php $this->load->view('admin/common/menu'); ?>
		<div class="content-wrapper">
			<section class="content-header">
				<h1>Manage Data</h1>
			</section>
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">User</h3>
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
										<tr role="row" class="odd">
											<th>ID</th>
											<th>Nama</th>
											<th>Email</th>
											<th>Username</th>
											<th>Password</th>
											<th width="20%">Action</th>
										</tr><?php foreach ($users as $data){?>
										<tr>
											<td><?php echo $data->id ?></td>
											<td><?php echo $data->nama ?></td>
											<td><?php echo $data->email ?></td>
											<td><?php echo $data->username ?></td>
											<td>********</td>
											<td>
												<a href="" class="btn btn-default btn-xs"><span class="fa fa-eye"> Detail</span></a>
												<a href="" class="btn btn-default btn-xs"><span class="fa fa-pencil"> Edit</span></a>
												<a href="<?php echo base_url('admin/members/hapus_member/').$data->id?>" class="btn btn-default btn-xs"><span class="fa fa-trash"> Delete</span></a>
											</td>
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
	<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>