
<?php  $this->load->view('templates/header_admin');?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="container">
	<h2><center>Form Staf</center></h2>
	<table class="tableProfil">

	<div><label>Nama Staf :</label>
		<input type="text" name="nama_staf" class="form-control"
		placeholder="Inputkan Nama Staf" required value="<?php echo $nama_staf; ?>">
	</div>
		
	
	<div>
		<label>Alamat Staf :</label>
		<input type="text" name="alamat_staf" class="form-control"
		placeholder="Inputkan Alamat Staf" required value="<?php echo $alamat_staf; ?>">
	</div>
	<div>
		<label>No Hp Staf :</label>
		<input type="text" name="nohp_staf" class="form-control"
		placeholder="Inputkan No Hp"  value="<?php echo $nohp_staf; ?>">
	</div>
	<div>
		<label>Jabatan Staf :</label>
		<input type="text" name="jabatan_staf" class="form-control"
		placeholder="Inputkan Jabatan Staf"  value="<?php echo $jabatan_staf; ?>">
	</div>
		<div>
	<input type="hidden" name="id_staf" value="<?php echo $id_staf; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
	</div>
	</table>
	</div>
	


	
</form>
	<?php  $this->load->view('templates/footer_admin');?>