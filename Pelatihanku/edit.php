<!DOCTYPE html>
<html>
<head>
	<title> 

		</title>
</head>
<body>
	<h2>Diklatku </h2></td>

		<p> <a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
		
		<h3>Edit Data Pegawai</h3>
	<?php  
	include('koneksi.php');

	$id_pegawai = $_GET['id'];

	$connect=mysqli_connect("localhost","root","","rekapsdm");
	$show = mysqli_query($connect, "SELECT * FROM pelatihan WHERE ID_PELATIHAN='$id_pelatihan'");

	if (mysqli_num_rows($show) == 0) {

		echo '<script>window.history.back()</script>';
	} else{

		$data = mysqli_fetch_assoc($show);

	}

	?>


	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id_pelatihan" value="<?php echo $id; ?>">
		<table cellpadding="9" cellspacing="0" border="1">
		<tr>
			<td>ID Pelatihan</td>
			<td>:</td>
			<td><input type="text" name="id_pelatihan" required placeholder=<?php echo $data['ID_PELATIHAN'] ?> /> </td>
		</tr>
		<tr>
			<td>Nama Pelatihan</td>
			<td>:</td>
			<td> <input type="text" name="nama_pelatihan" size="200"> required placeholder=<?php echo $data['NAMA_PELATIHAN'] ?> /> </td>
		</tr>
		<tr>
			<td>ID Bidang</td>
			<td>:</td>
			<td> <input type="text" name="id_bidang" required placeholder=<?php echo $data['ID_BIDANG'] ?>/> </td>
		</tr>
		<tr>
			<td>Tanggal Awal</td>
			<td>:</td>
			<td> <input type="text" name="tanggal_awal" required placeholder=<?php echo $data['TANGGAL_AWAL'] ?>> </td>
		</tr>
		<tr>
			<td>Tanggal Awal</td>
			<td>:</td>
			<td> <input type="text" name="tanggal_akhir" required placeholder=<?php echo $data['TANGGAL_AKHIR'] ?>> </td>
		</tr>
		<tr>
			<td>Lokasi</td>
			<td>:</td>
			<td> <input type="text" name="Lokasi" size="30" required placeholder=<?php echo $data['LOKASI'] ?> /> </td>
		</tr>
		<tr>
			<td>ID Klasifikasi</td>
			<td>:</td>
			<td> <input type="text" name="id_klasifikasi" required placeholder=<?php echo $data['ID_KLASIFIKASI'] ?>/> </td>
		</tr>
		<tr>
			<td>Klasifikasi</td>
			<td>:</td>
			<td> <input type="text" name="klasifikasi" required placeholder=<?php echo $data['KLASIFIKASI'] ?>/> </td>
		</tr>
		<tr>
			<td>Vendor</td>
			<td>:</td>
			<td> <input type="text" name="vendor" required placeholder=<?php echo $data['VENDOR'] ?>> </td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="tambah" value="Ubah"></td>
		</tr>
	</table>
</form>
</body>
</html>
	