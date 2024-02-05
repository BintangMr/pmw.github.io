<?php
ob_start();
if (!isset($_SESSION)) session_start();

//Cek Halaman yang dituju
array_key_exists('page', $_GET) ?
    $page = $_GET['page'] :
    $page = 'index';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="sup/css/bootstrap.css"/>

    <!-- My Css -->
    <link rel="stylesheet" href="style.css"/>
    <title>Bioskop 9999</title>
</head>
<body>
<!-- Header -->
<header>
    <div class="judul py-4 ms-3">
        <a class="text-decoration-none"><h1 class="fw-bold">Bioskop 9999</h1></a>
        <h6 class="ms-2 cn">Tempat Beli Tiket Bioskop Kesayangan Anda</h6>
    </div>
</header>
<!-- Akhir header -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark text-center">
    <?php include "component/navbar.php"; ?>
</nav>
<!-- Akhir Navbar -->
<?php include "component/top-movie.php"; ?>
<!-- Top Movie -->

<!-- Akhir Top Movie -->

<!-- Konten -->
<main>

    <div class="content mt-5 d-flex justify-content-around flex-wrap">
        <!-- bagian kanan -->
        <?php
        if ($page == "index") {
            include "page/index.php";
        }

        if ($page == "info-film") {
            include "page/info-film.php";
        }

        if (!isset($_SESSION['user'])) {
            if ($page == "register") {
                include "page/register.php";
            }
        } else {
            if ($page == "form-pemesanan") {
                include "page/form-pemesanan.php";
            }
            if ($page == "now-playing") {
                include "page/now-playing.php";
            }
            if ($page == "coming-soon") {
                include "page/coming-soon.php";
            }
            if ($page == "riwayat-pemesanan") {
                include "page/daftar-pesanan.php";
            }
            if ($page == "theater") {
                include "page/theater.php";
            }
            if ($page == "about") {
                include "page/about.php";
            }
            if ($page == "help") {
                include "page/help.php";
            }
         }
        ?>
        <!-- bagian kiri -->
        <?php include "component/form-login.php" ?>
    </div>
    <!-- Footer-->
    <footer class="py-5" style="width: 100%; height: 10px; background-color: #41434E">
        <div class="container">
            <div class="small text-center text-muted" style="font-family: var(--font3);">
                Copyright © 2024 - Bioskop 9999 
            </div>
        </div>
    </footer>
    <!--end footer-->
</main>

<script src="sup/js/bootstrap.bundle.js"></script>
<script></script>
</body>
</html>
