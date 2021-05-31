<?php  require_once('inc/connection.php');


	$query = "SELECT * FROM `schedule` WHERE sch_id = 11";

	if ( $sql=mysqli_query($connection, $query)) {
		$row =mysqli_fetch_assoc($sql);
			$departure = "{$row['departure']}";
		 	$arrival = "{$row['arrival']}";
		 	$type = "{$row['type']}";
		 	$date = "{$row['date']}";
		 	$time = "{$row['time']}";
		 	$fare = "{$row['fare']}";
		 }





?>



<!DOCTYPE html>

<html>
	<head>
	<title>Transporty</title>
	<link type="text/css" rel="stylesheet" href="css/reservation.css">
	<link type="text/css" rel="stylesheet" href="css/style.css">
	</head>
<body>
 
 <?php include_once 'header.php';?>
 
 
		<div class="heading">
		<h3>Booking Details</h3>
		</div>
		<hr>
	
	
	<div class="bookingpage">

		<div class="seatarrangment">
		
			<div class="seatkey">
				<button class="S W">0</button> <p>Available Seats</p>
				<button class="S W">0</button> <p>Booked Seats</p>
			</div>
			
			<div class="seatview">
				<div class="column1">
					<button onclick="seat('z1')"  class="S" id="z1">1W</button>
					<button onclick="seat('z5')"  class="S" id="z5">5W</button>
					<button onclick="seat('z9')"  class="S" id="z9">9w</button>
					<button onclick="seat('z13')" class="S" id="z13">13W</button>
					<button onclick="seat('z17')" class="S" id="z17">17W</button>
					<button onclick="seat('z21')" class="S" id="z21">21W</button>
					<button onclick="seat('z25')" class="S" id="z25">25W</button>
					<button onclick="seat('z29')" class="S" id="z29">29W</button>
					<button onclick="seat('z33')" class="S" id="z33">33W</button>
					<button onclick="seat('z37')" class="S" id="z37">37W</button>
					<button onclick="seat('z41')" class="S" id="z41">41W</button>
				</div>
				
				<div class="column2">
					<button onclick="seat('z2')"  class="S" id="z2">2</button>
					<button onclick="seat('z6')"  class="S" id="z6">6</button>
					<button onclick="seat('z10')" class="S" id="z10">10</button>
					<button onclick="seat('z14')" class="S" id="z14">14</button>
					<button onclick="seat('z18')" class="S" id="z18">18</button>
					<button onclick="seat('z22')" class="S" id="z22">22</button>
					<button onclick="seat('z26')" class="S" id="z26">26</button>
					<button onclick="seat('z30')" class="S" id="z30">30</button>
					<button onclick="seat('z34')" class="S" id="z34">34</button>
					<button onclick="seat('z38')" class="S" id="z38">38</button>
					<button onclick="seat('z42')" class="S" id="z42">42</button>
				</div>
				
				<div class="column3">
					<button onclick="seat('z43')"class="S" id="z43">43</button>
				</div>

				<div class="column4">
					<button onclick="seat('z3')"  class="S" id="z3">3</button>
					<button onclick="seat('z7')"  class="S" id="z7">7</button>
					<button onclick="seat('z11')" class="S" id="z11">11</button>
					<button onclick="seat('z15')" class="S" id="z15">15</button>
					<button onclick="seat('z19')" class="S" id="z19">19</button>
					<button onclick="seat('z23')" class="S" id="z23">23</button>
					<button onclick="seat('z27')" class="S" id="z27">27</button>
					<button onclick="seat('z31')" class="S" id="z31">31</button>
					<button onclick="seat('z35')" class="S" id="z35">35</button>
					<button onclick="seat('z39')" class="S" id="z39">39</button>
					<button onclick="seat('z44')" class="S" id="z44">44</button>
				</div>
				
				<div class="column5">
					<button onclick="seat('z4')"  class="S" id="z4">4W</button>
					<button onclick="seat('z8')"  class="S" id="z8">8W</button>
					<button onclick="seat('z12')" class="S" id="z12">12W</button>
					<button onclick="seat('z16')" class="S" id="z16">16W</button>
					<button onclick="seat('z20')" class="S" id="z20">20W</button>
					<button onclick="seat('z24')" class="S" id="z24">24W</button>
					<button onclick="seat('z28')" class="S" id="z28">28W</button>
					<button onclick="seat('z32')" class="S" id="z32">32W</button>
					<button onclick="seat('z36')" class="S" id="z36">36W</button>
					<button onclick="seat('z40')" class="S" id="z40">40W</button>
					<button onclick="seat('z45')" class="S" id="z45">45W</button>
				</div>
			</div>
		</div>
		
		<div class="bookingdetails">
			
			<div class="inputlabel">	
				<div class="bookingdetailslabel">
					<label>Departure</label>
					<label>Arrival</label>
					<label>Type</label>
					<label>Date</label>
					<label>Time</label>
					<label>Fare</label>
				</div>
				
				<div class="bookingdetailsinput">
					<input type="text" name="departure" value="<?php echo $departure  ?>" readonly >
					<input type="text" name="arrival" value=" <?php echo $arrival  ?> " readonly>
					<input type="text" name="type" value=" <?php echo $type ?> " readonly>
					<input type="text" name="date" value=" <?php echo $date ?> " readonly>
					<input type="text" name="time" value=" <?php echo $time  ?> " readonly>
					<input id="price"  name="fare" value=" <?php echo $fare ?> " readonly>
				</div>
			</div>
				
				<h4>43 Seats Available</h4>
			
		</div>
		
		
		
	
		<div class="calculation">
		
			<table id="t_data">
	
				<tr>
				<th>Seat No</th>
				<th>Fare</th>
				<th>Remove</th>
				</tr>
					
			
			</table>
			
			
			<div class="total">
				<div class="data">
					<p>Seats :</p><p id="sval">0</p>
				</div>
				<div class="data">
					<p>Sub Total : Rs.</p><p id="val">0.00</p>
				</div>
			</div>
			
			<button class="bookbut">Book Now</button>
		</div>
		
	</div>
	
	
	<?php include_once 'footer.php';?>
	
</body>

<script src="js/reservation.js"></script>

</html>
</html>