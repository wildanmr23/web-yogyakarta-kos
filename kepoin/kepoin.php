<?php
    include("../fungsi/koneksi.php");

    if (isset($_GET['ubah'])){
      $id = $_GET['ubah'];

      $query = "SELECT * FROM tb_kos WHERE id = '$id'";
      $sql = mysqli_query ($conn, $query);
      $result = mysqli_fetch_assoc($sql);


      $fasilitas = $result["deskripsi"];
      $nama_pemilik = $result['nama_pemilik'];
      $min_bayar = $result['min_bayar'];
      $alamat = $result['alamat'];
      $harga_kos = $result['harga_kos'];
      $foto = $result['foto'];

    } else {
      echo"eror";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kepoin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <div class="container-sm">
        <figure>
            <blockquote class="blockquote mt-3">
              <p>Yoyakarta Kos, tempat pilihan untuk anda.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              AMN <cite title="Source Title">Aman Murah Nyaman</cite>
            </figcaption>
          </figure>
          <article>
          <img src="../gambar/<?php echo $foto; ?>" class="img-thumbnail" alt="..." height="505px" width="580px">
          <h4><?php echo $fasilitas; ?></h4> <br> 
          <p>Nama pemilik : <?php echo $nama_pemilik; ?></p>
          <p>Min. Bayar   : <?php echo $min_bayar; ?></p>
          <p>Alamat       : <?php echo $alamat; ?></p>
          <h5>Harga       : <?php echo $harga_kos; ?></h5><br>
          <a href="https://wa.me/62082127312767?text=Apakah%20kos%20ini%20masih%20tersedia%3F%0A<?php echo 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" type="button" class="btn btn-secondary"><i class="bi bi-chat-right-text"></i> Pesan</a>
          <a href="../dashboard.php" type="button" class="btn btn-danger"><i class="bi bi-reply-all"></i> batal</a>
        </article>
    </div>
    
</body>
</html>