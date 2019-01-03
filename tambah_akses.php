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
			<h2>Manajemen User</h2>
			<hr />
			
			<?php

			if(isset($_POST['add'])){
				$username					= $_POST['username'];
				$password					= md5($_POST['password']);
				$level						= $_POST['level'];
				$keterangan					= $_POST['keterangan'];
		
			include 'koneksi.php';

			$insert = mysqli_query($koneksi, "INSERT INTO login(id, username, password, level, keterangan)
															VALUES('', '$username', '$password', '$level', '$keterangan')") or die(mysqli_error($koneksi));
												
											}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">USERNAME</label>
					<div class="col-sm-3">
						<input type="username" class="form-control" name="username" placeholder="USERNAME">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">PASSWORD</label>
						<div class="col-sm-3">
							<input type="password" name="password" class="form-control" placeholder="PASSWORD">
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">LEVEL</label>
						<div class="col-sm-3">
							<select name="level" class="form-control">
							<option value="">LEVEL</option>
							<option value="5">Wali Kelas 7</option>
							<option value="3">Wali Kelas 8</option>
							<option value="4">Wali Kelas 9</option>
						</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">KETERANGAN</label>
						<div class="col-sm-3">
							<select name="keterangan" class="form-control">
							<option value="keterangan">KETERANGAN</option>
							<option value="a">A</option>
							<option value="b">B</option>
							<option value="c">C</option>
						</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-primary" value="TAMBAH">
						<a href="halaman_admin.php" class="btn btn-warning">BATAL</a>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
