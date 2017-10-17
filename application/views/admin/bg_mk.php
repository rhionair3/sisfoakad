<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Daftar Mata Kuliah </strong>- Sistem Informasi Akademik Online</h1>
        	</div>
        	<div class="tile-body">
				<table border="1" width="100%" style="border-collapse: collapse; font-size:12px;" cellpadding="5">

					<td colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;"><strong>DAFTAR MATA KULIAH</strong></td>
					</tr>
					<tr>
					<td align="center">Kode MK</td>
					<td align="center">Nama MK</td>
					<td align="center">Jumlah SKS</td>
					<td align="center">Semester</td>	
					<td align="center">Jurusan</td>	
					<td align="center" colspan="3" width="50">
					<?php
						echo '<a href="'.base_url().'admin/tambah_mk" rel="example_group" class="link" style="float:left;">Tambah Mata Kuliah</a>';
					?>
					</td>
					</tr>
					
					<?php
						foreach($mk->result_array() as $d)
						{
						?>
							<tr>
							<td align="center"><?php echo $d['kd_mk']; ?></td>
							<td align="center"><?php echo $d['nama_mk']; ?></td>
							<td align="center"><?php echo $d['jum_sks']; ?></td>
							<td align="center"><?php echo $d['semester']; ?></td>
							<td align="center"><?php echo $d['kode_jur']; ?></td>	
							<?php 
							echo '<td align="center" width="10"><a href="'.base_url().'admin/mk_dosen/'.$d['kd_mk'].'" class="link" style="float:left;">Dosen</a></td>
							<td align="center" width="10"><a href="'.base_url().'admin/edit_mk/'.$d['kd_mk'].'" rel="example_group" class="link" 
							style="float:left;">Edit</a>
							</td>
							<td align="center" width="10">
							<a href="'.base_url().'admin/hapus_mk/'.$d['kd_mk'].'"
							onClick=\'return confirm("Anda yakin...??")\' class="link" style="float:left;">Hapus</a>
							</td>';
							?>
							</tr>
						<?php
						}
					?>
					
					</table>
        	</div>
        </div>

    </div>
    
</section>
