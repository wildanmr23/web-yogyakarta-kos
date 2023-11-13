<?php
    include "fungsi/koneksi.php";

    $query = "SELECT * FROM tb_kos";
    $sql = mysqli_query ($conn, $query);


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">

     <!-- datatables -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    </head>

    <body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(194, 197, 199)" >
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="#"><strong><i class="bi bi-house-gear"></i> YOGYAKARTA KOS</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <div class="navbar-nav ms-auto ">
          <a class="nav-link active text-dark" aria-current="page" href="#"><i class="bi bi-house"></i> Home</a>
          <a class="nav-link active text-dark" aria-current="page" href="#explore"><i class="bi bi-bookmark-star"></i> Explore</a>
          <a class="nav-link text-dark" href="#about"><i class="bi bi-people-fill"></i> Tentang Kami</a>
          <a class="nav-link text-dark" href="#contact"><i class="bi bi-telephone"></i> Kontak</a>
          <a class="nav-link text-dark" href="login.php"><i class="bi bi-box-arrow-right"></i> Keluar</a>
      </div>
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
      <img src="https://images.unsplash.com/photo-1515542706656-8e6ef17a1521?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="..." height="670px">
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

    <main role="main">

        <section class="jumbotron text-center" id="explore" >
            <div class="container mt-3 fw-bold">
                <h1>YOGYAKARTA KOS</h1>
                <p class="lead text-muted">Kami memudahkan anda terutama pendatang yang datang ke Yogyakarta ini dalam menemukan tempat tinggal.</p>
            </div>
        </section>
        
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                <?php while ($result = mysqli_fetch_assoc($sql)){ ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="gambar/<?= $result['foto']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title><?= $result['nama_pemilik']; ?></title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em"></text></img>
                            <div class="card-body">
                                <p class="card-text"><?= $result['deskripsi']; ?>.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><?= $result['harga_kos']; ?></small>
                                </div>
                                <a href="kepoin/kepoin.php?ubah=<?= $result['id']; ?>" type="submit" name="aksi" value="kepoin" class="btn btn-outline-primary mt-2">
                                        <i class="bi bi-eye"></i>
                                        Kepoin
                                    </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                </main>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="1" d="M0,224L48,224C96,224,192,224,288,218.7C384,213,480,203,576,176C672,149,768,107,864,122.7C960,139,1056,213,1152,245.3C1248,277,1344,267,1392,261.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>

        <!-- about start -->
            <section id="about">
                <div class="container">
                <div class="row text-center mt-3">
                    <div class="col">
                        <br><br><br><br><br>
                    <h2>Tentang kami</h2>
                    </div>
                </div>
                <p class="text-center mb-10" >Kami menyediakan berbagai pilihan kos yang tentunya akan sangat membantu anda sekalian dalam mencari tempat tinggal. Berawal dari pengalaman saya sendiri yang mana pada waktu itu sedang membutuhkan kos untuk dijadikan tempat tinggal dan pada akhirnya saya menemukan kos yang begitu nyaman dan saya dapatkan tidak melalui media sosial. Oleh karena itu, saya menyediakan ini semua untuk memudahkan anda sekalian dalam mencari tempat tinggal.</p>
                </div>
                <br><br><br><br>
                <div class="row text-center" style="margin: auto">
                    <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8f9fa" fill-opacity="1" d="M0,64L48,90.7C96,117,192,171,288,176C384,181,480,139,576,138.7C672,139,768,181,864,192C960,203,1056,181,1152,149.3C1248,117,1344,75,1392,53.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
                    </section>
                    <div class="album py-5 bg-light" id="contact">
                    <h2 class="mt-8 text-center" >Kontak / Bantuan</h2>
                <div class="row justify-content-center" style="margin: auto">
                    <div class="col-md-6">
                    <form action="proseskontak.php" method="post">
                        <div class="mb-3">
                        <label for="name" class="form-label text-start">Nama Lengkap</label>
                        <input name="nama" type="text" class="form-control " id="name" aria-describedby="name" placeholder="Alexander">
                        </div>
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="email@gmail.com">
                        <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea name="pesan" class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn btn-primary mb-3">Kirim</button>
                    </form>
                    </div>
                    </div>
                </div>
           
        <!-- about end -->   
                                     

    <footer class="text-center shadow p-3" id="footer" style="background-color: rgb(194, 197, 199)">
        <p class="p-3 mb-2">Created With <i class="bi bi-suit-heart-fill"></i> By <a style="color=red"  href="https://www.instagram.com/p/CxrV4SApBNk/?igshid=MzRlODBiNWFlZA==" class=" fw-bold">Wildan Mursalin Rizqia</a></p>
      </footer>
</body>

</html>