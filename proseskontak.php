<?php
    include('fungsi/koneksi.php');
    session_start();

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $query = "INSERT INTO kontak(nama, email, pesan) VALUES ('$nama', '$email', '$pesan' )";
    $sql = mysqli_query($conn, $query);

    if($sql){
        echo "<script>
            alert('Pesan berhasil dikirim. Kami akan segera mengkonfirmasi ke email yang sudah anda masukan. Terima Kasih.');
            window.location.href='login.php';
            </script>";
    } else {
        echo $sql;
    }
?>