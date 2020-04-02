<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "pengaduan_masyarakat";

$koneksi = mysql_connect($host, $username, $password, $db);


if($koneksi){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
?>