<!DOCTYPE html>
<html lang="en">
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
            <h1>Data Reservasi</h1>
          </div>
          </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href ="reservasi_tambah.php"><button type="submit" class="btn btn-primary">Tambah Data</button><a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
				  
					<th>kode_reservasi</th>
					<th>tgl_masuk</th>
					<th>tgl_keluar</th>
					<th>tarif</th>
					<th>id_KTP</th>
					<th>nomor_kamar</th>
					<th>id_resepsionis</th>
					<th>id_fasilitas</th>
					<th>opsi</th>
					
                  </tr>
                  </thead>
                  <tbody>
                 <tr>
	<?php
	include 'koneksi.php';
	$sql = mysql_query ("SELECT * FROM reservasi ORDER BY kode_reservasi") or die(mysql_error());
	$no=0;
	while($data = mysql_fetch_array($sql))
	{
	$no++;
	$kode_reservasi=$data['kode_reservasi'];
	
		?>
		<td><?php echo $data['kode_reservasi']; ?></td>
		<td><?php echo $data['tgl_masuk']; ?></td>
		<td><?php echo $data['tgl_keluar']; ?></td>
		<td><?php echo $data['tarif']; ?></td>
		<td><?php echo $data['id_KTP']; ?></td>
		<td><?php echo $data['nomor_kamar']; ?></td>
		<td><?php echo $data['id_resepsionis']; ?></td>
		<td><?php echo $data['id_fasilitas']; ?></td>
		<td> 
			<a href ="reservasi_edit.php<?php echo '?kode_reservasi=' . $kode_reservasi; ?>"><button type="submit" class="btn btn-warning">Edit</button><a> 
			<a href="reservasi_hapus_prs.php<?php echo '?kode_reservasi=' . $kode_reservasi; ?>"><button type="submit" class="btn btn-danger">hapus</button><a>  
		</td>
		</tr>
	<?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
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
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src=".dist/js/demo.js"></script>
<!-- Page specific script -->
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
