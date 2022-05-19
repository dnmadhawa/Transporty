<!DOCTYPE html>
<html>
<head>
	<title>Contac us</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<?php include 'header.php';?>
	<br>
	<br>

<div class="slider container" align="center"><!-- slider -->
  	<img class="slide" src="img/banner/banner1.png">
  	<img class="slide" src="img/banner/banner2.png">
  	<img class="slide" src="img/banner/banner3.png">
  	<img class="slide" src="img/banner/banner4.png">
  	<img class="slide" src="img/banner/banner5.png">


  	<button class="slider-btn previous-btn" onclick="previous(-1)"><img src="img/previous.png"></button>
  	<button class="slider-btn next-btn" onclick="next(1)"><img src="img/next.png"></button>
</div><!-- /slider -->

<br>
<br>
<div class="reach" align="center"><!--reach-->
	<center>
	<h2>Reach Our Team</h2>
	<p>We love questions and feedback_and we are always happy to help!<br>Here are some ways to contact us</p>

</center>
</div><!--reach-->


<div class="ct-box">
<div class="talk"><!--talk-->
	<h4>Talk With Us</h4>
	<p>Chat with our team to solve your problem.</p>

    <div class="talk1"><!--talk-->
    
	<img src="img/phone22.png">
    <p>0112564260</p>
    </div><!--talk-->


</div><!--talk-->

<div class="customer_support"><!--customer_support-->
	<h4>Contact Customer Support</h4>
	<p>We are waiting to help you and your team</p>
	<center>
		<button onclick="myFunction()">Contact Support</button>

    <p id="demo"></p>

	</center>

</div><!--customer_support-->
</div>
<center>
<div class="head"><!--head-->
	<h3>Headquarters</h3>
	<br>
	<br>
	<br>
	<br>

	<div class="information"><!--information-->

		<div class="gmail"><!--gmail-->

           <img src="img/gmail.png">
           <p>transporty@gmail.com</p>

		</div><!--gmail-->

		<div class="number"><!--number-->
			<img src="img/telephone.png">
			<p>0112564260</p>

        </div><!--number-->

        <div class="location"><!--location-->
        	<img src="img/pin.png">
        	<p>Colombo 7 st.</p>

        </div><!--location-->

        <div class="time"><!--time-->
        	<img src="img/wall-clock.png">
        	<p>24 hours</p>

        </div><!--time-->




	</div><!--information-->
	


	<div class="map"><!--map-->
		
		<img src="img/map.png">

		<div class="location1"><!--location-->
			<img src="img/placeholder (1).png">

		</div><!--location-->


	</div><!--map-->
	
</div><!--head-->

</center>


<?php include'footer.php'?>

<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
</body>
</html>