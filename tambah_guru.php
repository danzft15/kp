<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mts.Ziyadatul Huda</title>
  <link rel="shortcut icon" href="img/logo_zihud.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
		<div class="content">
			<h2>Tambah Data Guru</h2>
			<hr />
			
			<?php
			if(isset($_POST['add'])){
				$nuptk					= $_POST['nuptk'];
				$nip					= $_POST['nip'];
				$nama_lengkap			= $_POST['nama_lengkap'];
				$tempat_lahir			= $_POST['tempat_lahir'];
				$tanggal_lahir			= $_POST['tanggal_lahir'];
				$jenis_kelamin			= $_POST['jenis_kelamin'];
				$alamat					= $_POST['alamat'];
				$status_pegawai			= $_POST['status_pegawai'];
				$mata_pelajaran			= $_POST['mata_pelajaran'];
				$status					= $_POST['status'];
		
				$cek = mysqli_query($koneksi, "SELECT * FROM guru");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO guru(id, nuptk, nip, nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, status_pegawai, mata_pelajaran, status)
															VALUES('', '$nuptk', '$nip', '$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat', '$status_pegawai', '$mata_pelajaran', '$status')") or die(mysqli_error($koneksi));
												}
											}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">NUPTK</label>
						<div class="col-sm-3">
							<input type="text" name="nuptk" class="form-control" placeholder="NUPTK">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIP</label>
						<div class="col-sm-3">
							<input type="text" name="nip" class="form-control" placeholder="NIP">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NAMA LENGKAP</label>
						<div class="col-sm-3">
							<input type="text" name="nama_lengkap" class="form-control" placeholder="NAMA LENGKAP">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TEMPAT LAHIR</label>
						<div class="col-sm-3">
							<input type="text" name="tempat_lahir" class="form-control" placeholder="TEMPAT LAHIR">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">TANGGAL LAHIR</label>
						<div class="col-sm-3">
							<input type="text" name="tanggal_lahir" class="form-control" placeholder="TANGGAL LAHIR">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">JENIS KELAMIN</label>
					<div class="col-sm-2">
						<select name="jenis_kelamin" class="form-control">
							<option value="">JENIS KELAMIN</option>
							<option value="laki-laki">LAKI - LAKI</option>
							<option value="perempuan">PEREMPUAN</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">ALAMAT</label>
					<div class="col-sm-6">
						<textarea name="alamat" class="form-control" placeholder="ALAMAT"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS PEGAWAI</label>
					<div class="col-sm-3">
						<select name="status_pegawai" class="form-control">
							<option value="">STATUS PEGAWAI</option>
							<option value="laki-laki">PNS</option>
							<option value="perempuan">NON-PNS</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">MATA PELAJARAN</label>
					<div class="col-sm-3">
						<select name="mata_pelajaran" class="form-control" required>
							<option value="">MATA PELAJARAN</option>
							<option value="pai">Pendidikan Agama Islam (PAI)</option>
							<option value="bindo">Bahasa Indonesia</option>
							<option value="binggris">Bahasa Inggris</option>
							<option value="barab">Bahasa Arab</option>
							<option value="matematika">Matematika</option>
							<option value="ipa">Ilmu Pengetahuan Alam (IPA)</option>
							<option value="ips">Ilmpu Pengetahuan Sosial (IPS)</option>
							<option value="aqidah">Aqidah Akhlak</option>
							<option value="fiqih">Fiqih</option>
							<option value="qurdis">Al Qur'an Hadist</option>
							<option value="ski">Sejarah Kebudayaan Islam</option>
							<option value="senibudaya">Seni Budaya</option>
							<option value="penjaskes">Penjaskes</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">STATUS</label>
					<div class="col-sm-2">
						<select name="status" class="form-control">
							<option value="">STATUS</option>
							<option value="laki-laki">AKTIF</option>
							<option value="perempuan">TIDAK AKTIF</option>
						</select>
					</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="halaman_admin.php?page=guru" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
