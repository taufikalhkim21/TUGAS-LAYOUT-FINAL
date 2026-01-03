<?php
session_start();
include "../Koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../../CSS/login.css">
  </head>
  <body>
    <div class="container">
      <div class="login-form">
        <form action="../auth.php" method="POST">
          <h2>Login</h2>
          <input type="text" name="username" placeholder="Username" required /> 
          <input type="password" name="password" placeholder="Password" required /> 
          <button type="submit" name="login">Login</button>
          <p>Tidak Mempunyai akun ? <a href="daftar.php">Daftar</a></p>
        </form>
      </div>
    </div>
  </body>
</html>
