
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
					

					<div class="formborder" >
							<form action="addvehicledatabase.php" method="POST" class="vehicleform">
							

							<h3 class="heading1">Add Vehicle</h3>
							<hr style="height:2px;border-width:0;color:gray;background-color:gray">

								<div class="forminfo">
									<div class="label1">

										<label> Vehicle ID   </label>
										<label> Service Type </label>
										<label> Bus Model 	 </label>
										<label> Bus Number 	</label>
										<label> Seat Count 	 </label>
									</div>
									
									<div class="input1">

										<input type= "text"    name="v_id"    placeholder ="Vehicle ID">
										<input type="text"     name="s_type"    placeholder="Service Type">
										<input type= "text"    name="b_model"  placeholder="Bus Model">
										<input type="text"     name="b_num"    placeholder="Bus Number">
										<select  class="selects" name="s_count" placeholder="Seat Count" >
											<option  value="1"> 1 </option> 
											<option  value="1"> 2 </option>
											<option  value="1"> 3 </option>
											<option  value="1"> 4 </option>
										</select>

										<input class="submit" name="submit" id="submit" onclick="colorchange()" type="submit" value="Submit">
									</div>
								</div>	

							</form>
							
					</div>
			
			</div>
		</div>




</body>

</html>