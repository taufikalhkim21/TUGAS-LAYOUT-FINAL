<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS LAYOUT</title>
    <link rel="stylesheet" href="./CSS/style.css" />
    <script
      src="https://kit.fontawesome.com/d08df83689.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!-- HEADER -->
    <header>
      <div class="container-nav">
        <ul>
          <li><a href="#">Sistem Informasi</a></li>
          <li><a href="#">Mahasiswa</a></li>
          <li><a href="#">Perpustakaan</a></li>
          <li><a href="#">Alumni</a></li>
          <li><a href="#">Arsip</a></li>
          <li><a href="#">SPPKS</a></li>
          <li><a href="#">Unit/Lembaga</a></li>
          <li><a href="#">Peta Kampus</a></li>
          <li><a href="#">PPID</a></li>
          <div class="logo-container">
            <li>
              <img src="./IMAGE/united-kingdom.png" alt="united-kingdom" />
            </li>
            <li><img src="./IMAGE/indonesia.png" alt="indonesia" /></li>
            <li><i class="fa-brands fa-x-twitter icon-sosial"></i></li>
            <li><i class="fa-brands fa-facebook icon-sosial"></i></li>
            <li><i class="fa-brands fa-instagram icon-sosial"></i></li>
            <li><i class="fa-brands fa-tiktok icon-sosial"></i></li>
          </div>
          <div class="login">
            <ul>
            <li><a href="PHP/auth/logout.php"><i class="fa-solid fa-user icon-sosial"></i>Logout</a></li>
            <!-- <li><a href="./ADMIN/dashboard.php">Dashboard</a></li> -->
            </ul>
          </div>
        </ul>
      </div>
      <nav>
        <div class="logo-navbar">
          <img src="./IMAGE/UPI-Logo-white.png" alt="logo" />
          <img src="./IMAGE/diktisaintek-berdampak.png" alt="logo" />
        </div>
        <ul>
          <li><a href="#">TENTANG</a></li>
          <li><a href="#">AKADEMIK</a></li>
          <li><a href="#">PENELITIAN</a></li>
          <li><a href="#">PENGABDIAN</a></li>
          <li><a href="#">PENERIMAAN</a></li>
        </ul>
      </nav>
    </header>
    <!-- HEADER END -->

    <!-- CONTENT -->
    <section class="content-sec">
      <div class="background-image"></div>
      <div class="quote-text">
        <img src="./IMAGE/Prof-Sunaryo.jpg" alt="#" />
        <h4>
          <i class="fa-solid fa-quote-left"></i>Pendidikan Kehidupan Nyata
          mengintegrasikan belajar, hidup, dan bekerja sebagai<br />keutuhan
          pengalaman peserta didik.
        </h4>
      </div>
      <div class="text-center">
        <ul>
          <img src="./IMAGE/bullet.png" alt="#" />
          <li>
            <h3>Berita</h3>
          </li>
        </ul>
        <div class="text-center2">
          <ul>
            <li>
              <p>More UPI News</p>
            </li>
          </ul>
        </div>
        <div class="text-center3">
          <ul>
            <img src="./IMAGE/bullet.png" alt="#" />
            <li>
              <h3>Agenda</h3>
            </li>
          </ul>
        </div>
        <div class="text-center4">
          <ul>
            <img src="./IMAGE/bullet.png" alt="#" />
            <li>
              <h3>Video</h3>
            </li>
          </ul>
        </div>
        <div class="text-video">
          <img src="./IMAGE/maxresdefault.jpg" alt="#" />
          <img src="./IMAGE/maxresdefault (1).jpg" alt="#" />
        </div>
      </div>
      <div class="container-bottom">
        <img src="./IMAGE/ppid-en-.jpg" alt="#" />
        <img src="./IMAGE/ult-en-.jpg" alt="#" />
        <img src="./IMAGE/tvUPI.jpeg" alt="#" />
        <img src="./IMAGE/LAPOR-en-.jpg" alt="#" />
        <img src="./IMAGE/humas.jpg" alt="#" />
      </div>
    </section>
    <!-- CONTENT END -->

    <!-- FOOTER -->
    <footer>
      <section class="footer">
        <div class="footer-logo">
          <img src="./IMAGE/UPI-Logo-white.png" alt="#" />
        </div>
        <section>
          <ul>
            <li>
              <h4>Kontak Kami</h4>
            </li>
            <li>
              <p>
                Universitas Pendidikan Indonesia<br />
                Jl. Dr. Setiabudhi No. 229 Bandung 40154<br />
                Jawa Barat - Indonesia<br />
                E-mail: sekuniv_upi@upi.edu
              </p>
            </li>
          </ul>
          <ul>
            <li>
              <h4>Tautan Penting</h4>
            </li>
            <li>
              <p>
                Portal Mahasiswa<br />
                Perpustakaan<br />
                Jurnal UPI
              </p>
            </li>
          </ul>
          <ul>
            <li>
              <h4>Ikuti Kami</h4>
            </li>
            <i class="fa-brands fa-x-twitter icon-sosial"></i>
            <i class="fa-brands fa-facebook icon-sosial"></i>
            <i class="fa-brands fa-instagram icon-sosial"></i>
            <i class="fa-brands fa-tiktok icon-sosial"></i>
          </ul>
        </section>
      </section>
      <div class="footer-bottom">
        <p>© Universitas Pendidikan Indonesia 2021</p>
      </div>
    </footer>
    <!-- FOOTER END -->
  </body>
</html>
