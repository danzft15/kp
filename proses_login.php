<?php
	
	include "koneksi.php";
	
	$username  = $_POST["username"];
	// encrypt password dengan md5 password
	$password  = md5($_POST["password"]);

	$query     ="SELECT * FROM login WHERE username='$username' AND password='$password'";
	$login     = mysqli_query($koneksi,$query)or die(mysqli_error($koneksi));
	$jlhrecord = mysqli_num_rows($login);
	$data      = mysqli_fetch_array($login,MYSQLI_BOTH);
	$username  = $data['username'];
	$level     = $data['level'];
	if ($jlhrecord > 0){

		if($level==0) {
			// jika Username dan password ada didalam database daftarkan session
			session_start();
			$_SESSION['username']  = $username;
			$_SESSION['level']     = $level;
			$_SESSION['id']        = session_id();
			
			header('location: halaman_admin.php');
		}
		elseif ($level==1) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: halaman_siswa.php');
		}
		elseif ($level==2) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: halaman_wali_murid.php');
		}  

		elseif ($level==3) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: halaman_wali_kelas_8.php');
		}

		elseif ($level==4) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: halaman_wali_kelas_9.php');
		} 

		elseif ($level==5) {
		 	// jika Username dan password ada didalam database daftarkan session
		 	session_start();
		 	$_SESSION['username']  = $username;
		 	$_SESSION['level']     = $level;
		 	$_SESSION['id']        = session_id();
		 	
		 	header('location: halaman_wali_kelas_7.php');
		} 
 
	}
	else{
		// echo $data;
		//header("location:index.php");
		print"
			<script>
				alert(\"Username atau Password Anda Salah!\");
				history.back(-1);
			</script>";
	} 
?>