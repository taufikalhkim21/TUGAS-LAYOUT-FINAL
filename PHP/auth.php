<?php 
session_start();
include "Koneksi.php";

//LOGIN
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

// ADMIN 
        if($username === 'admin' && $password === 'admin'){
            $_SESSION['user'] = [
                'username' => 'admin',
                'role' => 'admin'
            ];
            // header("Location: ../ADMIN/dashboard.php");
            echo '<script>alert("Selamat datang, admin"); window.location.href="../admin/dashboard.php"</script>';
            exit;
        }

        $query = mysqli_query($Koneksi, "SELECT*FROM user WHERE username = '$username' and  password='$password'");

        if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] = $data;
            echo '<script>alert("Selamat datang, '.$data['username'].'"); window.location.href="../user.php"</script>';
            exit;
        } else {
            echo '<script>alert("Username/Password salah "); window.location.href="./auth/login.php"</script>';
        }

    }


//DAFTAR 
    if(isset($_POST['daftar'])){
        $username = $_POST ['username'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];

        $query = mysqli_query($Koneksi, "INSERT INTO user(username, email, password) VALUES ('$username','$email','$password')");

        if($query){
            echo '<script>alert("daftar berhasil, silahkan login"); window.location.href="./auth/login.php"</script>';
        } else {
            echo '<script>alert("daftar gagal, silahkan coba lagi"); window.location.href="./auth/daftar.php"</script>';
        }
    }
?>