<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input Nilai</title>
	<link rel="shortcut icon" href="img/logo_zihud.jpg">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
	<div class="container">
		<div class="content">
			<h2>Input Nilai Siswa</h2>
			<hr />
			
			<?php

			$id  = $_GET['id'];
			
			$sql = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
			// $hasil   = mysqli_query($conn, $edit)or die(mysql_error());
			$row = mysqli_fetch_array($sql);
			if(isset($_POST['add'])){
				$mata_pelajaran		= $_POST['mata_pelajaran'];
				$kkm				= $_POST['kkm'];
				$nilai_angka		= $_POST['nilai_angka'];
				$huruf				= $_POST['nilaihuruf'];
				$predikat			= $_POST['predikat'];
				$keterangan			= $_POST['keterangan'];
				$deskripsi			= $_POST['deskripsi'];
				$id_siswa			= $_POST['id_siswa'];
		
				$cek = mysqli_query($koneksi, "SELECT * FROM input_nilai WHERE mata_pelajaran='$mata_pelajaran'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($koneksi, "INSERT INTO input_nilai(id, id_siswa, mata_pelajaran, kkm, nilai_angka, nilai_huruf, predikat, keterangan, deskripsi)
															VALUES('', '$id_siswa', '$mata_pelajaran', '$kkm', '$nilai_angka', '$huruf', '$predikat', '$keterangan', '$deskripsi')") or die(mysqli_error($koneksi));
												}
											}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<input type="hidden" name="id_siswa" value="<?php echo $row['id']; ?>">
				<div class="form-group">
					<label class="col-sm-3 control-label">NISN</label>
						<div class="col-sm-2">
							<input type="text" name="nisn" class="form-control" value="<?php echo $row['nisn']; ?>" placeholder="NISN" disabled>
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
					<label class="col-sm-3 control-label">KKM</label>
					<div class="col-sm-2">
						<input type="text" name="kkm" class="form-control" placeholder="KKM">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI</label>
					<div class="col-sm-2">
						<input type="text" name="nilai_angka" class="form-control" placeholder="NILAI">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NILAI HURUF</label>
					<div class="col-sm-3">
						<input type="text" name="nilaihuruf" class="form-control" placeholder="NILAI HURUF">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PREDIKAT</label>
					<div class="col-sm-2">
						<select name="predikat" class="form-control">
							<option value="">PREDIKAT</option>
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
							<option value="d">D</option>
							<option value="e">E</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
					<div class="col-sm-3">
						<select name="keterangan" class="form-control">
							<option value="">KETERANGAN</option>
							<option value="Terlampaui">TERLAMPAUI</option>
							<option value="Tidak Terlampaui">TIDAK TERLAMPAUI</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">DESKRIPSI</label>
					<div class="col-sm-6">
						<textarea name="deskripsi" class="form-control" placeholder="DESKRIPSI"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="INPUT">
						<a href="index.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>