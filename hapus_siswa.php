<?php
include ("koneksi.php");

$nisn=$_GET['nisn'];
$hapus=mysqli_query($koneksi,"delete from siswa where nisn='$nisn'");
?>