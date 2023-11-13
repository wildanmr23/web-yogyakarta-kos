<?php
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylee.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
     <!-- Navbar start -->
     <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" >
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="index.php"><strong><i class="bi bi-house-gear"></i> YOGYAKARTA KOS</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-dark" href="registrasi/regisuser.php"><i class="bi bi-people-fill"></i> Registrasi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Navbar end -->

    <?php if(isset($_SESSION['eksekusi'])): ?>
      <div class="alert alert-secondary alert-dismissible fade show mt-3" role="alert">
          <?=$_SESSION['eksekusi']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
     <?php
     session_destroy();
     endif;
     ?>

    <div class="login-box">
        <h1>Login</h1>
        <img src="registrasi/avatar.jpg" alt="" class="avatar">
        <form action = "fungsi/proseslogin.php" method="post">
            <p>Email</p>
            <input type="text" name="email" id="" placeholder="Example@gmail.com">
            <p>Password</p>
            <input type="password" name="pass" id="" placeholder="Enter password">
            <input type="submit" value="Masuk">
            Belum punya akun? 
            <a href="registrasi/regisuser.php">Registrasi dulu disini.</a>
        </form>
    </div>
</body>
</html>