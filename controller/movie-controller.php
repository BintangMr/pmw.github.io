<?php
include_once 'config/koneksi.php';

function movieAll()
{
    global $koneksi;
    $query = "SELECT * FROM movie";

    $res = mysqli_query($koneksi, $query);

    $data = [];
    while ($row = $res->fetch_row()) {
        $data[] = $row;
    }
    return $data;
}

function movieTayang()
{
    global $koneksi;
    $query = "SELECT * FROM movie WHERE tampil = TRUE";

    $res = mysqli_query($koneksi, $query);

    $data = [];
    while ($row = $res->fetch_row()) {
        $data[] = $row;
    }
    return $data;
}

function movieComingSoon()
{
    global $koneksi;
    $query = "SELECT * FROM movie WHERE tampil = FALSE";

    $res = mysqli_query($koneksi, $query);

    $data = [];
    while ($row = $res->fetch_row()) {
        $data[] = $row;
    }
    return $data;
}

function movieTrailer()
{
    global $koneksi;
    $query = "SELECT * FROM movie WHERE show_trailer = TRUE";

    $res = mysqli_query($koneksi, $query);

    $data = [];
    while ($row = $res->fetch_row()) {
        $data[] = $row;
    }
    return $data;
}

function movieDetail($id)
{
    global $koneksi;
    $query = "SELECT * FROM movie WHERE movie_id =" . $id;

    $data = null;

    $res = mysqli_query($koneksi, $query);
    if (mysqli_num_rows($res) > 0) {
        $data = mysqli_fetch_assoc($res);
    }

    return $data;
}

function movieCreate($data)
{
    $inipath = php_ini_loaded_file();
//
//    if ($inipath) {
//        echo 'Loaded php.ini: ' . $inipath;
//    } else {
//        echo 'A php.ini file is not loaded';
//    }
    global $koneksi;
    $nama_file_img = $_FILES['poster']['name'];
    $tmp_file_img = $_FILES['poster']['tmp_name'];
    $pathImg = "img/" . time() . "-" . $nama_file_img;

    $nama_file_video = $_FILES['video']['name'];
    $tmp_file_video = $_FILES['video']['tmp_name'];
    $pathVideo = "video/" . time() . "-" . $nama_file_video;

    if (move_uploaded_file($tmp_file_img, $pathImg) && move_uploaded_file($tmp_file_video, $pathVideo)) {
        $tampil = $data['status'] == "now-play" ? 1 : 0;
        $query = "INSERT INTO movie (judul, movie_img, movie_video, tampil,genre,tanggal_rilis, sutradara, durasi, description, harga_tiket, show_trailer, studio) VALUES ";
        $query = $query .
            "('" . $data['judul'] .
            "','" . $pathImg .
            "','" . $pathVideo .
            "','" . $tampil .
            "','" . json_encode($data['genre']) .
            "','" . $data['rilis'] .
            "','" . $data['sutradara'] .
            "','" . $data['durasi'] .
            "','" . $data['sinopsis'] .
            "','" . $data['harga_tiket'] .
            "','" . 0 .
            "','" . json_encode($data['studio']) .
            "')";
    }

    $result = mysqli_query($koneksi, $query) or trigger_error("Query Failed! SQL: $query - Error: " . mysqli_error($koneksi), E_USER_ERROR);;

    echo $result;
    return true;
}

function movieUpdate($data,$id)
{
    global $koneksi;
    $movie = movieDetail($id);
    $nama_file_img = $_FILES['poster']['name'];
    $tmp_file_img = $_FILES['poster']['tmp_name'];
    $pathImg = "img/" . time() . "-" . $nama_file_img;

    $nama_file_video = $_FILES['video']['name'];
    $tmp_file_video = $_FILES['video']['tmp_name'];
    $pathVideo = "video/" . time() . "-" . $nama_file_video;

    $uploadPoster = move_uploaded_file($tmp_file_img, $pathImg);
    $uploadTrailer = move_uploaded_file($tmp_file_video, $pathVideo);

    $tampil = $data['status'] == "now-play" ? 1 : 0;
    $query = "UPDATE movie SET  
                    judul = '" . $data['judul'] . "', 
                    tampil= " . $tampil . ",
                    genre = '". json_encode($data['genre']) ."',
                    tanggal_rilis = '".  $data['rilis'] ."', 
                    sutradara = '". $data['sutradara'] ."', 
                    durasi = '". $data['durasi'] ."', 
                    description = '".$data['sinopsis']."', 
                    harga_tiket = ". $data['harga_tiket'] .", 
                    studio = '".json_encode($data['studio'])."' ";
    if ($uploadPoster) {
        try {
            unlink($movie['movie_img']);
        }catch (Exception $exception){

        }
        $query = $query . ",movie_img = '". $pathImg ."'";
    }

    if($uploadTrailer){
        try {
            unlink($movie['movie_video']);
        }catch (Exception $exception){

        }
        $query = $query . ",movie_video = '". $pathVideo ."'";
    }

    $query = $query . "where movie_id = " . $id . ";";

    $result = mysqli_query($koneksi, $query) or trigger_error("Query Failed! SQL: $query - Error: " . mysqli_error($koneksi), E_USER_ERROR);;

    header("Refresh:0");
}

function movieDelete($id)
{
    global $koneksi;
    $movie = movieDetail($id);
    $query = "DELETE from movie where movie_id = " . $id;
        try {
            unlink($movie['movie_img']);
        }catch (Exception $exception){

        }
        try {
            unlink($movie['movie_video']);
        }catch (Exception $exception){

        }

    $result = mysqli_query($koneksi, $query) or trigger_error("Query Failed! SQL: $query - Error: " . mysqli_error($koneksi), E_USER_ERROR);;

    return true;
}
