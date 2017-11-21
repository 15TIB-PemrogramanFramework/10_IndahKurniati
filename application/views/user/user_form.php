
<?php  $this->load->view('templates/header_admin');?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="container">
	<h2><center>Form User</center></h2>
	<table class="tableProfil">
	<div>
		<label>Nama User :</label>
		<input type="text" name="nama_user" class="form-control"
		placeholder="Inputkan Nama Staf" required value="<?php echo $nama_user; ?>">
	</div>
	
	<div>
		<label>Username User :</label>
		<input type="text" name="username_user" class="form-control"
		placeholder="Inputkan Alamat Staf" required value="<?php echo 
		$username_user; ?>">
	</div>
	<div>
		<label>Password User :</label>
		<input type="text" name="password_user" class="form-control"
		placeholder="Inputkan No Hp"  value="<?php echo $password_user; ?>">
	</div>
	<div>
	<input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
	</div>
	</table>
	</div>
	
</form>
	<?php  $this->load->view('templates/footer_admin');?>