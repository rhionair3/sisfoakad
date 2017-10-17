<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Form Tambah </strong> Jadwal</h1>
        	</div>
        	<div class="tile-body">
				<form method="post" action="<?php echo base_url(); ?>admin/simpan_jadwal">
					<input type="hidden" name="stts" value="tambah"></td>
					<div class="form-group">
						<label for="">Mata Kuliah</label>
						<select name="kd_mk" class="form-control input-read-only">
							<?php
								foreach($mata_kuliah->result_array() as $mk)
								{
									?>
									<option value="<?php echo $mk['kd_mk']; ?>"><?php echo $mk['kd_mk']." - ".$mk['nama_mk']; ?></option>
									<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Nama Dosen</label>
						<select name="kd_dosen" class="form-control input-read-only">
							<?php
								foreach($dosen->result_array() as $d)
								{
									?>
									<option value="<?php echo $d['kd_dosen']; ?>"><?php echo $d['kd_dosen']." - ".$d['nama_dosen']; ?></option>
									<?php
								}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Hari</label>
						<select name="hari" class="form-control input-read-only">
							<option value="Senin">Senin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Kamis">Kamis</option>
							<option value="Jumat">Jumat</option>
						</select>
					</div>
					<div class="form-group">
						<label for="jam_mulai">Jam Mulai</label>
						<input type="text" name="jam_mulai" class="form-control input-read-only" value="" />
					</div>
					<div class="form-group">
						<label for="jam_akhir">Jam Mulai</label>
						<input type="text" name="jam_akhir" class="form-control input-read-only" value="" />
					</div>
					<div class="form-group">
						<label for="ruang">Ruangan</label>
						<input type="text" name="ruang" class="form-control input-read-only" value="" />
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
						<label for="kapasitas">Kapasitas Kelas</label>
						<input type="text" name="kapasitas" size="50" class="form-control input-read-only" />
					</div>
					<div class="form-group">
						<label for="kelas_program">Kelas Program</label>
						<select name="kelas_program" class="form-control input-read-only">
							<option value="pagi">Pagi</option>
							<option value="sore">Sore</option>
						</select>
					</div>
					<div class="form-group">
						<label for="kelas">kelas</label>
						<input type="text" name="kelas" size="50" class="form-control input-read-only" value="" />
					</div>
					<div class="row">
						<div class="col-lg-6"><button type="submit" class="btn btn-info btn-block btn-sm btn-kirim">SIMPAN DATA</button></div>
						<div class="col-lg-6"><button type="reset" class="btn btn-default btn-block btn-sm btn-kirim">BATAL</button></div>
					</div>
				</form>
        	</div>
        </div>

    </div>
    
</section>
