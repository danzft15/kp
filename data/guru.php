<?php
 include "koneksi.php";
 ?>
 <<div class="table-responsive">
				<a href="tambah_guru.php" class="btn btn-info btn-lg">
          			<span class="glyphicon glyphicon-plus"></span> Tambah Data 
          		</a>

 		<table class="table table-striped table-hover">
 	<tr>
 				
					<th><center>NO.</th>
					<th><center>NUPTK</th>
					<th><center>NIP</th>
					<th><center>NAMA LENGKAP</th>
					<th><center>TEMPAT LAHIR</th>
					<th><center>TANGGAL LAHIR</th>
					<th><center>JENIS KELAMIN</th>
					<th><center>ALAMAT</th>
					<th><center>STATUS PEGAWAI</th>
					<th><center>MATA PELAJARAN</th>
					<th><center>STATUS GURU</th>

	</tr>
	<?php $urut = (isset($_GET['urut']) ? strtolower($_GET['urut']) : NULL);  ?>
				<?php
				if($urut){
					$sql = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY nuptk ASC");
				}else{
					$sql = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY nuptk ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$row['nuptk'].'</td>
							<td>'.$row['nip'].'</td>
							<td>'.$row['nama_lengkap'].'</td>
							<td>'.$row['tempat_lahir'].'</td>
							<td>'.$row['tanggal_lahir'].'</td>
							<td>'.$row['jenis_kelamin'].'</td>
							<td>'.$row['alamat'].'</td>
							<td>'.$row['status_pegawai'].'</td>
							<td>'.$row['mata_pelajaran'].'</td>
							<td>'.$row['status'].'</td>
							<td>';

						echo '
							</td>
							<td>
								<a href="edit_guru.php?nuptk='.$row['nuptk'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
								<a href="hapus_guru.php?aksi=delete&nuptk='.$row['nuptk'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
		</table>
</div>