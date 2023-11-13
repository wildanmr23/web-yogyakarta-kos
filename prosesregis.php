<?php
    include('fungsi/koneksi.php');
    session_start();

    $nama_lengkap = $_POST['nama_lengkap'];
    $no_telpon = $_POST['no_telpon'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];

    $query = "INSERT INTO user(nama_lengkap, no_telpon, email, pass, role) VALUES ('$nama_lengkap', '$no_telpon', '$email', '$pass', '$role' )";
    $sql = mysqli_query($conn, $query);

    if($sql){
        echo "<script>
            alert('Anda berhasil melakukan registrasi. Silahkan untuk melakukan login.');
            window.location.href='login.php';
            </script>";
    } else {
        echo $sql;
    }
?>