<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ACC Ground Booking System</title>

    <link rel="stylesheet" href="<?php echo base_url().'assets1/cc.css';?>">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<style type="text/css">
        body {
        background-color: #0000FF;
        margin: 30px;
        font: 15px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    </style>

<style>
    body, html {
      height: 100%;
      margin: 0;
    }
    .bg {
      background-image:url(<?php echo $this->config->base_url().'/assets/images/home/joseph-barrientos-685862-unsplash.jpg';?>);
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
        <a class="navbar-brand" href="http://localhost/code/">ACC GROUND BOOKING SYSTEM(ADMIN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item active"><a href="http://localhost/code/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/ground" class="nav-link">Grounds</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/contact" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="http://localhost/code/index.php/Welcome/adminlog" class="nav-link"><b>LOGIN</b></a></li>

          </ul>
        </div>
      </div>
    </nav>


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>ACC Ground Booking Service</h3>
                        <p>Book any type of grounds with your Fingertips</p>
                    </div>
                    <div class="col-md-9  register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">SIGN-UP</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                    
                                    <?php echo form_open('adminreg_c/actionregister'); ?>
                                    
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" id="username" placeholder="User Name*">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password*">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="Confirm Password*">
                                        </div>
                                        <div class="form-group pull-right">
                                            <button type="submit" id="register" class="btn btn-primary">Register</button>
                                        </div>
                                        <?php if(validation_errors()) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                    <?php } ?>
                                        
                            </div>
                            <?php echo form_close(); ?>

            </div>
             </div> 
         </div>
         </div>
              </div>

   
</body>
</html>




