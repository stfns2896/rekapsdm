<?php 
$server		= "localhost";
$username	= "root";
$password	= "";
$name	= "rekapsdm";

$connect	= mysqli_connect($server,$username,$password) or die ("Koneksi ke database gagal");
$select_db	= mysqli_select_db($connect, $name) or die ("Tidak ada database yang dipilih");
?>