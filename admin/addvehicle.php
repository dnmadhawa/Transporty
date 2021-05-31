<!DOCTYPE html>


<html>

	<head>
	
		<title>Transporty</title>
		<link type="text/css" rel="stylesheet" href="css/addvehicle.css">
		<link type="text/css" rel="stylesheet" href="css/admin-style.css">

	</head>




<body>


	 <?php include_once 'sidebar.php' ?> 

		<div class="container">

			<div class="backgrnd">
					<h3 class="heading1">Add Vehicle</h3>
					<hr>

					<div class="formborder" >
							<form>
							
								<div class="forminfo">
									<div class="label1">
										<label> Service Type </label>
										<label> Vehicle ID   </label>
										<label> Bus Model 	 </label>
										<label> Number 		 </label>
										<label> Seat Count 	 </label>
									</div>
									
									<div class="input1">
										<input type= "number" id="number" value="Number">
										<input type="text" id="bMOdel" placeholder="Bus Model">
										<input type= "text" id ="vID" placeholder="Vehicle ID">
										<input type="text" id ="stype" placeholder="Service Type">
										<input type="number" id="sCount" value="Seat Count">
										<input class="submit" type="submit" value="Submit">
									</div>
								</div>	

							</form>
							
					</div>
			
			</div>
		</div>




</body>

</html>