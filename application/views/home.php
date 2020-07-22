<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACC Ground Booking System</title>
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
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/viewcus" class="nav-link"><b> <?php  echo $this->session->userdata('username');?></b></a></li>
            

            


          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(<?php echo $this->config->base_url().'assets/images/home/fancy-crave-22481-unsplash.jpg';?>)">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <div class="text mb-5 pb-3">
              <h1 class="mb-3">Welcome To ACC Ground Booking System</h1>
              <h2>Find your Ground easily</h2>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(<?php echo $this->config->base_url().'assets/images/home/12345.jpg';?>)">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
            <div class="text mb-5 pb-3">
              <h1 class="mb-3">Book you Ground here!</h1>
              <h2>SRI LANKA'S FISRT GROUND BOOKING SYSTEM</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-booking">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form action="#" class="booking-form">
              <div class="row">
                <div class="col-md-4 d-flex">
                  <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                    <div class="wrap">
                      <label for="#">Check-in Date</label>
                      <input type="text" class="form-control checkin_date" placeholder="Check-in date">
                    </div>
                  </div>
                </div>
                <div class="col-md d-flex">
                  <div class="form-group p-4 align-self-stretch d-flex align-items-end">
                    <div class="wrap">
                      <label for="#">GROUND TYPE</label>
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="" class="form-control">
                          <option value="">ALL</option>
                            <option value="">FOOTBALL</option>
                            <option value="">CRCIKET</option>
                            <option value="">TENNIS</option>
                            <option value="">RUGBY</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-md d-flex">
                  <div class="form-group d-flex align-self-stretch">
                    <input type="submit" value="Check Availability" class="btn btn-primary py-3 px-4 align-self-stretch">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section ftc-no-pb ftc-no-pt">
      <div class="container">
        <div class="row">
          <div class="col-md-12 py-5 wrap-about pb-md-5 ftco-animate">
            <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
              <div class="ml-md-0">
                <h2 class="mb-4" align="center">Welcome To Our Ground Booking Service</h2>
              </div>
            </div>
            <div class="pb-md-2">
              <p align='center'>We ACC Academy Situated in Athurugiriya.ACC Ground Booking Service Started with a noble misson to connect players with Ground Owners in very effective way. player can search grounds,see grounds and choose ground to play there games. Our player are very much awere about their problem to book their ground so we came with a solution name of ACC Ground Booking Service.</p>
              <p align='center'>ACC Ground Booking Service dedicated towards serving best quality services to players & Ground Owners.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Grounds</h2>
          </div>
        </div>        
        <div class="row">
        <?php  
						if($blogs){
							foreach($blogs as $blog){
					?>

          <div class="col-sm col-md-6 col-lg-4 ftco-animate">
            <div class="room">
              <a href="rooms.html" class="img d-flex justify-content-center align-items-center" style="background-image:url(<?php echo $this->config->base_url().'assets/images/home/image_5.jpg';?>)">
                <div class="icon d-flex justify-content-center align-items-center">
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3 text-center">
                <h3 class="mb-3"><a href="rooms.html"><?php echo $blog->g_name; ?></a></h3>
                <p><span class="price mr-2">Rs.<?php echo $blog->g_prize; ?></span> <span class="per">per day</span></p>
                <hr>
                <p class="pt-1"><a href="room-single.html" class="btn-custom">View Ground Details <span class="icon-long-arrow-right"></span></a></p>
              </div>
            </div>
          </div>
          <?php
								}
							}
						?>

          
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-reception-bell"></span>
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">24 Hours sevice</h3>
                <p>You can Book Ground anytime, anywhere.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-car"></span>
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Filter Ground Details</h3>
                <p>Can easily find your ground want to book.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="flaticon-spa"></span>
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Facilities</h3>
                <p>Changing room, Floodlights, etc...</p>
              </div>
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
              <p>ACC ground booking system Started with a noble misson to connect players with Ground Owners in very effective way.player can search grounds,see grounds and choose ground to play there games.</p>
              
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

            <p>ALL RIGHT RESERVED by ACC Ground Booking service</p>
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