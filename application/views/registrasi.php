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
 <div class="container">
 <?php $this->load->view('menu'); ?>


<center>


          <form action="<?php echo base_url(). 'index.php/welcome/tambah_Akun_Aksi'; ?>" method="post">
            <table>
              <tbody>
              <tr> <td> Nama Nasabah</td>
                <td> :  </td>
                <td> <div class="">
                  <input type="text" class="form-control" name="nama_nasabah" placeholder="Nama nasabah" size="50" required="">
                </div></td>
              </tr>

              <tr> <td>Username Nasabah</td>
                <td> : </td>
                <td> <div class="">
                  <input type="text" class="form-control" name="username_nasabah" placeholder="Username" size="50" required="">
                </div></td>
              </tr>

              <tr> <td>Password nasabah</td>
                <td> : </td>
                <td><div class="">
                  <input type="text" class="form-control" name="password_nasabah" placeholder="Password" size="50" required="">
                </div></td>
              </tr>

               <tr> <td>Alamat nasabah</td>
                <td> : </td>
                <td><div class="">
                  <input type="text" class="form-control" name="alamat_nasabah" placeholder="Alamat Anda" size="50" required="">
                </div></td>
              </tr>

               <tr> <td>No Handphone</td>
                <td> : </td>
                <td><div class="">
                  <input type="text" class="form-control" name="nohp_nasabah" placeholder="No Handphone Anda" size="50" required="">
                </div></td>
              </tr>

              

              <tr> <td></td>
                <td><td><input type="submit" class="" value="DAFTAR" /></td></td>
                <td></td>
              </tr>
            </table>
          </form>
          
        </center>
      </div>
    </div>
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
