<?php

if (isset($_POST["bidang"])) { 
	include ('Diklatku/koneksi.php');

			$connect=mysqli_connect("localhost","root","","rekapsdm");

			$return_arr = array();

			$query = mysqli_query($connect, "SELECT * FROM diklat ORDER BY BIDANG") or die (mysqli_error());

	if ($_POST["bidang"] == "SDM" ) {
		$id_bidang = 'B001';	
	}
	if ($_POST["bidang"] == "HSSE" ) {
		$id_bidang = 'B002';
	}
	if ($_POST["bidang"] == "BIRO PERENCANAAN" ) {
		$id_bidang = 'B003';
	}
	if ($_POST["bidang"] == "CHANGE MANAGEMENT" ) {
		$id_bidang = 'B004';
	}
	if ($_POST["bidang"] == "OPERASIONAL" ) {
		$id_bidang = 'B005';
	}
	if ($_POST["bidang"] == "SEKPER" ) {
		$id_bidang = 'B006';
	}
	if ($_POST["bidang"] == "PJUM" ) {
		$id_bidang = 'B007';
	}
	if ($_POST["bidang"] == "HCM" ) {
		$id_bidang = 'B008';
	}
	if ($_POST["bidang"] == "FI" ) {
		$id_bidang = 'B009';
	}
	if ($_POST["bidang"] == "CO" ) {
		$id_bidang = 'B010';
	}
	if ($_POST["bidang"] == "PBJ" ) {
		$id_bidang = 'B011';
	}
	if ($_POST["bidang"] == "SPPI" ) {
		$id_bidang = 'B012';
	}
	if ($_POST["bidang"] == "SPI" ) {
		$id_bidang = 'B013';
	}
	if ($_POST["bidang"] == "PM" ) {
		$id_bidang = 'B014';
	}
	if ($_POST["bidang"] == "MARKETING" ) {
		$id_bidang = 'B015';
	}
	if ($_POST["bidang"] == "KEUANGAN" ) {
		$id_bidang = 'B016';
	}
	if ($_POST["bidang"] == "SMMR" ) {
		$id_bidang = 'B017';
	}
	if ($_POST["bidang"] == "HUKUM / LEGAL" ) {
		$id_bidang = 'B018';
	}

	if ($_POST["bidang"] == "TEKNIK" ) {
		$id_bidang = 'B019';
	}
	
	include ('Diklatku/koneksi.php');

			$connect=mysqli_connect("localhost","root","","rekapsdm");

			$return_arr = array();

			$query = mysqli_query($connect, "SELECT * FROM PELATIHAN JOIN BIDANG ON pelatihan.`ID_BIDANG`= bidang.`ID_BIDANG` 
				WHERE pelatihan.`ID_BIDANG`='$id_bidang'") or die (mysqli_error());
			while ($row = mysqli_fetch_assoc($query)) {
				    $row_array['ID_PELATIHAN'] = $row['ID_PELATIHAN'];
				    $row_array['NAMA_PELATIHAN'] = $row['NAMA_PELATIHAN'];
				    $row_array['ID_BIDANG'] = $row['ID_BIDANG'];
				    $row_array['TANGGAL_AWAL'] = $row['TANGGAL_AWAL'];
				    $row_array['TANGGAL_AKHIR'] = $row['TANGGAL_AKHIR'];
				    $row_array['KLASIFIKASI'] = $row['KLASIFIKASI'];
				    $row_array['VENDOR'] = $row['VENDOR'];
				    $row_array['DURASI'] = $row['DURASI'];
				    $row_array['BIDANG'] = $row['BIDANG'];				    
				    array_push($return_arr,$row_array);
				}

				echo json_encode($return_arr);
				
				
}

	if(isset($_POST ["menu"])){
		if ($_POST["menu"] == "Diklatku") {
	
	include ('Diklatku/koneksi.php');

			$connect=mysqli_connect("localhost","root","","rekapsdm");
			//query ke database dengan SELECT table Pegawai diurutkan berdasarkan ID_Pegawai Paling Kecil
			$return_arr = array();

			$query = mysqli_query($connect, "SELECT * FROM diklat ORDER BY ID_PEGAWAI ASC") or die (mysqli_error());
			while ($row = mysqli_fetch_assoc($query)) {
				    $row_array['ID_PEGAWAI'] = $row['ID_PEGAWAI'];
				    $row_array['ID_PELATIHAN'] = $row['ID_PELATIHAN'];
				    $row_array['BIDANG'] = $row['BIDANG'];
				    $row_array['NIPP'] = $row['NIPP'];
				    $row_array['NAMA_PEGAWAI'] = $row['NAMA_PEGAWAI'];
				    $row_array['LOKASI_PEGAWAI'] = $row['LOKASI_PEGAWAI'];
				    $row_array['SUBSTANSI'] = $row['SUBSTANSI'];
				    $row_array['KELAS_JABATAN'] = $row['KELAS_JABATAN'];
				    $row_array['JENIS_KELAMIN'] = $row['JENIS_KELAMIN'];
				    $row_array['DURASI'] = $row['DURASI'];
				    array_push($return_arr,$row_array);
				}

				echo json_encode($return_arr);
			}
		if ($_POST["menu"] == "Pegawaiku") {
	
	include ('Pegawaiku/koneksi.php');

			$connect=mysqli_connect("localhost","root","","rekapsdm");
			//query ke database dengan SELECT table Pegawai diurutkan berdasarkan ID_Pegawai Paling Kecil
			$return_arr = array();

			$query = mysqli_query($connect, "SELECT * FROM pegawai ORDER BY ID_PEGAWAI ASC") or die (mysqli_error());
			while ($row = mysqli_fetch_assoc($query)) {
				    $row_array['ID_PEGAWAI'] = $row['ID_PEGAWAI'];
				    $row_array['NIPP'] = $row['NIPP'];
				    $row_array['NAMA_PEGAWAI'] = $row['NAMA_PEGAWAI'];
				    $row_array['LOKASI_PEGAWAI'] = $row['LOKASI_PEGAWAI'];
				    $row_array['SUBSTANSI'] = $row['SUBSTANSI'];
				    $row_array['KELAS_JABATAN'] = $row['KELAS_JABATAN'];
				    $row_array['JENIS_KELAMIN'] = $row['JENIS_KELAMIN'];
				    array_push($return_arr,$row_array);
				}

				echo json_encode($return_arr);
			}
		if ($_POST["menu"] == "Pelatihanku") {
	
	include ('Pelatihanku/koneksi.php');

			$connect=mysqli_connect("localhost","root","","rekapsdm");
			//query ke database dengan SELECT table Pegawai diurutkan berdasarkan ID_Pegawai Paling Kecil
			$return_arr = array();

			$query = mysqli_query($connect, "SELECT * FROM pelatihan ORDER BY ID_PELATIHAN ASC") or die (mysqli_error());
			while ($row = mysqli_fetch_assoc($query)) {
				    $row_array['ID_PELATIHAN'] = $row['ID_PELATIHAN'];
				    $row_array['NAMA_PELATIHAN'] = $row['NAMA_PELATIHAN'];
				    $row_array['ID_BIDANG'] = $row['ID_BIDANG'];
				    $row_array['TANGGAL_AWAL'] = $row['TANGGAL_AWAL'];
				    $row_array['TANGGAL_AKHIR'] = $row['TANGGAL_AKHIR'];
				    $row_array['LOKASI'] = $row['LOKASI'];
				    // $row_array['ID_KLASIFIKASI'] = $row['ID_KLASIFIKASI'];
				    $row_array['KLASIFIKASI'] = $row['KLASIFIKASI'];
				    $row_array['VENDOR'] = $row['VENDOR'];
				    $row_array['DURASI'] = $row['DURASI'];
				    array_push($return_arr,$row_array);
				}

				echo json_encode($return_arr);
			}

		}

	?>