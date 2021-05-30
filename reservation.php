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
					<button class="S" id="z1" onclick="seat()">1W</button>
					<button class="S" id="z5">5W</button>
					<button class="S" id="z9">9w</button>
					<button class="S" id="z13">13W</button>
					<button class="S" id="z17">17W</button>
					<button class="S" id="z21">21W</button>
					<button class="S" id="z25">25W</button>
					<button class="S" id="z29">29W</button>
					<button class="S" id="z33">33W</button>
					<button class="S" id="z37">37W</button>
					<button class="S" id="z41">41W</button>
				</div>
				
				<div class="column2">
					<button class="S" id="z2">2</button>
					<button class="S" id="z6">6</button>
					<button class="S" id="z10">10</button>
					<button class="S" id="z14">14</button>
					<button class="S" id="z18">18</button>
					<button class="S" id="z22">22</button>
					<button class="S" id="z26">26</button>
					<button class="S" id="z30">30</button>
					<button class="S" id="z34">34</button>
					<button class="S" id="z38">38</button>
					<button class="S" id="z42">42</button>
				</div>
				
				<div class="column3">
					<button class="S W">43</button>
				</div>

				<div class="column4">
					<button class="S" id="z3">3</button>
					<button class="S" id="z7">7</button>
					<button class="S" id="z11">11</button>
					<button class="S" id="z15">15</button>
					<button class="S" id="z19">19</button>
					<button class="S" id="z23">23</button>
					<button class="S" id="z27">27</button>
					<button class="S" id="z31">31</button>
					<button class="S" id="z35">35</button>
					<button class="S" id="z39">39</button>
					<button class="S" id="z44">44</button>
				</div>
				
				<div class="column5">
					<button class="S" id="z4">4W</button>
					<button class="S" id="z8">8W</button>
					<button class="S" id="z12">12W</button>
					<button class="S" id="z16">16W</button>
					<button class="S" id="z20">20W</button>
					<button class="S" id="z24">24W</button>
					<button class="S" id="z28">28W</button>
					<button class="S" id="z32">32W</button>
					<button class="S" id="z36">36W</button>
					<button class="S" id="z40">40W</button>
					<button class="S" id="z45">45W</button>
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
					<input type="text" value="Kandy" readonly>
					<input type="text" value="Colombo" readonly>
					<input type="text" value="Luxury" readonly>
					<input type="text" value="2021/10/30" readonly>
					<input type="text" value="3.00 p.m" readonly>
					<input type="text" value="1500.00" readonly>
				</div>
			</div>
				
				<h4>43 Seats Available</h4>
			
		</div>
		
		
		
	
		<div class="calculation">
		
			<table>
	
				<tr>
				<th>Seat No</th>
				<th>Fare</th>
				<th>Remove</th>
				</tr>
				
				<tr>
				<td>5</td>
				<td>LKR 1450.00</td>
				<td>Delete</td>
				</tr>
				
				<tr>
				<td>33W</td>
				<td>LKR 1450.00</td>
				<td>Delete</td>
				</tr>
				
				<tr>
				<td>41W</td>
				<td>LKR 1450.00</td>
				<td>Delete</td>
				</tr>
				<tr>
			
			</table>
			
			
			<div class="total">
				<p>Seats : 3</p>
				<p>Sub Total : LKR 4350.00</p>
			</div>
			
			<button class="bookbut">Book Now</button>
		</div>
		
	</div>
	
	
	<?php include_once 'footer.php';?>
	
</body>

<script src="js/reservation.js"></script>

</html>
</html>