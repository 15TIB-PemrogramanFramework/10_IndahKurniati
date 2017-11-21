
<?php  $this->load->view('templates/header_admin');?>

<form action="<?php echo $aksi; ?>" method="POST">

	<div class="container">
		<h2><center>Form Nasabah</center></h2>
		
				<table class="tableProfil">
		<div>
				<label>Nama Nasabah :</label>
				<input type="text" name="nama_nasabah" class="form-control"
				placeholder="Inputkan Nama Nasabah" required value="<?php echo $nama_nasabah; ?>">
		</div>
		<div>
				<label>Alamat Nasabah :</label>
				<input type="text" name="alamat_nasabah" class="form-control"
				placeholder="Inputkan Alamat Nasabah" required value="<?php echo $alamat_nasabah; ?>">
		</div>
		<div>
				<label>No Hp Nasabah :</label>
				<input type="text" name="nohp_nasabah" class="form-control"
				placeholder="Inputkan No Hp"  value="<?php echo $nohp_nasabah; ?>">
		</div>
		
		<div>
				<input type="hidden" name="id_nasabah" value="<?php echo $id_nasabah; ?>">
				<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
		</div>
	</table>
	</div>
	</div>
	
	
</form>

	<?php  $this->load->view('templates/footer_admin');?> 