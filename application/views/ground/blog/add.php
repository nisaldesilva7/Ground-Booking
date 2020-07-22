
	<h3><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Add New Ground Info</h3>

	<a href="<?php echo base_url('index.php/ground_c/index'); ?>" class="btn btn-primary">Back</a>
		<body background="image/2.jpg"></body>
		<div class="col-md-12  register-right">

	<form action="<?php echo base_url('index.php/ground_c/submit') ?>" method="post" class="form-horizontal">

		<div class="form-group">
			<label for="name" class="col-md-2 text-right"><span class="glyphicon glyphicon-user"></span>&nbsp;Ground Name</label>
			<div class="col-md-10">
				<input type="text" name="g_name" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="tel_num" class="col-md-2 text-right"><span class="glyphicon glyphicon-earphone"></span>&nbsp;Ground Location</label>
			<div class="col-md-10">
				<input type="text" name="g_location" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-md-2 text-right"><span class="glyphicon glyphicon-file"></span>&nbsp;Ground Size</label>
			<div class="col-md-10">
				<input type="text" name="g_size" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-md-2 text-right"><span class="glyphicon glyphicon-file"></span>&nbsp;Ground Price</label>
			<div class="col-md-10">
				<input type="text" name="g_prize" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="about" class="col-md-2 text-right"><span class="glyphicon glyphicon-comment"></span>&nbsp;Category</label>
			<div class="col-md-10">
				<input type="text" name="g_category" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="about" class="col-md-2 text-right"><span class="glyphicon glyphicon-comment"></span>&nbsp;Lights Condition(Yes/No)</label>
			<div class="col-md-10">
				<input type="text" name="g_light" class="form-control" required>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Register">
			</div>
		
		</div>
	</form>
	
