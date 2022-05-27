<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php' ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <?php include 'nav.php' ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php include 'sidebar.php' ?>

  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Reservasi</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-8">
            
            <div class="card">
              <div class="card-header">
               <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Inputkan Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="tamu_tambah_prs.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">kode_reservasi</label>
                    <input type="text" name="kode_reservasi" class="form-control" placeholder="Enter kode_reservasi">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">tgl_masuk</label>
                    <input type="text" name="tgl_masuk" class="form-control" placeholder="Enter tgl_masuk">
                  </div>
				 				
				  <div class="form-group">
                    <label for="exampleInputEmail1">tgl_keluar</label>
                    <input type="text" name="tgl_keluar" class="form-control" placeholder="Enter tgl_keluar">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">tarif</label>
                    <input type="text" name="tarif" class="form-control" placeholder="Enter tarif">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">id_KTP</label>
                    <input type="text" name="tgl_masuk" class="form-control" placeholder="Enter id_KTP">
                  </div>
				 				
				  <div class="form-group">
                    <label for="exampleInputEmail1">nomor_kamar</label>
                    <input type="text" name="tgl_keluar" class="form-control" placeholder="Enter nomor_kamar">
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">id_resepsionis</label>
                    <input type="text" name="tarif" class="form-control" placeholder="Enter id_resepsionis">
                  </div>
				  
				   <div class="form-group">
                    <label for="exampleInputEmail1">id_fasilitas</label>
                    <input type="text" name="id_fasilitas" class="form-control" placeholder="Enter id_fasilitas">
                  </div>
				  
				                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
						

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
	<?php include 'footer.php' ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>