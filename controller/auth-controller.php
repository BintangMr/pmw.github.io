<?php
include_once 'config/koneksi.php';

function login($username, $password)
{
    global $koneksi;

    $data = [
        'status' => false,
        'data' => null
    ];

    $res = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

    if (mysqli_num_rows($res) > 0) {
        $data['status'] = true;
        $data['data'] = mysqli_fetch_assoc($res);
    }

    return $data;
}

function logout()
{
    session_destroy();
    header('Location: ' . '#', true, 301);
    exit();
}
