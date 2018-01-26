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
          <li><a href="#"><i class="fa fa-user"></i> <span>Users</span></a></li>
          <li><a href="#"><i class="fa fa-ticket"></i> <span>Data Tiket</span></a></li>
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
                    <td><a href="<?php echo base_url('admin/members/hapus_member/').$data->id?>">Hapus</a></td>
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
<?php $this->load->view('admin/common/scbawah'); ?>
</body>
</html>