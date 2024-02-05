<?php
ob_start();
include_once 'controller/movie-controller.php';
if (!isset($_SESSION)) session_start();

//Cek Halaman yang dituju
array_key_exists('page', $_GET) ?
    $page = $_GET['page'] :
    $page = 'index';

?>
<html>
<head>
    <title>Admin | Bioskop 9999</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="sup/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="admin/main_a.css">
</head>
<body>
<div class="warper">
    <div class="content list">
        <div class="card-form">
            <?php
            if ($page == "index") {
                include "admin/page/list-movie.php";
            } else if ($page == 'tambah-movie') {
                include "admin/page/tambah-movie.php";
            }else if ($page == 'edit-movie') {
                include "admin/page/edit-movie.php";
            }else if ($page == 'hapus-movie') {
                if(movieDelete($_GET['id'])){
                    header('Location: admin.php');
                    die();
                };
            }
            ?>
        </div>
        <div class="card-vali">
            <div class="form-vali">
                <div class="vali-bdy">
                    <div class="title-mov">
                        <h3>Menu Administrator</h3>
                    </div>
                    <div class="btn-menu">
                        <button onclick="document.location.href='?page=tambah-movie';" type="button">KELOLA FILM</button>
                        <button onclick="document.location.href='?page=index';" type="button">KEMBALI</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
