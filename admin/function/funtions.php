<?php
    include'../../fungsi/koneksi.php';

    function tambah_data ($data, $files){
        $nama = $data['nama'];
        $no_telpon = $data['telpon'];
        $harga = $data['harga'];
        $minbayar = $data['minbayar'];
        $deskripsi = $data['deskripsi'];
        $alamat = $data['alamat'];

        $split = explode('.', $files['foto']['name']);
        $ekstensi = $split[count($split)-1];

        $foto = $no_telpon.'.'.$ekstensi;

        $dir = "../../gambar/";
        $tmpFile =  $files['foto']['tmp_name'];

        move_uploaded_file($tmpFile, $dir.$foto);

        $query = "INSERT INTO tb_kos VALUES (null, '$nama', '$no_telpon', '$harga', '$minbayar', '$deskripsi', '$alamat', '$foto' )";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true;
    }

    function ubah_data ($data, $files){
        $id = $data['id'];
        $nama = $data['nama'];
        $no_telpon = $data['telpon'];
        $harga = $data['harga'];
        $minbayar = $data['minbayar'];
        $deskripsi = $data['deskripsi'];
        $alamat = $data['alamat'];

        //untuk UPDATE foto

        $queryShow = "SELECT * FROM tb_kos WHERE id = '$id'";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        if($files['foto']['name'] == ""){
            $foto = $result['foto'];
        } else {
            $foto = $files['foto']['name'];

        unlink("../../gambar/".$result['foto']);
        move_uploaded_file($files['foto']['tmp_name'], '../../gambar/'. $files['foto']['name']);
    }
        $query = "UPDATE tb_kos SET nama_pemilik='$nama', no_telpon= '$no_telpon', harga_kos= '$harga', min_bayar='$minbayar', deskripsi='$deskripsi', alamat = '$alamat', foto='$foto' WHERE id='$id';";
        $sql = mysqli_query($GLOBALS['conn'], $query);

        return true; 
    }

    function hapus_data($data){
        $id = $data['hapus'];
        $queryShow = "SELECT * FROM tb_kos WHERE id = '$id'";
        $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("../../gambar/".$result['foto']);


        $query = "DELETE FROM tb_kos WHERE id = '$id'";
        $sql = mysqli_query($GLOBALS["conn"], $query);

        return true;
    }

?>