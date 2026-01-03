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
          <h2>Daftar</h2>
          <input type="username" name="username" placeholder="Username" required>
          <input type="email" name="email" placeholder="Email" required/>
          <input type="password" name="password" placeholder="Password" required/>
          <button type="submit" name="daftar">Daftar</button>
        </form>
      </div>
    </div>
  </body>
</html>
