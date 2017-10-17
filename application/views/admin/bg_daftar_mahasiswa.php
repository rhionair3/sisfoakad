<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Nilai</strong> Mahasiswa</h1>
        	</div>
        	<div class="tile-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>NIM</th>
							<th>Nama Mahasiswa</th>
							<th>Jurusan</th>
							<th>Program Kelas</th>
							<th>Status Persetujuan</th>
							<th>Masukkan Nilai</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no=1;
							foreach($mhs->result_array() as $k)
							{
									$st = "";
									if($k['status']=='1'){ 
										$st = "Sudah Disetujui"; 
										$warna = "#ccc";
										$link = base_url().'edit/detail_krs/'.$k['nim'].'/'.$k['status'];
										$cf = "example_group";
									} 
									echo'<tr>
									<td align="center">'.$no.'</td><td>'.$k['nim'].'</td><td>'.$k['nama_mahasiswa'].'</td><td>'.$k['jurusan'].'</td><td align="center">
									'.$k['kelas_program'].'</td><td align="center">'.$st.'</td>';
						
									echo'<td>
									<a class="link" href="'.base_url().'admin/input_nilai/'.$k['nim'].'" title="Masukkan Nilai - '.$k[
									'nama_mahasiswa'].'">Masukkan Nilai</a></td>
									</tr>';
									$no++;
							}
						?>
					</tbody>
				</table>
				<?php echo $paginator; ?>
        	</div>
        </div>

    </div>
    
</section>
