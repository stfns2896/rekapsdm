<?php  
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if (isset($POST['tambah'])) {
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_pegawai		= $POST['id_pegawai'];
	$id_pelatihan	= $POST['id_pelatihan'];
	$nipp			= $POST['nipp'];
	$nama_pegawai	= $POST['nama_pegawai'];
	$lokasi_pegawai	= $POST['lokasi_pegawai'];
	$substansi		= $POST['substansi'];
	$kelas_jabatan	= $POST['kelas_jabatan'];
	$jenis_kelamin	= $POST['jenis_kelamin'];
	$durasi			= $POST['durasi'];

	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$connect=mysqli_connect("localhost","root","","rekapsdm");
	$input	= mysqli_query($connect,"INSERT INTO diklat VALUES(NULL, '$id_pegawai','$id_pelatihan','$nipp','$nama_pegawai','$lokasi_pegawai','$substansi','$kelas_jabatan','$jenis_kelamin','$durasi')") or die (mysqli_error());

	//jika query input sukses
	if ($input) {
		
		echo "Data berhasil ditambahkan! ";
		echo '<a href=tambah.php">Kembali</a>';
	
	}else{	
		
		echo "Gagal menambahkan data! ";
		echo '<a href=tambah.php">Kembali</a>';
	
	}

}else { //jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>