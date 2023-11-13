<?php
    include "../fungsi/koneksi.php";
    session_start();

    //Untuk proses READ
    $queryshow = "SELECT * FROM user";
    $sqlshow = mysqli_query ($conn, $queryshow);



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
    <a class="navbar-brand" href="admin.php"><i class="bi bi-person"></i> Halaman Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="admin.php"><i class="bi bi-reply-all"></i> Kembali</a>
        <a class="nav-link active" aria-current="page" href="../login.php"><i class="bi bi-box-arrow-left"></i> Keluar</a>
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
          <p>Berisi data yang sudah melakukan registrasi.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          ANM <cite title="Source Title">Aman Nyaman Murah</cite>
        </figcaption>
      </figure>
    <!-- Heading end -->

    <!-- Pengguna start -->
      <div class="table-responsive mt-4">
        <table id="dt" class="table align-middle table-hover" >
            <thead>
                    <tr>
                       <th>No.</th>
                       <th>NAMA LENGKAP</th>
                       <th>NOMOR TELPON</th>
                       <th>EMAIL</th>
                       <th>PASSWORD</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($result = mysqli_fetch_assoc($sqlshow)){ ?>
                    <tr>
                        <td><?= ++$no; ?>.</td>
                        <td><?= $result['nama_lengkap']; ?></td>
                        <td><?= $result['no_telpon']; ?></td>
                        <td><?= $result['email']; ?></td>
                        <td><?= $result['pass']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <!-- Pengguna end -->
    </div>
</body>
</html>