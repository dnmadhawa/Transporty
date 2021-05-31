
<html>
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
    <option value="1">Normal</option>
    <option value="2">Semi-luxury</option>
    <option value="3">Luxury</option>
  </select><!--/selection option-->
  <br><br>
  <div class="lable">
  <label for="From">From</label>
  </div>
  <select name="From" id="From" placeholder="Select"><!--section option-->
    <option value="1">Colombo</option>
    <option value="2">Monaragala</option>
    <option value="3">Kandy</option>
  <option value="4">Kegalla</option>
  <option value="5">Badulla</option>
  </select><!--/section option-->
  <input type="Time" name="Time" value="Time" id="Time" placeholder="Time">
  <br><br>
  <div class="lable">
  <label for="To">To</label>
  </div>
  <select name="To" id="To" placeholder="Select"><!--section option-->
    <option value="1">Colombo</option>
    <option value="2">Monaragala</option>
    <option value="3">Kandy</option>
  <option value="4">Kegalla</option>
  <option value="5">Badulla</option>
  </select><!--/section option-->
  <input type="Time" name="Time" value="Time" id="Time" placeholder="Time">
  <br><br>
  <div class="lable">
   <label for="Date">Date</label>
   </div>
  <input type="date" id="Date" name="Date" placeholder="DD-MM-YYYY">
  <br><br>
  <div class="lable">
  <label for="Price per person">Price per person</label> 
  </div>
  <input type="Price" name="Price" id="Price" placeholder="Price">
  <br><br>
  <div class="lable">
  <input type="submit" name="submit"value="Add"><!--subit button-->
  </div>
 </form> 
</div> <!--/border-->
</div>
</div>
</body>
</html>