<!DOCTYPE html>
<html>
<head>
	<title> 

		</title>
</head>
<body>
	<h2> Data Pelatihan </h2></td>

		<p> <a href="../index.php">Beranda</a> </p>
		
		<h3>Edit Data Pegawai</h3>
	<?php  
	include('koneksi.php');

	$id_pegawai = $_GET['id'];

	$connect=mysqli_connect("localhost","root","","rekapsdm");
	$show = mysqli_query($connect, "SELECT * FROM pegawai WHERE ID_PEGAwAI='$id_pegawai'");

	if (mysqli_num_rows($show) == 0) {

		echo '<script>window.history.back()</script>';
	} else{

		$data = mysqli_fetch_assoc($show);

	}

	?>


	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id_pegawai" value="<?php echo $id; ?>">
		<table cellpadding="7" cellspacing="0" border="1">
		<tr>
			<td>ID Pegawai</td>
			<td>:</td>
			<td><input type="text" name="id_pegawai" required placeholder=<?php echo $data['ID_PEGAWAI'] ?> /> </td>
		</tr>
		<tr>
			<td>NIPP</td>
			<td>:</td>
			<td> <input type="text" name="nipp" required placeholder=<?php echo $data['NIPP'] ?> /> </td>
		</tr>
		<tr>
			<td>Nama Pegawai</td>
			<td>:</td>
			<td> <input type="text" name="nama_pegawai" size="40" required placeholder=<?php echo $data['NAMA_PEGAWAI'] ?> /> </td>
		</tr>
		<tr>
			<td>Lokasi Pegawai</td>
			<td>:</td>
			<td> <input type="text" name="lokasi_pegawai" size="20" required placeholder=<?php echo $data['LOKASI_PEGAWAI'] ?>/> </td>
		</tr>
		<tr>
			<td>Substansi</td>
			<td>:</td>
			<td> <input type="text" name="substansi" size="30" required placeholder=<?php echo $data['SUBSTANSI'] ?> /> </td>
		</tr>
		<tr>
			<td>Kelas Jabatan</td>
			<td>:</td>
			<td> <select name="kelas_jabatan" required placeholder=<?php echo $data['KELAS_JABATAN'] ?> >
					<option value="">Pilih Kelas Jabatan</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
				</select>  
			</td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td> <select name="jenis_kelamin" required placeholder=<?php echo $data['JENIS_KELAMIN'] ?>>
					<option value="">Pilih Jenis Kelamin</option>
					<option value="L">L</option>
					<option value="P">P</option>
				</select>  
			</td>
		</tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="tambah" value="Ubah"></td>
		</tr>
	</table>
</form>
</body>
</html>
	