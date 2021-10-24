<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Train Ticket Booking</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="trains.css">
</head>

<body>
	<!-- Navigation bar -->
	<?php $this->load->view('layouts/navbar'); ?>
    <?php $this->load->view('partials/alerts'); ?>

    <div class="row mx-auto mt-5">
		<div class="col d-flex justify-content-center">
			<form role="form" method="POST" action="<?php echo base_url(); ?>tren/adauga">
				<fieldset>
					<p class="text-uppercase pull-center">Add Train</p>
					<div class="form-group">
						<input type="text" name="train" class="form-control input-lg" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="text" name="type" class="form-control input-lg" placeholder="Type">
					</div>
					<div>
						<input type="submit" name="save" class="btn btn-sm btn-dark" value="Add">
					</div>
				</fieldset>
			</form>
		</div>
</body>
</hrml>
