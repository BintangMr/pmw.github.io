<?php
	include 'koneksi.php';

	function register ($data){
		global $koneksi;
		$pass = $data['password'];
		mysqli_query($koneksi, "INSERT INTO user (user_id,name,username,password,email,nohp,alamat)VALUES ('',$data['lngkp'],$data['name'],$data['pass'],$data['email'],$data['nhp'],$data['almt'])");
	}
?>