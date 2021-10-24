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
			<form role="form" method="POST" action="<?php echo base_url(); ?>cont/autentificare">
				<fieldset>
					<p class=" text-uppercase">Sign In</p>

					<div class="form-group">
						<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
					</div>
					<div>
						<input type="submit" name="login" class="btn btn-sm btn-dark mb-3" value="Sign In">
					</div>
				</fieldset>
			</form>
            <a href="<?php echo base_url(); ?>cont/adauga">Don't have an account yet? Sign Up</a>
		</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>