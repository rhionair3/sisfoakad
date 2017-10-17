<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Jadwal Kuliah</strong> Dosen</h1>
        	</div>
        	<div class="tile-body">
				<form method="post" action="<?php echo base_url(); ?>admin/simpan_jadwal">
					<?php foreach($edit->result_array() as $e) {
						$jdw = explode(" / ",$e['jadwal']);
						$jam = explode("-",$jdw[1]);
					?>
					<input type="hidden" name="kd_jadwal" value="<?php echo $e['kd_jadwal']; ?>">
					<input type="hidden" name="stts" value="edit"></td>
					<div class="form-group">
						<label for="">Mata Kuliah</label>
						<select name="kd_mk" class="form-control input-read-only">
							<?php
								foreach($mata_kuliah->result_array() as $mk)
								{
									$pilih = '';
									if($e['kd_mk']==$mk['kd_mk']) $pilih="selected='selected'";
							?>
							<option value="<?php echo $mk['kd_mk']; ?>" <?php echo $pilih; ?>><?php echo $mk['kd_mk']." - ".$mk['nama_mk']; ?></option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Hari</label>
						<select name="hari" class="form-control input-read-only">
						<?php
							if($jdw[0]=="Senin")
							{
								$senin="selected='selected'"; $selasa=""; $rabu=""; $kamis=""; $jumat="";
							}
							else if($jdw[0]=="Selasa")
							{
								$senin=""; $selasa="selected='selected'"; $rabu=""; $kamis=""; $jumat="";
							}
							else if($jdw[0]=="Rabu")
							{
								$senin=""; $selasa=""; $rabu="selected='selected'"; $kamis=""; $jumat="";
							}
							else if($jdw[0]=="Kamis")
							{
								$senin=""; $selasa=""; $rabu=""; $kamis="selected='selected'"; $jumat="";
							}
							else if($jdw[0]=="Jumat")
							{
								$senin=""; $selasa=""; $rabu=""; $kamis=""; $jumat="selected='selected'";
							}
						?>
							<option value="Senin" <?php echo $senin; ?>>Senin</option>
							<option value="Selasa" <?php echo $selasa; ?>>Selasa</option>
							<option value="Rabu" <?php echo $rabu; ?>>Rabu</option>
							<option value="Kamis" <?php echo $kamis; ?>>Kamis</option>
							<option value="Jumat" <?php echo $jumat; ?>>Jumat</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jam_mulai">Jam Mulai</label>
						<input type="text" name="jam_mulai" size="50" class="form-control input-read-only" value="<?php echo $jam[0]; ?>" />
					</div>
					<div class="form-group">
						<label for="jam_akhir">Jam Mulai</label>
						<input type="text" name="jam_akhir" size="50" class="form-control input-read-only" value="<?php echo $jam[1]; ?>" />
					</div>
					<div class="form-group">
						<label for="ruang">Ruangan</label>
						<input type="text" name="ruang" size="50" class="form-control input-read-only" value="<?php echo $jdw[2]; ?>" />
					</div>
					<div class="form-group">
						<label for="kd_tahun">Tahun Ajaran</label>
						<select name="kd_tahun" class="form-control input-read-only">
							<?php
								foreach($tahun_ajaran->result_array() as $ta)
								{
									$pilih = '';
									if($e['kd_tahun']==$ta['kd_tahun']) $pilih="selected";
							?>
							<option value="<?php echo $ta['kd_tahun']; ?>" <?php echo $pilih; ?>><?php echo $ta['keterangan']; ?></option>
							<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="kelas_program">Kelas Program</label>
						<select name="kelas_program" class="form-control input-read-only">
							<?php
								if($e['kelas_program']=="pagi")
								{
									?>
									<option value="pagi" selected>Pagi</option>
									<option value="sore">Sore</option>
									<?php
								}
								else if($e['kelas_program']=="sore")
								{
									?>
									<option value="pagi">Pagi</option>
									<option value="sore" selected>Sore</option>
									<?php
								}
							?>
							</select>
					</div>
					<div class="form-group">
						<label for="kelas">kelas</label>
						<input type="text" name="kelas" size="50" class="form-control input-read-only" value="<?php echo $e['kelas']; ?>" />
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