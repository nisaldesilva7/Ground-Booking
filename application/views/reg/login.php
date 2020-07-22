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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url().'assets2/css.log.css';?>">  


    <style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .bg {
      background-image:url(<?php echo $this->config->base_url().'/assets/images/home/soc-stadium.jpg';?>);
      height: 100%;

      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>



</head>
<body>
<div class='bg'>
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
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/reg" class="nav-link"><b>REGISTER</b></a></li>

          </ul>
        </div>
      </div>
    </nav>
 
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-6 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>

            <form method="post" action="<?php echo base_url(); ?>index.php/login_c/login_validation">  
                <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('username'); ?></span>                 
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <span class="text-danger"><?php echo form_error('password'); ?></span>  
                </div>  
                <div class="form-group">  
                     <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>'; ?>  
                </div>  
           </form>  


            
          </div>
        </div>
      </div>
      </div>
  </div>
</body>
</html>
