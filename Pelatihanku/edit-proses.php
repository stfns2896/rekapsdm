<?php  
//mulai proses tambah data

//cek dahulu, jika tombol simpan di klik
if (isset($POST['simpan'])) {
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');

	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_pelatihan	= $POST['id_pelatihan'];
	$nama_pelatihan	= $POST['nama_pelatihan'];
	$id_bidang		= $POST['id_bidang'];
	$tanggal_awal	= $POST['tanggal_awal'];
	$tanggal_akhir	= $POST['tanggal_akhir'];
	$lokasi			= $POST['lokasi'];
	$id_klasifikasi	= $POST['id_klasifikasi'];
	$klasifikasi	= $POST['klasifikasi'];
	$vendor			= $POST['vendor'];
	
	//melakukan query dengan perintah UPDATE untuk memasukkan data ke database
	$connect=mysqli_connect("localhost","root","","rekapsdm");
	$input	= mysqli_query($connect, "UPDATE pelatihan SET id_pelatihan= '$id_pelatihan', nipp = '$nipp', nama_pelatihan = '$nama_pelatihan', id_bidang = '$id_bidang',tanggal_awal = '$tanggal_awal', tanggal_akhir = '$tanggal_akhir', lokasi = '$lokasi', id_klasifikasi = '$id_klasifikasi', klasifikasi = '$klasifikasi', vendor ='$vendor' WHERE  id_pelatihan = '$id_pelatihan'") or die (mysqli_error()) or die (mysqli_error());

	//jika query input sukses
	if ($input) {
		
		echo 'Data berhasil disimpan!';
		echo '<a href="edit.php?id_pelatihan='.$id_pelatihan.'">Kembali</a>';
	
	}else{	
		
		echo "Gagal menyimpan data! ";
		echo '<a href="edit.php?id_pelatihan='.$id_platihan.'">Kembali</a>';
	
	}

}else { //jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>