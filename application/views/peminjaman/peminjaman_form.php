
<?php  $this->load->view('templates/header_admin');?> <br><br><br>
<form action="<?php echo $aksi; ?>" method="POST">

		<div class="container">
			<h2><center>Form Peminjaman</center></h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<table class="tableProfil">
				<div>
				<label>Nama Nasabah:</label>
				<input type="text" name="nama_nasabah" class="form-control"
				placeholder="Inputkan Nama Nasabah" required value="<?php echo $nama_nasabah; ?>">
				</div>
				<div> <label>Jumlah Peminjaman</label>
				<select class="form-control select2" name="id_dana" style="width: 100%;">
						<?php foreach ($dana as $key => $value) { ?>
						<option value="<?php echo $value->id_dana; ?>"><?php echo $value->jumlah;?></option>
						<?php } ?>
				</select>
				</div>
				<div>
				<label>Tanggal Peminjaman:</label>
				<input type="date" name="tanggal_peminjaman" class="form-control"
				placeholder="Inputkan Tanggal Peminjaman" required value="<?php echo $tanggal_peminjaman; ?>">
				</div> <br>
				
				<div>
				<label>Lama Peminjaman:</label>
				<input type="number" name="lama_peminjaman" class="form-control"
				placeholder="Inputkan Lama Peminjaman" required value="<?php echo $lama_peminjaman; ?>">
				</div>
				<div>	
				<input type="hidden" name="id_peminjaman" value="<?php echo $id_peminjaman; ?>">
				
				
				<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
				</div>
				</table>
</form>
<br>
<br>
<br>


	<?php  $this->load->view('templates/footer_admin');?>