<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Daftar</strong> Dosen</h1>
        	</div>
        	<div class="tile-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Kode Dosen</th>
							<th>NIDN</th>
							<th>Nama Dosen</th>
							<th colspan="3">
								<?php
									echo '<a href="'.base_url().'admin/tambah_dosen" rel="example_group" class="link" style="float:left;">Tambah Dosen</a>';
								?>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($dosen->result_array() as $d)
							{
							?>
								<tr>
								<td align="center"><?php echo $d['kd_dosen']; ?></td>
								<td align="center"><?php echo $d['nidn']; ?></td>
								<td align="center"><?php echo $d['nama_dosen']; ?></td>	
								<?php 
								echo '<td align="center" width="10"><a href="'.base_url().'admin/dosen_mk/'.$d['kd_dosen'].'" class="link" style="float:left;">MK</a></td>
								<td align="center" width="10"><a href="'.base_url().'admin/edit_dosen/'.$d['kd_dosen'].'" rel="example_group" class="link" 
								style="float:left;">Edit</a>
								</td>
								<td align="center" width="10">
								<a href="'.base_url().'admin/hapus_dosen/'.$d['kd_dosen'].'"
								onClick=\'return confirm("Anda yakin...??")\' class="link" style="float:left;">Hapus</a>
								</td>';
								?>
								</tr>
							<?php
							}
						?>
					</tbody>
				</table>
        	</div>
        </div>

    </div>
    
</section>
