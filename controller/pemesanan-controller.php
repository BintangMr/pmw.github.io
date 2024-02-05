<?php
include_once '../config/koneksi.php';

function pemesananCreate($data)
{
    global $koneksi;
    $query = "INSERT INTO pesan_tiket (user_id, studio, id_movie, jam_tayang, tanggal,total_harga,bayar, kursi) VALUES ";
    $query = $query .
        "('"  .  $data['id_pemesan'] .
        "','" .  $data['studio'] .
        "','" .  $data['id_film'] .
        "','" .  $data['jam_tayang'] .
        "','" .  $data['tanggal'] .
        "','" .  $data['total'] .
        "','" .  $data['bayar'] .
        "','" .  json_encode($data['kursi'])  .
        "')";

    $result = mysqli_query($koneksi,$query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($koneksi), E_USER_ERROR);;

    echo $result;
    return true;
}

if(isset($_POST)){
    pemesananCreate($_POST);
}
