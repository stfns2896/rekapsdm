<?php  
//mulai proses tambah data

//cek dahulu, apakah benar URL sudah ada GET id_pegawai -> hapus.php?id=id_pegawai
if (isset($GET['id_pelatihan'])) {
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');

	//mebuat variabel $id_pegawai bernili dari URL GET id_pegawai -> hapus.php?id_pegawai=id_pegawai
	$id_pelatihan		= $GET['id_pelatihan'];

	//cek ke database apakah ada data pegawai dengan id_pegawai='$id_pegawai'
	$connect=mysqli_connect("localhost","root","","rekapsdm");
	$cek	= mysqli_query($connect, "SELECT id_pelatihan from pelatihan WHERE id_ pelatihan='$id_pelatihan'" or die (mysqli_error());

	//jika data pegawai tidak ada
	if (mysqli_query ($cek) == 0) {
		
		//redirect atau dikembalikan ke halaman awal
		echo '<script>window.history.back()</script>';
	
	}else{	
		
		$del = ($connect, "DELETE FROM pelatihan WHERE id_pelatihan=$id_pelatihan");
		
		if($del){
		
		echo "Data berhasil dihapus! ";
		echo '<a href=index.php">Kembali</a>';
	
	}else{	
		
		echo "Gagal menghapus data! ";
		echo '<a href=index.php">Kembali</a>';
	
		}

	}else { 

	//redirect atau dikembalikan ke halaman awal
	echo '<script>window.history.back()</script>';


}
?>