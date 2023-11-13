<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style2.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" >
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="../index.php"><strong><i class="bi bi-house-gear"></i> YOGYAKARTA KOS</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-dark" href="../login.php"><i class="bi bi-people-fill"></i> Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Navbar end -->

    <div class="login-box">
        <h1>Registrasi</h1>
        <img src="avatar.jpg" alt="" class="avatar">
        <form action = "../prosesregis.php" method="post">
            <p>Nama Lengkap</p>
            <input type="text" name="nama_lengkap" id=""required>
            <p>Nomer Telpon</p>
            <input type="text" name="no_telpon" onkeypress="return hanyaAngka(event)" required>
            <script type="text/javascript">
              function hanyaAngka(evt){
                var charCode = (evt.which) ? evt.which : event.keycode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
              return true;
              }
            </script>
            <p>Email</p>
            <input type="email" name="email" id="" required>
            <p> Buat Password</p>
            <input type="password" name="pass" required>
            <input type="hidden" name="role" >
            <input type="submit" name="submit" value="Daftar" onclick="myFunction()">
        </form>
    </div>
</body>
</html>