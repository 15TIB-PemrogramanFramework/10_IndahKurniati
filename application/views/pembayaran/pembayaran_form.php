
<?php  $this->load->view('templates/header_admin');?> <br><br><br>
<form action="<?php echo $aksi; ?>" method="POST">

		<div class="container">
			<h2><center>Form Pembayaran</center></h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
				<table class="tableProfil">
 

				
				<div>
				<label>Nama Nasabah:</label>
				<input type="text" name="nama_nasabah" class="form-control"
				placeholder="Inputkan Jumlah Peminjaman" required value="<?php echo $nama_nasabah; ?>">
				</div>

				<div>
				<label>Bayar Angsuran:</label>
				<input type="text" name="bayar_angsuran" class="form-control"
				placeholder="Inputkan Jumlah Peminjaman" required value="<?php echo $bayar_angsuran; ?>">
				</div>
				<div>
				<label>Angsuran-Ke:</label>
				<input type="number" name="angsuran_ke" class="form-control"
				placeholder="Inputkan Lama Peminjaman" required value="<?php echo $angsuran_ke; ?>">
				</div>

				<div>
				<label>Jumlah Pinjaman:</label>
				<input type="number" name="jumlah_pinjaman" class="form-control"
				placeholder="Inputkan Lama Peminjaman" required value="<?php echo $jumlah_pinjaman; ?>">
				</div>



				
				<div>	
				<input type="hidden" name="id_pembayaran" value="<?php echo $id_pembayaran; ?>">
				 
				 
				<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
				</div>
				</table></div></div></div>
</form>
<br>
<br>
<br>


	<?php  $this->load->view('templates/footer_admin');?>