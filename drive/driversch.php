<!DOCTYPE html>
<head><title>Transporty</title>
<link rel="stylesheet" type="text/css" href="css/driversch.css">
<link rel="stylesheet" type="text/css" href="css/admin-style.css">
<script src="driversch.js"></script>
</head>
<body>

<?php include_once 'sidebar.php' ?>
<div class="container">
<div class="boarder">
<div class="line"><!--border-->
<h2>Schedule</h2>
<hr>

<form action="add_sch.php" method="POST">
  <div class="lable">
  <label for="Service Vehicle">Service Vehicle</label><!--section option-->
</div>
   <select name="Select_Vehicle" id="Select_Vehicle" placeholder="Select">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select><!--/selection option-->
  <br><br>
  <div class="lable">
  <label for="departure">departure</label>
  </div>
  <select name="departure" id="departure" placeholder="Select"><!--section option-->
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
  </select><!--/section option-->
  <input type="time" name="d_time" value="d_time" id="d_time" placeholder="time">
  <br><br>
  <div class="lable">
  <label for="arrival">arrival</label>
  </div>
  <select name="arrival" id="arrival" placeholder="Select"><!--section option-->
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
  </select><!--/section option-->
  <input type="time" name="a_time" value="a_time" id="a_time" placeholder="time">
  <br><br>
  <div class="lable">
   <label for="date">date</label>
   </div>
  <input type="date" id="date" name="sch_date" placeholder="DD-MM-YYYY">
  <br><br>
  <div class="lable">
  <label for="price">price</label> 
  </div>
  <input type="price" name="price" id="price" placeholder="price">
  <br><br>
  <input type="submit" name="submit"value="Add"><!--subit button-->

 </form> 
</div> <!--/border-->
</div>
</div>
</body>
</html>