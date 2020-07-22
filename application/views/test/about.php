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

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
  </head>
  <body>

   <div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
						    <div class="row">
						      <div class="col-sm-9 col-md-6 col-lg-6 mx-auto">
						            <form method="post" action="<?php echo base_url(); ?>index.php/booking_c/submitBook">  
						                <div class="form-group">  
						                     <label>User</label>  
						                     <input type="text" name="username" class="form-control" id="" value="" required />  
						                     <span class="text-danger"></span>                 
						                </div> 
						                <input type="text" value=" name="gid" style="display: none;">
										<div class="form-group">  
						                     <label>Ground</label>  
						                     <input type="text" name="g_id" class="form-control" id="g_id"  required>  
						                     <span class="text-danger"></span>                 
						                </div>   
						                <div class="form-group">  
						                     <label>Enter Date</label> 
											 <input type="date" name="dateb"  placeholder="Date" required> 
						                     <span class="text-danger"></span>  
						                </div>  
						                <div class="form-group">  
						                     <input type="submit" name="insert" value="Book Now" class="btn btn-info" />  
						                </div>  
						           </form>  
						          </div>
						        </div>
						      </div>
						         
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
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