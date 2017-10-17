<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Info Kampus </strong>- - Sistem Informasi Akademik Online</h1>
        	</div>
        	<div class="tile-body">
				<a href="<?php echo base_url(); ?>admin/tambah_info/" rel="example_group" class="link" style="float:left;">Tambah Info</a>
				<?php
					foreach($info->result_array() as $i)
					{
						?>
						<table border="0" cellpadding="5" cellspacing="0" width="100%">
							<tr>
								<td>
									<h5><?php echo nama_hari($i['waktu_post']).', '.tgl_indo($i['waktu_post']); ?></h5>
									<h4><?php echo $i['judul']; ?></h4>
									<?php echo $i['isi']; ?>
								</td>
							</tr>
							<tr>
								<td>
								<?php
								echo '<a href="'.base_url().'admin/edit_info/'.$i['kd_info'].'" rel="example_group" class="link" style="float:left;">Edit</a>
									<a href="'.base_url().'admin/hapus_info/'.$i['kd_info'].'"
									onClick=\'return confirm("Anda yakin...??")\' class="link" style="float:left;">Hapus</a>';
								?>
									<div class="line-dot"></div>
								</td>
							</tr>
						</table>
						<?php
					}
					echo $paginator;
				?>
        	</div>
        </div>

    </div>
    
</section>