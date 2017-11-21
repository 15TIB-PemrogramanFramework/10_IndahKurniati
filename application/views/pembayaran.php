<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UED-SP Bungo Tanjung Desa Tanjung Datuk</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">UED-SP Bungo Tanjung</div> <br>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Usaha Ekonomi Desa Simpan Pinjam Desa Tanjung Datuk</div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          
        </button>
      <?php $this->load->view('menu_user'); ?>
      </div>
    </nav>

    
		<div class="container">
		<table>
			<h2><center>Form Pembayaran</center></h2>
			<div class="login-form-grids animated wow slideInUp" data-wow-delay=".5s">
			 <form role="form" id="" action="<?php echo base_url(); ?>index.php/pembayaranuser/tambah_Akun_Aksi" method="post" enctype="multipart/form-data">
				<table class="tableProfil">
				<div>
				<label>Nama Nasabah :</label>
				<input type="text" name="nama_nasabah" class="form-control"
				placeholder="Inputkan Nama Anda" required value="">
				</div>

			 
				
				<div>
				<label>Bayar Angsuran</label>
				<input type="number" name="bayar_angsuran" class="form-control"
				placeholder="Inputkan Jumlah Angsuran" required value="">
				</div>
				<div>
				<label>Angsuran Ke</label>
				<input type="number" name="angsuran_ke" class="form-control"
				placeholder="Inputkan Jumlah Angsuran" required value="">
				</div>
				 
				<div>	
				<button class="btn btn-primary" type="submit">Tambah</button>
				</div>
				</table>
				
				<br>
</form>
      
      </div>

      
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; IndahKurniati <br> <?php echo date("d-m-y H:i:s"); ?>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
