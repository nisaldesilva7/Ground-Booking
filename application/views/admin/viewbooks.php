<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACC Ground Booking System</title>
    <meta charset="utf-8">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/open-iconic-bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css';?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.carousel.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/owl.theme.default.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.css';?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/aos.css';?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/ionicons.min.css';?>">

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap-datepicker.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/jquery.timepicker.css';?>">

    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/flaticon.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/icomoon.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="http://localhost/code/">ACC GROUND BOOKING SYSTEM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="http://localhost/code/index.php/ground_c" class="nav-link">ADD Grounds</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/viewbookings" class="nav-link">Bookings</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/viewcus" class="nav-link">View Users</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/adminlog_c/logout" class="nav-link"><b>LOGIN-OUT</b></a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/adminlog/logout" class="nav-link"><b>ADMIN: <?php  echo $this->session->userdata('username');?></b></a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap" style="background-image:url(<?php echo $this->config->base_url().'assets/images/home/1891874275.jpeg';?>)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <h1 class="mb-4 bread">Admin Dashboard</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12  register-right">
    <div class="container">
  </div>


    <div class="col-md-12  register-right">
    <div class="container">

	    <a href="<?php echo base_url('index.php/adminlog_c/enter'); ?>" class="btn btn-primary" >BACK</a>

	<table class="table table-bordered table-responsive">
		<thead align="center">
			<tr>
				<td>B_ID</td>
				<th>G_ID</th>
				<th>USERNAME</th>
				<th>DATE</th>
			</tr> 
		</thead>
		<tbody> 
		
		<?php  
			if($blogs){
				foreach($blogs as $blog){
		?>
			<tr>
				<td><?php echo $blog->b_id; ?></td>
				<td><?php echo $blog->g_id; ?></td>
				<td><?php echo $blog->username; ?></td>
				<td><?php echo $blog->dateb; ?></td>
			</tr>
		<?php
				}
			}
		?>
		</tbody>
	</table>
		</div>
</div>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url().'assets/js/jquery.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery-migrate-3.0.1.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/popper.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.easing.1.3.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.waypoints.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.stellar.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/aos.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.animateNumber.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap-datepicker.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/jquery.timepicker.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/scrollax.min.js';?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url().'assets/js/google-map.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/main.js';?>"></script>
    
  </body>
</html>