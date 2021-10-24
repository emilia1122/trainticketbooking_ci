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

	<!--About us -->
	<div class="jumbotron">
		<div class="container-fluid d-flex justify-content-center">
			About
			<br><br><br>
		</div>
	</div>
	<!--Responsive table -->
		<div class="container-fluid table-responsive">
			<table class="table table-sm">  
				<thead class="table-dark">
					<tr class="text-center">
						<th scope="col">Train Id</th>
						<th scope="col">Train Name</th>
						<th scope="col">Train Type</th>
						<th scope="col">Train Action</th>
					</tr>
				</thead>
                    <?php foreach ($trains as $row): ?>
                    <a href="<?php echo base_url(); ?>tren/afiseaza/<?php echo $row->id; ?>">
                    </a> 
				<tbody>
						<tr class="text-center">
							<th scope="row">
							<?php echo $row->id; ?>
							</th>
							<td>
                            <?php echo $row->train; ?>
							</td>
							<td>
                            <?php echo $row->type; ?>
							</td>
							<td>
								<div class="form-check">
                                    <a href="<?php echo base_url(); ?>tren/editeaza/<?php echo $row->id; ?>"
                                    class="btn btn-success btn-sm"
                                    >
                                        Edit
                                    </a>
                                    <a href="<?php echo base_url(); ?>tren/sterge/<?php echo $row->id; ?>"
                                    onclick="return confirm('Are you sure you want to delete it?')"
                                    class="btn btn-danger btn-sm"
                                    id="delete"
                                    >
                                        Delete
                                    </a>
                                    <a href="<?php echo base_url(); ?>tren/afiseaza/<?php echo $row->id; ?>"
                                    class="btn btn-info btn-sm"
                                    >
                                        View
                                    </a>
                   
								</div>
							</td>
						</tr>
                        <?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<br>
	<br>
</body>
</html>