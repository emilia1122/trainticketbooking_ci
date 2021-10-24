<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="#">Train Ticket Booking</a>
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>bilet/adauga">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>bilet">Bookings</a>
				</li>
			</ul>
			<?php if(isLoggedIn()): ?>
				<div class="mr-4 ml-auto">
				<span style="color:#fff; ">Hei </span><a href="<?php echo base_url(); ?>cont/deconectare" class="btn btn-light btn-sm mr-1 ml-auto">
					Logout
				</a>
			<?php elseif(isLoggedIn() == FALSE): ?>
				<a href="<?php echo base_url(); ?>cont/adauga" class="btn btn-light btn-sm mr-1 ml-auto">
					Get started
				</a>
			<?php endif;?>
			</div>
		</div>
	</div>
</nav>