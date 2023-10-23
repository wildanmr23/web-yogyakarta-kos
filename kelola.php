<!DOCTYPE html>
<?php 
    include'koneksi.php';

      $id = '';
      $nama_pemilik = '';
      $no_telpon = '';
      $harga_kos = '';
      $min_bayar = '';
      $alamat = '';

    // Upload data dan di simpan di value masing - masing input
    if (isset($_GET['ubah'])){
      $id = $_GET['ubah'];

      $query = "SELECT * FROM tb_kos WHERE id = '$id'";
      $sql = mysqli_query ($conn, $query);

      $result = mysqli_fetch_assoc($sql);
      
      $nama_pemilik = $result ['nama_pemilik'];
      $no_telpon = $result ['no_telpon'];
      $harga_kos = $result ['harga_kos'];
      $min_bayar = $result ['min_bayar'];
      $alamat = $result ['alamat'];
    }
    

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <title>Data Listingan</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          DATA LISTINGAN
          </a>
        </div>
      </nav>
      <div class="container">
       <form method="POST" action="proses.php" enctype="multipart/form-data">

       <!-- supaya tidak ada keliru saat ada data yang sama saat proses UPDATE -->
        <input type="hidden" value="<?= $id; ?>" name="id">
          <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">
                NAMA PEMILIK</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nisn" placeholder="Ex : Wildan Mursalin" required value="<?php echo $nama_pemilik; ?>" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">
                NOMER TELPON</label>
            <div class="col-sm-10">
              <input type="text" name="telpon"  class="form-control" id="nisn" placeholder="Ex : 0857893842293" required value="<?= $no_telpon; ?>" >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">
                HARGA/BULAN</label>
            <div class="col-sm-10">
              <input value="<?= $harga_kos; ?>" type="text" name="harga"  class="form-control" id="nisn" placeholder="Ex : Rp. 700.000" required >
            </div>
          </div>
          <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">
                MIN. BAYAR</label>
            <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="minbayar" >
            <option <?php if ($min_bayar == '1 bulan' ){ echo "selected"; } ?> value="1 Bulan">1 Bulan</option>
            <option <?php if ($min_bayar == '2 bulan' ){ echo "selected"; } ?> value="2 Bulan">2 Bulan</option>
            <option <?php if ($min_bayar == '3 bulan' ){ echo "selected"; } ?> value="3 Bulan">3 Bulan</option>
            <option <?php if ($min_bayar == '4 bulan' ){ echo "selected"; } ?> value="4 Bulan">4 Bulan</option>
            <option <?php if ($min_bayar == '5 bulan' ){ echo "selected"; } ?> value="5 Bulan">5 Bulan</option>
            <option <?php if ($min_bayar == '6 bulan' ){ echo "selected"; } ?> value="6 Bulan">6 Bulan</option>
            <option <?php if ($min_bayar == '7 bulan' ){ echo "selected"; } ?> value="7 Bulan">7 Bulan</option>
            <option <?php if ($min_bayar == '8 bulan' ){ echo "selected"; } ?> value="8 Bulan">8 Bulan</option>
            <option <?php if ($min_bayar == '9 bulan' ){ echo "selected"; } ?> value="9 Bulan">9 Bulan</option>
            <option <?php if ($min_bayar == '10 bulan' ){ echo "selected"; } ?> value="10 Bulan">10 Bulan</option>
            <option <?php if ($min_bayar == '11 bulan' ){ echo "selected"; } ?> value="11 Bulan">11 Bulan</option>
            <option <?php if ($min_bayar == '1 tahun' ){ echo "selected"; } ?> value="1 Tahun">1 Tahun</option>
            <option <?php if ($min_bayar == '2 tahun' ){ echo "selected"; } ?> value="2 Tahun">2 Tahun</option>
            <option <?php if ($min_bayar == '3 tahun' ){ echo "selected"; } ?> value="3 Tahun">3 Tahun</option>
            </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">
                ALAMAT LENGKAP</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Jl. Raya Barat No. 21A" required><?= $alamat ; ?></textarea>
            </div>
        </div>
          <div class="mb-3 row">
            <label for="fotosiswa" class="col-sm-2 col-form-label">
                FOTO KOS</label>
            <div class="col-sm-10">
                <input <?php if(!isset($_GET['ubah'])) { echo "required"; }  ?> class="form-control" type="file" name="foto" id="fotosiswa" accept="image/*" >
            </div>
        </div>
            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php 
                        if (isset($_GET['ubah'])){
                    ?>
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Simpan Perubahan
                      </button>
                    <?php
                    } else {
                    ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Tambahkan
                      </button>
                    <?php
                    }
                    ?>
                    <a href="index.php" typr="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                        Batal</a>
                </div>
            </div
       </form>
      </div>
</body>
</html>