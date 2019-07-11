<?php  
//mulai proses tambah data

//cek dahulu, jika tombol simpan di klik
if (isset($POST['simpan'])) {
	
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
	
	//melakukan query dengan perintah UPDATE untuk memasukkan data ke database
	$connect=mysqli_connect("localhost","root","","rekapsdm");
	$input	= mysqli_query($connect, "UPDATE diklat SET id_pelatihan= '$id_pelatihan', nipp = '$nipp', nama_pegawai = '$nama_pegawai', lokasi_pegawai = '$lokasi_pegawai', substansi = '$substansi', kelas_jabatan = '$kelas_jabatan', jenis_kelamin = '$jenis_kelamin', durasi = '$durasi' WHERE  id_pegawai = '$id_pegawai'") or die (mysqli_error()) or die (mysqli_error());

	//jika query input sukses
	if ($input) {
		
		echo 'Data berhasil disimpan!';
		echo '<a href="edit.php?id_pegawai='.$id_pegawai.'">Kembali</a>';
	
	}else{	
		
		echo "Gagal menyimpan data! ";
		echo '<a href="edit.php?id_pegawai='.$id_pegawai.'">Kembali</a>';
	
	}

}else { //jika tidak terdeteksi tombol tambah di klik

	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';

}
?>