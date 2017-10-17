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
				<form method="post" action="<?php echo base_url(); ?>admin/simpan_dosen">
					<?php foreach($dosen->result_array() as $d) { ?>
					<input type="hidden" name="kd_dosen" value="<?php echo $d['kd_dosen']; ?>">
					<input type="hidden" name="stts" value="edit"></td>
					<div class="form-group">
						<label for="">NIDN</label>
						<input type="text" name="nidn" class="form-control" value="<?php echo $d['nidn']; ?>"/>
					</div>
					<div class="form-group">
						<label for="">NIDN</label>
						<input type="text" name="nama_dosen" class="form-control" value="<?php echo $d['nama_dosen']; ?>"/>
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