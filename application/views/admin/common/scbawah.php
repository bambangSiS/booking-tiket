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