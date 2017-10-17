<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Daftar Dosen </strong>- Sistem Informasi Akademik Online</h1>
        	</div>
        	<div class="tile-body">
				<table border="1" width="100%" style="border-collapse: collapse; font-size:12px;" cellpadding="5">

					<td colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong>DAFTAR DOSEN DAN MATA KULIAH YANG DIPEGANG</strong></td>
					</tr>
					<tr>
					<td align="center">Kode MK</td>
					<td align="center">Nama MK</td>
					<td align="center">Kode Dosen</td>	
					<td align="center">Nama Dosen</td>	
					<td align="center">Jadwal</td>
					</tr>
					
					<?php
						foreach($mk_dosen->result_array() as $d)
						{
						?>
							<tr>
							<td align="center"><?php echo $d['kd_mk']; ?></td>	
							<td align="center"><?php echo $d['nama_mk']; ?></td>
							<td align="center"><?php echo $d['kd_dosen']; ?></td>
							<td align="center"><?php echo $d['nama_dosen']; ?></td>
							<td align="center"><?php echo $d['jadwal']; ?></td>	
							</tr>
						<?php
						}
					?>
				
				</table>
        	</div>
        </div>

    </div>
    
</section>
