<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets_admin/img/favicon.png">

    <title>Data Staff UED-SP Bungo Tanjung</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url();?>assets_admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url();?>assets_admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url();?>assets_admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets_admin/css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="<?php echo base_url();?>assets_admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>assets_admin/js/html5shiv.js"></script>
      <script src="<?php echo base_url();?>assets_admin/js/respond.min.js"></script>
      <script src="<?php echo base_url();?>assets_admin/js/lte-ie7.js"></script>
    <![endif]-->

  </head>
  <body>

  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Admin <span class="lite">UED-SP Bungo Tanjung</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                             
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                   
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url();?>assets_admin/img/avatar1_small.jpg">
                            </span>
                            <span class="username">Indah Kurniati</span>
                            
                        </a>
                        
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                 
                 <!--menu menu di dashboard admin-->
            <?php $this->load->view('menu_admin'); ?>
                   <!--menu menu di dashboard admin-->
                  
                  
                      
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Data Dana</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_document_alt"></i>Data Dana</li>
                        
                    </ol>
                 <div class="row">
  <div class="col-md-12 text-right">
  <a href="<?php echo site_url('index.php/dana/tambah'); ?>" 
    class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i>Tambah</a>
</div>

<table id="example" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Id Dana</th>
      <th>Jumlah Dana</th>
      <th>Tanggal </th>
      <th>Aksi</th>
</tr>
</thead>
<tbody>
  <?php foreach ($dana as $key => $value) {?>
  <tr>
      <th><?php echo $value->id_dana; ?></th>
      <th><?php echo $value->jumlah; ?></th>  
      <th><?php echo $value->tanggal; ?></th>
      
      <th>
        <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ?')" href="<?php echo site_url('index.php/dana/delete/'.$value->id_dana); ?>" class="btn btn-danger">
          <i class="fa fa-trash-o"></i>
        </a>
        <a onclick="return confirm('Anda Yakin Akan Mengedit Data ini ... ?')" href="<?php echo site_url('index.php/dana/update/'.$value->id_dana); ?>" class="btn btn-warning">
          <i class="fa fa-pencil"></i>
        </a>
      </th>
    </tr>
    <?php }?>
</tbody>
</table>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>
                    
                    
                </div>
            </div>
              
                      
                      
                      
              
                  
                      
                              

                                      
              
             


                                 

                            

                      
      
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="<?php echo base_url();?>assets_admin/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url();?>assets_admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="<?php echo base_url();?>assets_admin/js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/ga.js"></script>
    <!--custom switch-->
    <script src="<?php echo base_url();?>assets_admin/js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="<?php echo base_url();?>assets_admin/js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>assets_admin/js/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/bootstrap-wysiwyg.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="<?php echo base_url();?>assets_admin/js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="<?php echo base_url();?>assets_admin/js/scripts.js"></script>


  </body>
</html>
