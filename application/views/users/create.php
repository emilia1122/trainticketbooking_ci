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
    <?php $this->load->view('layouts/navbar') ?>

	<div class="row mx-auto mt-5">
		<div class="col-md-6">
			<form role="form" method="POST" action="<?php echo base_url(); ?>cont/adauga">
				<fieldset>
					<p class="text-uppercase pull-center">Sign Up</p>
					<div class="form-group">
						<input type="text" name="name" class="form-control input-lg" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="text" name="surname" class="form-control input-lg" placeholder="Surname">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control input-lg" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control input-lg" placeholder="Password">
					</div>

					<div>
						<input type="submit" name="register" class="btn btn-sm btn-dark" value="Sign Up">
					</div>
				</fieldset>
			</form>
		</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>