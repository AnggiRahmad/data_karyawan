<?php

$server   = "localhost";
$database = "data_pegawai";
$user     = "root";
$password = "";

$koneksi = mysqli_connect($server, $user, $password) or die ("koneksi server gagal");

if($koneksi){
	mysqli_select_db($koneksi, $database) or die ("koneksi database gagal");

}

?>