<?php
 include "koneksi.php";
 ?>
 <<div class="table-responsive">
 		<table class="table table-striped table-hover">
 	<tr>
 				
					<th>NO.</th>
					<th>MATA PELAJARAN</th>

	</tr>
	<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM mata_pelajaran");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM mata_pelajaran");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nama_mapel'].'</td>';
						$no++;
					}
				}
				?>
		</table>
</div>