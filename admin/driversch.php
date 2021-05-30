<html>
<head><title>Transporty</title>
<link rel="stylesheet" type="text/css" href="css/driversch.css">
<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
<body>

<?php include_once 'sidebar.php' ?>
<div class="container">
<div class="boarder">
<div class="center"><!--border-->
<h2>Schedule</h2>
<hr>

<form>
  <div class="lable">
  <label for="Service Vehicle">Service Vehicle</label><!--section option-->
  </div>
  <select_button>
  <select name="Select_Vehicle" id="Select_Vehicle" placeholder="Select">
    <option value="Normal">Normal</option>
    <option value="Semi-Luxury">Semi-Luxury</option>
    <option value="Luxury">Luxury</option>
  </select><!--/selection option-->
  <select_button>
  <br><br>
  <div class="lable">
  <label for="From">From</label>
  </div>
  <select name="From" id="From" placeholder="Select"><!--section option-->
    <option value="Colombo">Colombo</option>
    <option value="Monaragala">Monaragala</option>
    <option value="Kandy">Kandy</option>
	<option value="Kegalla">Kegalla</option>
	<option value="Badulla">Badulla</option>
  </select><!--/section option-->
  <input type="Time" value="Time" id="Time" placeholder="Time">
  <br><br>
  <div class="lable">
  <label for="To">To</label>
  </div>
  <select name="To" id="To" placeholder="Select"><!--section option-->
    <option value="Colombo">Colombo</option>
    <option value="Monaragala">Monaragala</option>
    <option value="Kandy">Kandy</option>
	<option value="Kegalla">Kegalla</option>
	<option value="Badulla">Badulla</option>
  </select><!--/section option-->
  <input type="Time" value="Time" id="Time" placeholder="Time">
  <br><br>
  <div class="lable">
   <label for="Date">Date</label>
   </div>
  <input type="date" id="Date" name="Date" placeholder="DD-MM-YYYY">
  <br><br>
  <div class="lable">
  <label for="Price per person">Price per person</label> 
  </div>
  <input type="Price"  id="Price" placeholder="Price">
  <br><br>
  
  <input type="submit" value="Add"><!--subit button-->
 </form> 
</div> <!--/border-->
</div>
</div>
</body>
</html>