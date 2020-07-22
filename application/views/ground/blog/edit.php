	<h3><b><span class="glyphicon glyphicon-chevron-right"></span>&nbsp;Edit Blog</b></h3>
	<a href="<?php echo base_url('index.php/ground_c/index'); ?>" class="btn btn-default">Back</a>


	
	
	<form action="<?php echo base_url('index.php/ground_c/update') ?>" method="post" class="form-horizontal">
		<input type="hidden" name="txt_hidden" value="<?php echo $blog->g_id; ?>">
		<div class="form-group">
			<label for="name" class="col-md-2 text-right">Ground Name</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->g_name; ?>" name="g_name" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="about" class="col-md-2 text-right">Ground Loaction</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->g_location; ?>" name="g_location" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="about" class="col-md-2 text-right">Ground Size</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->g_size; ?>" name="g_size" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="about" class="col-md-2 text-right">Ground price</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->g_prize; ?>" name="g_prize" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="about" class="col-md-2 text-right">Categroy</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->g_category; ?>" name="g_category" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label for="about" class="col-md-2 text-right">Lights Condition(Yes/No)</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->g_light; ?>" name="g_light" class="form-control" required>
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnUpdate" class="btn btn-primary" value="Update">
			</div>
		</div>
	</form>
	
