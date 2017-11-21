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
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Beranda</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">

     <?php $this->load->view('menu');?>
     </li>
     </ul>
     </div>
     </div>
     </nav>

     

    <div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="<?php echo base_url();?>assets/img/coba3.png" alt="">
              <div class="carousel-caption d-none d-md-block">
                
              </div>
            
           
            </div>
        
        <!-- Welcome Message -->
        <div class="text-center mt-4">
          <div class="text-heading text-muted text-lg">Selamat Datang</div>
          <h2 class="my-2">UED-SP Desa Tanjung Datuk</h2>
          <div class="text-heading text-muted text-lg">By
            <strong>Indah Kurniati</strong>
        </div>
      </div>


      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h4 class="text-center text-lg text-uppercase my-0">Kata Sambutan
          <strong>Kepala Desa Tanjung Datuk</strong>
        </h4>
        <hr class="divider">
        <img class="img-fluid float-left mr-6 d-none d-lg-block" src="<?php echo base_url();?>assets/img/2.png" alt="">
        <p>Assalamualaikum warahmatullahi wabarakatuh
        <br>
          Saya selaku kepala desa tanjung datuk kecamatan bukit batu kabupaten bengkalis mengucapkan ribuan terima kasih kepada semua pihak yang terlibat dalam pembuatan website ini.
       <br>
        Saya berharap seluruh warga bisa dengan mudah mengakses website ini untuk melakukan peminjaman modal tanpa perlu datang ke kantor UED.
        semoga kelak website ini bisa berjalan dengan baik dan dapat membantu mempermudah kinerja dari anggota UED-SP Bungo Tanjung desa Tanjung Datuk.
        
        </p>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h4 class="text-center text-lg text-uppercase my-0">Kata Sambutan
          <strong>Kepala UED-SP Bungo Tanjung</strong>
        </h4>
        <hr class="divider">
        <img class="img-fluid float-left mr-4 d-none d-lg-block" src="<?php echo base_url();?>assets/img/rr.png" alt="">
        <p>Assalamualaikum warahmatullahi wabarakatuh
        <br>
          Saya selaku kepala UED-SP desa tanjung datuk kecamatan bukit batu kabupaten bengkalis mengucapkan terimakasih kepada pihak pembuat website ini.
        <br>
        Dengan adanya website ini, Kinerja dari UED-SP sangat terbantu dan mudah dalam hal pembuatan laporan bulanan dan laporan tahunan.
       
        </p>
      </div>

    </div>
    <!-- /.container -->

    <footer class="bg-faded text-center py-5">
      <div class="container">
        <p class="m-0">Copyright &copy; IndahKurniati <br> <?php echo date("d-m-y H:i:s"); ?>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
