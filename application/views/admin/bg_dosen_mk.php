<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Mata Kuliah</strong> Dosen</h1>
        	</div>
        	<div class="tile-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Kode Dosen</th>
							<th>Nama Dosen</th>
							<th>Kode MK</th>
							<th>Nama MK</th>
							<th>Jadwal</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($dosen_mk->result_array() as $d)
							{
							?>
								<tr>
								<td align="center"><?php echo $d['kd_dosen']; ?></td>
								<td align="center"><?php echo $d['nama_dosen']; ?></td>
								<td align="center"><?php echo $d['kd_mk']; ?></td>	
								<td align="center"><?php echo $d['nama_mk']; ?></td>
								<td align="center"><?php echo $d['jadwal']; ?></td>	
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
