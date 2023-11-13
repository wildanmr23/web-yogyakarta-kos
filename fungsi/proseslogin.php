<?php
    include "koneksi.php";

        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM user WHERE email = '$email' AND pass = '$pass'";
        $sql = mysqli_query($conn, $query);
        
        $result = mysqli_num_rows ($sql);
        $row = mysqli_fetch_row($sql);

        if ($result > 0){
            if ($row[5] == "admin") {
                header("location: ../admin/admin.php");
            } else {
            header("location: ../dashboard.php");
            }
        } else {
            echo "<script>
            alert('Username atau Password yang anda masukan salah atau belum melakukan registrasi. Silahkan coba lagi.');
            window.location.href='../index.php';
            </script>";
        }
?>