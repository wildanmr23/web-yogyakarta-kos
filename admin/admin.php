<?php
    include "../fungsi/koneksi.php";
    session_start();

    //Untuk proses READ
    $query = "SELECT * FROM tb_kos";
    $sql = mysqli_query ($conn, $query);

    $no = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js" ></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js" ></script>
    <script defer src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js" ></script>

    <script defer src="script.js" ></script>

</head>

<body>
     <!-- Navbar start -->
     <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(194, 197, 199)" >
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="bi bi-person"></i> Halaman Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link" aria-current="page" href="user.php"><i class="bi bi-people"></i> Pengguna</a>
        <a class="nav-link" aria-current="page" href="feedback.php "><i class="bi bi-bell"></i> Permintaan</a>
        <a class="nav-link" aria-current="page" href="../login.php"><i class="bi bi-box-arrow-left"></i> Keluar</a>
      </div>
    </div>
  </div>
</nav>
    <!-- Navbar end -->


    <!-- Heading start -->
    <div class="head">
        <h1 class="mt-3 pt-5">KOS YOGYAKARTA</h1>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data listingan kos yang sudah di verifikasi.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          ANM <cite title="Source Title">Aman Nyaman Murah</cite>
        </figcaption>
      </figure>
      <a href="function/kelola.php" type="button" class="btn b" mb-3 style="background-color: rgb(194, 197, 199)">
        <i class="fa fa-plus"></i>
        Tambah Data
    </a>
    <!-- Alert start -->
    <?php if(isset($_SESSION['eksekusi'])): ?>
      <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
          <?=$_SESSION['eksekusi']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     <?php
     session_destroy();
     endif;
     ?>
     <!-- Alert start -->
     
    <!-- Heading end -->

    <!-- Table start -->
    <div class="table-responsive mt-4">
        <table id="dt" class="table align-middle table-hover" >
            <thead>
                    <tr>
                       <th><center>No.</center></th>
                       <th><center>NAMA PEMILIK</center></th>
                       <th><center>NO.TELPON</center></th>
                       <th><center>HARGA/BULAN</center></th>
                       <th><center>MIN. BAYAR</center></th>
                       <th><center>DESKRIPSI</center></th>
                       <th><center>ALAMAT</center></th>
                       <th><center>FOTO</center></th>
                       <th><center>AKSI</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($result = mysqli_fetch_assoc($sql)){ ?>
                    <tr>
                        <td><?= ++$no; ?>.</td>
                        <td><?= $result['nama_pemilik']; ?></td>
                        <td><?= $result['no_telpon']; ?></td>
                        <td><?= $result['harga_kos']; ?></td>
                        <td><?= $result['min_bayar']; ?></td>
                        <td><?= $result['deskripsi']; ?></td>
                        <td><?= $result['alamat']; ?></td>
                        <td><img src="../gambar/<?= $result['foto']; ?>" alt="" width="200px" height="100px" ></td>
                        <td>
                          <a href="function/kelola.php?ubah=<?= $result['id']; ?>" type="button" class="btn btn-success">
                         <i class="fa fa-pencil"></i>
                          </a>
                          <a href="function/proses.php?hapus=<?= $result['id']; ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
                          <i class="fa fa-trash"></i>
                          </a>
                          </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <!-- Table end  -->
    </div>
</body>
</html>