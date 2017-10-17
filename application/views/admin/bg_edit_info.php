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
				<form method="post" action="<?php echo base_url(); ?>admin/simpan_info">
					<?php foreach($info->result_array() as $i) { ?>				
					<input type="hidden" name="kd_info" value="<?php echo $i['kd_info']; ?>">
					<input type="hidden" name="stts" value="edit"></td>
					<div class="form-group">
						<label for="">JUDUL</label>
						<input type="text" name="judul" class="form-control" value="<?php echo $i['judul']; ?>"/>
					</div>
					<div class="form-group">
						<label for="">NIDN</label>
						<textarea name="isi" class="input-read-only" class="form-control" rows="12"><?php echo $i['isi']; ?></textarea>
					</div>
					<div class="row">
						<div class="col-lg-6"><button type="submit" class="btn btn-info btn-block btn-sm btn-kirim">SIMPAN DATA</button></div>
						<div class="col-lg-6"><button type="reset" class="btn btn-default btn-block btn-sm btn-kirim">BATAL</button></div>
					</div>
					<?php } ?>
				</form>
        	</div>
        </div>

    </div>
    
</section>