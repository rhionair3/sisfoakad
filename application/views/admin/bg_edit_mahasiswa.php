<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Form Edit</strong> Mahasiswa</h1>
        	</div>
        	<div class="tile-body">
				<form method="post" action="<?php echo base_url(); ?>admin/simpan_mahasiswa">
					<?php foreach($mahasiswa->result_array() as $m) { ?>
					<input type="hidden" name="nim" value="<?php echo $m['nim']; ?>">
					<input type="hidden" name="stts" value="edit"></td>
					<div class="form-group">
						<label for="nama_mahasiswa">Nama Mahasiswa</label>
						<input type="text" name="nama_mahasiswa" size="50" class="form-control input-read-only" value="<?php echo $m['nama_mahasiswa']; ?>" />
					</div>
					<div class="form-group">
						<label for="angkatan">Angkatan</label>
						<input type="text" name="angkatan" size="50" class="form-control input-read-only" value="<?php echo $m['angkatan']; ?>" />
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<input type="text" name="jurusan" size="50" class="form-control input-read-only" value="<?php echo $m['jurusan']; ?>" />
					</div>
					<div class="form-group">
						<label for="kelas_program">Kelas Program</label>
						<select name="kelas_program" class="form-control input-read-only">
						<?php
							$pagi = '';
							$sore = '';
							if($m['kelas_program']=="pagi")
							{
								$pagi = 'selected="selected"';
								$sore = '';
							}
							else if($m['kelas_program']=="sore")
							{
								$pagi = '';
								$sore = 'selected="selected"';
							}
						?>
						<option value="pagi" <?php echo $pagi; ?>>Pagi</option>
						<option value="sore" <?php echo $sore; ?>>Sore</option>
					</select>
					</div>
					<div class="form-group">
						<label for="kd_dosen">Nama Dosen</label>
						<select name="kd_dosen" class="form-control input-read-only">
						<?php
							foreach($dosen->result_array() as $d)
							{
							$selected = '';
							if($d['kd_dosen']==$m['kd_dosen'])
							{
								$selected = 'selected="selected"';
							}
							?>
							<option value="<?php echo $d['kd_dosen']; ?>" <?php echo $selected; ?>><?php echo $d['kd_dosen'].' - '.$d['nama_dosen']; ?></option>
							<?php
							}
						?>
						</select>
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