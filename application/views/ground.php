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
            <li class="nav-item active"><a href="http://localhost/code/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/ground" class="nav-link">Grounds</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/login" class="nav-link"><b>LOGIN</b></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image:url(<?php echo $this->config->base_url().'/assets/images/home/12345.jpg';?>)">

      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <h1 class="mb-4 bread">Grounds</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	        <div class="col-lg-9">
		    		<div class="row">
					
					<?php  
						if($blogs){
							foreach($blogs as $blog){
					?>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    					<a href="rooms-single.html" class="img d-flex justify-content-center align-items-center" style="background-image:url(<?php echo $this->config->base_url().'assets/images/home/image_5.jpg';?>)">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="rooms-single.html"><?php echo $blog->g_name; ?></a></h3>
		    						<p><span class="price mr-2">Rs.<?php echo $blog->g_prize; ?></span> <span class="per">per day</span></p>
		    						<ul class="list">
		    							<li><span>Category: </span><?php echo $blog->g_category; ?></li>
		    							<li><span>Size: </span><?php echo $blog->g_size; ?>sq.ft</li>
		    							<li><span>Location: </span><?php echo $blog->g_location; ?></li>
		    							<li><span>FloodLights: </span><?php echo $blog->g_light; ?></li>
		    						</ul>
		    						<hr><?php echo anchor("booking_c/bookGID/{$blog->g_id}",'Book Now', ['class'=>'class="btn-custom"']); ?>
		    						</div>
		    				</div>
		    			</div>
						<?php
								}
							}
						?>
		    		</div>
		    	</div>

		    	<div class="col-lg-3 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Advanced Search</h3>
	      			<form method="post" action="<?php echo base_url(); ?>index.php/filter_c/filtering">
	      				<div class="fields">
		              <div class="form-group">
		                <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="Check In Date">
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="g_category" id="g_category" class="form-control">
	                    	<option value="">Ground Type</option>
	                    	<option value="">ALL</option>
                            <option value="Football">FOOTBALL</option>
                            <option value="Cricket">CRICKET</option>
                            <option value="Tennis">Tennis</option>
                            <option value="Rugger">RUGGER</option>
                          </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="g_light" id="g_light" class="form-control">
	                    	<option value="">Floodlights </option>
	                      <option value="yes">Yes</option>
	                      <option value="no">No</option>
	                      
	                    </select>
	                  </div>
		              </div>
		               <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="g_loaction" id="g_location" class="form-control">
	                    	<option value="">Location </option>
	                      <option value="colombo">Colombo</option>
	                      <option value="kandy">Kandy</option>
	                      <option value="galle">Galle</option>

	                      
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="g_size" id="g_size" class="form-control">
	                    	<option value="">Ground Size</option>
	                    	<option value="">30000 sq.ft</option>
	                      <option value="">40000 sq.ft</option>
	                      <option value="">45000 sq.ft</option>
	                      <option value="">50000 sq.ft</option>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="15000" min="0" max="100000"/>	-
										    <input type="number" value="100000" min="0" max="100000"/>
										  </span>
										  <input value="1000" min="0" max="100000" step="500" type="range"/>
										  <input value="70000" min="0" max="100000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>

	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Star Rating</h3>
	      			<form method="post" class="star-rating">
							  <div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">
										<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
									</label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check">
						      <input type="checkbox" class="form-check-input" id="exampleCheck1">
						      <label class="form-check-label" for="exampleCheck1">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
	      		</div>
	        </div>
		    </div>
    	</div>
    </section>


  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">ACC GROUND BOOKING SERVICE</h2>
              <p>gngfhhjfgjhjfjdhfd</p>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">ACC Academy,Sinha Road,Athurugiriya.</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">075757770</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">accgroundbooking@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

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