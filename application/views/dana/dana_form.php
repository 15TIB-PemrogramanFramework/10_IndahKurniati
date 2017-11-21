
<?php  $this->load->view('templates/header_admin');?> <br><br><br>
<form action="<?php echo $aksi; ?>" method="POST">

		<div class="container">
			<h2><center>Form Dana</center></h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<table class="tableProfil">
				<div>
				<label>Jumlah Uang :</label>
				<input type="text" name="jumlah" class="form-control"
				placeholder="Inputkan Jumlah Uang" required value="<?php echo $jumlah; ?>">
				</div>

				<div>
				<label>Tanggal Uang masuk:</label>
				<input type="date" name="tanggal" class="form-control"
				placeholder="Inputkan Tanggal Uang Masuk" required value="<?php echo $tanggal; ?>">
				</div> <br>
				<div>	
				<input type="hidden" name="id_dana" value="<?php echo $id_dana; ?>">
				<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
				</div>
				</table></div></div></div>
</form>
<br>
<br>
<br>


	<?php  $this->load->view('templates/footer_admin');?>