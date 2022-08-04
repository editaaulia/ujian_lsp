<?php
$host = "localhost";
$tb_pelanggan = "root";
$password = "";
$db = "dblsp_kursus";

$kon = mysqli_connect($host, $tb_pelanggan, $password, $db);
if (!$kon) {
	die("Koneksi gagal:" . mysqli_connect_error());
}