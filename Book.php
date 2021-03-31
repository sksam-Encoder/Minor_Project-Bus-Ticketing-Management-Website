<?php
$Bus_price = $_GET['Bus_price'] ?? "error";
require("./header.php");
if ($_SESSION['email'] == true) {






} else {


	echo '<script>  
alert("Login For Book")
location.replace("index.php")
 </script>';
}


if ($_SESSION['id'] == true) {
	$bid = $_SESSION['id'];
	$data = $getbus->getBusId($bid);   // the array data stores mostly in the style of 2d array.
	$route = $data[0]['route'];
	$RouteChunks = explode("To", $route);
	$trip = $data[0]['round_trip'];
}
if ($_SESSION['task'] == true) {

	$persons   =	$_SESSION['task'];
	$rup = $data[0]['amount'];
	$total = $rup * $persons;
}


?>

<?php
if (isset($_POST['book'])) {


	$namee= $row['name'];
	$emaile= $row['email'];
	$phone= $row['phone'];

	$date = $_POST['trip-start'];
	 
		$res=$Tickets->insertTickets($data[0]['bus_no'],$data[0]['route'],$persons,$data[0]['amount'],$total,$date,$trip,$namee,$emaile,$phone);
		
		if($res!=0)
		{
			
			echo '<script>location.replace("index.php") </script>';

		}


}


?>




<div id="booking" class="section">
	<div class="section-center">
		<div class="container">
			<div class="row">
				<div class="booking-form">
					<div class="form-header">
						<h1>Make your reservation</h1>
					</div>
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Check In</span>
									<input type="date" class="form-control date-icon" id="start" name="trip-start" required />


								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<span class="form-label">No of Peoples</span>
									<span class="form-control  text-center  pt-2" id="peoples" style="height:40px;"><?php echo $persons; ?></span>


								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<span class="form-label">From</span>

									<span class="form-control text-center pt-2" id="from" style="height:40px;"> <?php echo $RouteChunks[0]; ?> </span>


								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<span class="form-label">Destination :</span>

									<span class="form-control text-center pt-2" id="Dest" style="height:40px;"> <?php echo $RouteChunks[1]; ?> </span>


								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span class="form-label">Return Trip :</span>
									<select class="form-control">
										<?php if ($trip == 1) {

											echo '<option>Choose</option>
                                      <option>Yes</option>
                                      <option>No</option>';
										} else {

											echo '<option>No</option>';
										}

										?>


									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span class="form-label">Price :</span>


									<span class="form-control text-center pt-2" id="dollar" style="height:40px;"> <?php echo $data[0]['amount']; ?> </span>

								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<span class="form-label"> Total Price :</span>

									<span class="form-control  text-center  pt-2" id="totalPrice" style="height:40px;"><?php echo $total;   ?></span>

								</div>
							</div>


						</div>
						<div class="form-btn">
							<button type="submit" class="submit-btn" name="book">Book Now </button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php



require("./footer.php");


?>