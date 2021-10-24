<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Train Ticket Booking</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="train.css">
</head>

<body>
	<!-- Navigation bar -->
	<?php $this->load->view('layouts/navbar') ?>
	<!--Responsive table -->
		<div class="container-fluid table-responsive mt-5">
			<table class="table table-sm">  
				<thead class="table-dark">
					<tr class="text-center">
						<th scope="col">Route Id</th>
						<th scope="col">First Station</th>
						<th scope="col">Final Station</th>
					</tr>
				</thead>
                    <a href="<?php echo base_url(); ?>ruta/afiseaza/<?php echo $row->id; ?>">
                    </a> 
				<tbody>
						<tr class="text-center">
							<th scope="row">
							<?php echo $row->id; ?>
							</th>
							<td>
                            <?php echo $row->first_station; ?>
							</td>
							<td>
                            <?php echo $row->final_station; ?>
							</td>
						</tr>
				</tbody>
			</table>
		</div>
		<br>
	<br>
</body>
</html>