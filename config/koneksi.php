<?php
$server = "localhost";
$user = "root";
$pass = "124";
$db = "Pondok";

$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek) {
	die('Koneksi Gagal :V '. mysqli_connect_error()); 
}
?>
