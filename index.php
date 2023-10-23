<?php
    include "koneksi.php";
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
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="csss/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">YOGYAKARTA KOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
          </div>
        </div>
      </nav>
    <!-- Navbar end -->

    <!-- Carousel start-->
    <div id="carouselExampleCaptions" class="carousel slide" data-interval="2" data-bs-ride="carousel">
    <div div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1605181063694-e64a8e7a267f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" alt="..." height="670px" >
      <div class="carousel-caption d-none d-md-block">
        <h5>Welcome</h5>
        <p>"Selamat datang di kos-kosan kami yang nyaman dan terjangkau. Kami menawarkan kenyamanan, keamanan, dan lokasi strategis bagi para penghuni kami."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" class="d-block w-100" alt="..." height="670px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pentingnya Pengalaman</h5>
        <p>"Dapatkan pengalaman tinggal yang tak terlupakan di kos-kosan kami. Fasilitas lengkap dan perawatan berkualitas membuat Anda merasa seperti di rumah."</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1599619351208-3e6c839d6828?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" class="d-block w-100" alt="..." height="670px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Berbagai Ragam Kos</h5>
        <p>"Kami memiliki beragam tipe kamar yang sesuai dengan kebutuhan Anda, mulai dari kamar pribadi hingga kamar bersama. Temukan kos impian Anda bersama kami."</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    <!-- Carousel end -->

    <!-- Heading start -->
    <div class="head">
        <h1 class="mt-4">KOS YOGYAKARTA</h1>
      <figure>
        <blockquote class="blockquote">
          <p>Berisi data listingan kos yang sudah di verifikasi.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          ANM <cite title="Source Title">Aman Nyaman Murah</cite>
        </figcaption>
      </figure>
      <a href="kelola.php" type="button" class="btn btn-primary" mb-3>
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
                        <td><?= $result['alamat']; ?></td>
                        <td><img src="gambar/<?= $result['foto']; ?>" alt="" width="200px" height="100px" ></td>
                        <td>
                          <a href="kelola.php?ubah=<?= $result['id']; ?>" type="button" class="btn btn-success">
                         <i class="fa fa-pencil"></i>
                          </a>
                          <a href="proses.php?hapus=<?= $result['id']; ?>" type="button" class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')">
                          <i class="fa fa-trash"></i>
                          </a>
                          </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        </div>
    <!-- Table end -->
</body>
</html>