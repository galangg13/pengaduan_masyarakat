<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Laporan Pengaduan Masyarakat</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url() ?>assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lora:700|Montserrat:200,400,600|Pacifico&display=swap" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <style>
   body {
    font-family: Montserrat;
  }
</style>

<!-- Page Wrapper -->
<div id="wrapper">

  <!-- End of Topbar -->

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h4 text-dark">Laporan Pengaduan Masyarakat</h1>

    <table class="table">
      <thead class="thead-dark">
        <tr>
        <th>No</th>
                          <th>tanggal pengaduan </th>
                          <th>isi laporan</th>
                          <th>foto</th>
                          <th>kategori</th>
                          <th>subkategori</th>
                          <th>status</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        <?php foreach($laporan as $l) : ?>
          <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $l['tgl_pengaduan'] ?></td>
            <td><?= $l['isi_laporan'] ?></td>
            <td><?= $l['foto'] ?></td>
            <td><?= $l['kategori'] ?></td>
            <td><?= $l['subkategori'] ?></td>
            <td><?= $l['status'] ?></td>
            <td>
              <?
              if ($l['status'] == '0') :
                echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
              elseif ($l['status'] == 'proses') :
                echo '<span class="badge badge-primary">Sedang di proses</span>';
              elseif ($l['status'] == 'selesai') :
                echo '<span class="badge badge-success">Selesai di kerjakan</span>';
              elseif ($l['status'] == 'tolak') :
                echo '<span class="badge badge-danger">Pengaduan di tolak</span>';
              else :
                echo '-';
              endif;
              ?>
            </td>
            <td><?= $l['tanggapan'] == null ? '-' : $l['tanggapan']; ?></td>
            <td><?= $l['tgl_tanggapan'] == null ? '-' : $l['tgl_tanggapan']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<!-- <footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Your Website 2019</span>
    </div>
  </div>
</footer> -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->


<script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>


</body>

</html>

