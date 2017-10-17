<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Admin</strong> Akun</h1>
        	</div>
        	<div class="tile-body">
				<?php echo $this->session->flashdata('save_akun'); ?>
        		<form method="post" action="<?php echo base_url(); ?>admin/simpan_akun">
        			<div class="for_group">
        				<label for="pass_lama"> Password Lama </label>
        				<input type="text" class="form-control input-sm" name="pass_lama" />
        			</div>
        			<div class="for_group">
        				<label for="pass_baru"> Password Baru </label>
        				<input type="text" class="form-control input-sm" name="pass_baru" />
        			</div>
        			<div class="for_group">
        				<label for="ulangi_pass"> Konfirmasi Password Baru </label>
        				<input type="text" class="form-control input-sm" name="ulangi_pass" />
        			</div>
        			<div class="for_group"><br/>
        				<button type="submit" class="btn btn-info btn-block btn-sm"> SIMPAN DATA </button>
        			</div>
				</form>
        	</div>
        </div>

    </div>
    
</section>
