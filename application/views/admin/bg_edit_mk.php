<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Form Edit</strong> Mata Kuliah</h1>
        	</div>
        	<div class="tile-body">
				<form method="post" action="<?php echo base_url(); ?>admin/simpan_mk">
					<?php foreach($mk->result_array() as $m) { ?>
					<input type="hidden" name="kd_mk" value="<?php echo $m['kd_mk']; ?>">
					<input type="hidden" name="stts" value="edit">
					<div class="form-group">
						<label for="nama_mk">Nama Mata Kuliah</label>
						<input type="text" name="nama_mk" size="50" class="form-control input-read-only" value="<?php echo $m['nama_mk']; ?>" />
					</div>
					<div class="form-group">
						<label for="jum_sks">Jumlah SKS</label>
						<input type="text" name="jum_sks" size="50" class="form-control input-read-only" value="<?php echo $m['jum_sks']; ?>" />
					</div>
					<div class="form-group">
						<label for="semester">Semester</label>
						<input type="text" name="semester" size="50" class="form-control input-read-only" value="<?php echo $m['semester']; ?>" />
					</div>
					<div class="form-group">
						<label for="prasyarat_mk">Prasyarat Mata Kuliah</label>
						<input type="text" name="prasyarat_mk" size="50" class="form-control input-read-only" value="<?php echo $m['prasyarat_mk']; ?>" />
					</div>
					<div class="form-group">
						<label for="kode_jur">Kode Jurusan</label>
						<input type="text" name="kode_jur" size="50" class="form-control input-read-only" value="<?php echo $m['kode_jur']; ?>" />
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