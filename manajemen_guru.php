<?php
 include "koneksi.php";
 ?>
 <<div class="table-responsive">
 <a href="tambah_akses.php" class="btn btn-info btn-lg">
          			<span class="glyphicon glyphicon-plus"></span> Tambah Data 
          		</a>
 		<table class="table table-striped table-hover">
 	<tr>
 				
					<th><center>NO.</th>
					<th><center>USERNAME</th>
					<th><center>PASSWORD</th>
					<th><center>KETERANGAN</th>
					<th><center>AKSI</th>

	</tr>
	<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM login ORDER BY username ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM login ORDER BY username ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td><center>'.$no.'</td>
							<td><center>'.$row['username'].'</td>
							<td><center>'.$row['password'].'</td>
							<td><center>'.$row['keterangan'].'</td>
							<td><center> </td>
						';
						$no++;
					}
				}
				?>
		</table>
</div>