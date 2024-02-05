<?php
include_once 'config/koneksi.php';

function userCreate($data)
{
    global $koneksi;
    $level = isset($data['level']) ? $data['level'] :  'member';
    $query = "INSERT INTO user (name, username, password, email, nohp, alamat, level) VALUES ";
    $query = $query .
                "('"  .  $data['nama'] .
                "','" .  $data['username'] .
                "','" .  $data['password'] .
                "','" .  $data['email'] .
                "','" .  $data['nohp'] .
                "','" .  $data['alamat'] .
                "','" .  $level  .
                "')";

    mysqli_query( $koneksi,$query);

    return mysqli_affected_rows($koneksi);
}