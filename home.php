<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
	<link rel="shortcut icon" href="img/logo-icon.png">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>

<?php include_once 'header.php';?>

<div class="slider container" align="center"><!-- slider -->
  	<img class="slide" src="img/banner/banner1.png">
  	<img class="slide" src="img/banner/banner2.png">
  	<img class="slide" src="img/banner/banner3.png">
  	<img class="slide" src="img/banner/banner4.png">
  	<img class="slide" src="img/banner/banner5.png">

  	<button class="slider-btn previous-btn" onclick="previous(-1)"><img src="img/previous.png"></button>
  	<button class="slider-btn next-btn" onclick="next(1)"><img src="img/next.png"></button>
</div><!-- /slider -->

<div class="search-bus container"><!-- search-bus -->
	<div class="search-header container" >
		<h1>Plan Your Journey</h1>
	</div>
	<form action="allschdule.php" method="GET">
	<div class="search-col container">
		<div class="search-input">
			<label>Departure</label>
			<select required name="departure">
	<form method="GET" action="allschdule.php">
	<div class="search-col container">
		<div class="search-input">
			<label>Departure</label>
			<select name = "Departure">
				<option value="" selected disabled >Select Departure</option>
				<option value="Colombo">Colombo</option>
				<option value="Monaragala">Monaragala</option>
				<option value="Kandy">Kandy</option>
				<option value="Kegalla">Kegalla</option>
				<option value="Badulla">Badulla</option>
				<option value="kaluthara">kaluthara</option>
				<option value="Galle">Galle</option>
				<option value="Mathara">Mathara</option>
				<option value="Madakalapuwa">Madakalapuwa</option>
				<option value="Ampara">Ampara</option>
				<option value="Gampaha">Gampaha</option>
				<option value="Peradeniya">Peradeniya</option>
			</select>
		</div>
		<div class="search-input">
			<label>Arrival</label>
			<select required name="arrival">
			<select name="Arrival">
				<option value="" selected disabled >Select Arrival</option>
				<option value="Colombo">Colombo</option>
				<option value="Monaragala">Monaragala</option>
				<option value="Kandy">Kandy</option>
				<option value="Kegalla">Kegalla</option>
				<option value="Badulla">Badulla</option>
				<option value="kaluthara">kaluthara</option>
				<option value="Galle">Galle</option>
				<option value="Mathara">Mathara</option>
				<option value="Madakalapuwa">Madakalapuwa</option>
				<option value="Ampara">Ampara</option>
				<option value="Gampaha">Gampaha</option>
				<option value="Peradeniya">Peradeniya</option>
			</select>
		</div>
		<div class="search-input">
			<label>Date</label>
			<input type="date" name="date" id="sh-date" min="<?php echo date('Y-m-d');?>">
		</div>
	</div>
	<center>
		<input class="bus-btn" type="submit" name="submit" value ="submit">
	</center>
	</form>
</div><!-- /search-bus -->

<div class="service-type container"><!-- service-type -->
	<div class="st-header">
		<h1>Service Type</h1>
		<hr>
	</div>
	<div class="service-box">
		<div class="box">
			<h2>Normal</h2>
			<hr>
			<ul class="box-cont">
				<li>Not air-condition</li>
				<li>Normal seats</li>
				<li>Stop at almost all the bus stop</li>
			</ul>
		</div>
		<div class="box">
			<h2>Semi Luxury</h2>
			<hr>
			<ul class="box-cont">
				<li>Not air-condition</li>
				<li>There are curtains</li>
				<li>Better Seats</li>
				<li>Only stops at major bus stops.</li>
				<li>Faster</li>
			</ul>
		</div>
		<div class="box">
			<h2>Luxury</h2>
			<hr>
			<ul class="box-cont">
				<li>Air-condition</li>
				<li>Faster</li>
				<li>Better Seats</li>
				<li>Only stops at major bus stops.</li>
				<li>Wifi available</li>
			</ul>
		</div>
	</div>
</div><!-- /service-type -->

<?php include_once 'footer.php';?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>