<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets_admin/img/favicon.png">

    <title>Data User UED-SP Bungo Tanjung</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url();?>assets_admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url();?>assets_admin/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url();?>assets_admin/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets_admin/css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets_admin/css/owl.carousel.css" type="text/css">
	<link href="<?php echo base_url();?>assets_admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_admin/css/fullcalendar.css">
	<link href="<?php echo base_url();?>assets_admin/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_admin/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets_admin/css/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets_admin/css/xcharts.min.css" rel=" stylesheet">	
	<link href="<?php echo base_url();?>assets_admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
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
                            <span class="username">Jenifer Smith</span>
                            
                        </a>
                        
                            
                            
                            <li>
                                
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
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
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Data User</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Data User</li>						  	
					</ol>

				
        <div class="row">
  <div class="col-md-12 text-right">
  <a href="<?php echo site_url('index.php/user/tambah'); ?>" 
    class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i>Tambah</a>
</div>

<table id="example" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>Id User</th>
      <th>Nama User</th>
      <th>Username User</th>
      <th>Password User</th>
 
      <th>Aksi</th>
</tr>
</thead>
<tbody>
  <?php foreach ($user as $key => $value) {?>
  <tr>
      <th><?php echo $value->id_user; ?></th>
      <th><?php echo $value->nama_user; ?></th> 
      <th><?php echo $value->username_user; ?></th>
      <th><?php echo $value->password_user; ?></th>
     
      <th>
        <a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ?')" href="<?php echo site_url('index.php/user/delete/'.$value->id_user); ?>" class="btn btn-danger">
          <i class="fa fa-trash"></i>
        </a>
        <a onclick="return confirm('Anda Yakin Akan Mengedit Data ini ... ?')" href="<?php echo site_url('index.php/user/update/'.$value->id_user); ?>" class="btn btn-warning">
          <i class="fa fa-pencil"></i>
        </a>
      </th>
    </tr>
    <?php }?>
</tbody>
</table>
</div>
			</div>
            </section>
            </section>
            </section>
            </body>
            </html>

              
            
				
				
				
              
				
			

          
      
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo base_url();?>assets_admin/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets_admin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url();?>assets_admin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url();?>assets_admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/<?php echo base_url();?>assets_admin/js/jquery.knob.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?php echo base_url();?>assets_admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url();?>assets_admin/js/calendar-custom.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url();?>assets_admin/js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url();?>assets_admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url();?>assets_admin/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url();?>assets_admin/js/easy-pie-chart.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/xcharts.min.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/jquery.autosize.min.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/jquery.placeholder.min.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/gdp-data.js"></script>	
	<script src="<?php echo base_url();?>assets_admin/js/morris.min.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/sparklines.js"></script>	
	<script src="<?php echo base_url();?>assets_admin/js/charts.js"></script>
	<script src="<?php echo base_url();?>assets_admin/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
