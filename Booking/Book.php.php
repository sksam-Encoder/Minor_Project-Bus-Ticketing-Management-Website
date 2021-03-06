

<?php





?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="./Bookcss/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="./Bookcss/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Check In</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">No of Peoples</span>
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
						
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">From</span>
										<select class="form-control">
											<option>Choose</option>
											<option>Kolkata </option>
											<option>Delhi</option>
											<option>Bangalore</option>
											<option>5</option>
											<option>6</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
						
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Destination :</span>
										<select class="form-control">
											<option>Choose</option>
											<option>Assam</option>
											<option>Bangalore</option>
											<option>Darjeeling</option>
											<option>Haryana</option>
											<option>Hyderabad</option>
											<option>Lucknow</option>
											<option>Kerala</option>
											<option>New Delhi</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Return Trip :</span>
										<select class="form-control">
											<option>Choose</option>

											<option>Yes</option>
											<option>No</option>
									
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
						
							
							</div>
							<div class="form-btn">
								<button class="submit-btn">Book Now </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>