<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "pengaduan_masyarakat";

try {
	//create PDO connection
	$db = new PDO("mysql:host=$host;dbname=$db", $username, $password);
} catch(PDOException $e) {
	//show error
	die("Terjadi masalah: " . $w->getMessage());
}