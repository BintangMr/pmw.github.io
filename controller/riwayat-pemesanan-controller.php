<?php
include_once 'config/koneksi.php';

function pesananList()
{
    global $koneksi;
    $query = "SELECT movie.judul,pesan_tiket.tanggal,pesan_tiket.jam_tayang,pesan_tiket.kursi, pesan_tiket.tiket_id  FROM pesan_tiket join movie on movie.movie_id = pesan_tiket.id_movie WHERE pesan_tiket.user_id = " . $_SESSION['user']['user_id'];

    $result = mysqli_query($koneksi,$query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($koneksi), E_USER_ERROR);;
    $data = [];
    while($row = $result->fetch_row()) {
        $data[] = $row;
    }
    return $data;
}