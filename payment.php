

<!DOCTYPE html>

<html>

	<head>
	
		<link type="text/css" rel="stylesheet" href="css/payment.css">
		<link type="text/css" rel="stylesheet" href="css/style.css">
																																															
	</head>
	
	<body>

		<?php include_once 'header.php';?>
		
		
		<div class="formchanger">


			<div class="butchangemarg">
		
				<button  class="butchange" type="button"  onclick="form1()">Visa/Master</button>
				<button  class="butchange" type="button"  onclick="form2()" >Genie</button>
				<button  class="butchange" type="button"   onclick="form3()" >eZ Cash</button>
				<button  class="butchange" type="button"  onclick="form4()">PayPal</button>

			</div>
			
			
			<div class="formbackgrnd" id ="a">
			
				<form class="abc">
				
					<h3 class="headings">Visa/Master</h3>
					
					<div class="inputs">
						<label for="cNumber"> Card Number</label><br>
						<input type="Number" id="cNum">
					</div>
					
					<p>Card Expiry Date</p>
					
					<div class="devider">
					
						<div class="inputs"	>
							<label>Month</label><br>
							<select  id="month">
							<option value="january">January</option>
							<option value="february">February</option>
							<option value="march">March</option>
							<option value="april">April</option>
							</select>
						</div>
						
						<div class="inputs">
							<label>Year</label><br>
							<select  id="year">
							<option value="a">2021</option>
							<option value="b">2020</option>
							<option value="c">2019</option>
							<option value="d">2018</option>
							</select>
						</div>
						
						<div class="inputs">
							<label>cvc</label><br>
							<input type="number" value="cvc">
						</div>
					
					</div>
					
					
					<div class="inputs">
						<label>Amount</label><br>
						<input type="number" value="amnt">
					</div>
					
					<p>Enter your email or mobile to send your invoice</p>
					
					<div class="inputs">
						<label>Email</label><br>
						<input type="email" placeholder="abcd@gmail.com">
					</div>
					
					<div class="inputs">
						<label>Mobile Phone Number</label><br>
						<input type="number" placeholder="1234567">
					</div>
					
					<button class="buttons hcolor" >Pay</button>
					
				
				
				</form>
			
			</div>
		
		
		
		
		
			<div class="formbackgrnd" id ="b">
			
					<form class="abc">
				
						<h3 class="headings">Genie</h3><br>
						
						<div class="inputs">						
						<input type="Number" placeholder="Card Number"><br>
						<input type="month" placeholder="Expiry">
						<input type="number" placeholder="CVC"><br>
						</div>

						<div class="inputs">
						<select name="countrycode" >
						<option cCode="dz" value="213"> Algeria (+213)</option> 
						<option cCode="af" value="93"> Afganistan (+93)</option> 
						<option cCode="cn" value="86"> China (+86)</option> 
						<option cCode="sl" value="94"> Srilanka (+94)</option> 
						</select>
						</div>
						
						<div class="inputs">
						<input type="number" placeholder="Mobile Number"><br>
						</div>
												
						<button class="buttons hcolor">Pay</button>
					
					</form>
			
			</div>
		
		
			<div class="formbackgrnd" id ="c">
			
					<form class="abc">
					
							<h3 class="headings">eZ Cash</h3>
			
							<div class="inputs devide">
							
								<div class="labelcolumn">
									<label>Mobile Number/Alias</label>		
									<label>PIN</label>
								</div>
								
								<div class="inputcolumn">
									<input type="text" placeholder="Mobile eg:7**********">
									<input type="Number" placeholder="Enter your eZ cash pin">
								</div>
							
							</div>
												
							<button class="buttons hcolor">Reset</button>
							<button class="buttons submit hcolor">Submit</button>
							
					</form>
					
			</div>		
				
				
				
			<div class="formbackgrnd" id ="d">
				
				<form class="abc">
				
					<h3 class="headings">PayPal</h3>
					<label>Payment Details</label><br>
						
					<div class="inputs devide">	
				
						<div class="labelcolumn">
							<label>*Name</label>
							<label>*Email</label>
						</div>
							
						
						<div class="inputcolumn">
							<input type="text" placeholder="Name"><br>
							<input type="Email" placeholder="Email"><br>
						</div>
						
					</div>		
					
					<button class="buttons hcolor">Continue to PayPal</button>
							
				</form>
				
				
			</div>
	
	
		</div>

		<?php include_once 'footer.php';?>

	<script src="js/payment.js"></script>
	</body>

</html>