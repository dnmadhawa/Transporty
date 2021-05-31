<?php  require_once('../inc/connection.php');


	$query = "SELECT * FROM `driver` WHERE d_id = 1";

	if ( $sql=mysqli_query($connection, $query)) {
		$row =mysqli_fetch_assoc($sql);
		$fname = "{$row['fname']}";
		 	$lname = "{$row['lname']}";
		 	$email = "{$row['email']}";
		 	$nic = "{$row['nic']}";
		 	$lic = "{$row['lic']}";
		 	$address = "{$row['address']}";
		 }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
	<link rel="shortcut icon" href="img/logo-icon.png">
	<link rel="stylesheet" type="text/css" href="css/account-settings.css">
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
<body>

<?php include_once 'sidebar.php'; ?>


<div class="container">
	<div class="con-body">
		<h2>Dashboard</h2>
		<hr>

		<div class="user-data">
			<div class="user-ps">
				<center>
				<img class="user-img" src="../img/user.png">
				</center>
				<h4><?php echo $fname ." ". $lname?></h4>
				<div class="user-ids">
					<h4>NIC :</h4>
					<p><?php echo $nic ?></p>
				</div>
				<div class="user-ids">
					<h4>Driving licence No :</h4>
					<p><?php echo $lic ?></p>
				</div>
			</div>
			<div class="user-details">
				<form action="changepassword.php" method="POST">
					<div class="us-data">
						<div class="us-label">
							<label>First Name</label>
						</div>
						<div class="us-input readonly">
							<input type="text" name="fname" value="<?php echo $fname?>" required readonly>
						</div>
					</div>
					
					<div class="us-data">
						<div class="us-label">
							<label>Last Name</label>
						</div> 
						<div class="us-input readonly">
							<input type="text" name="lname" value="<?php echo $lname?>" required readonly>
						</div>
					</div>

					<div class="us-data">
						<div class="us-label">
							<label>Email</label>
						</div>
						<div class="us-input readonly">
							<input type="email" name="email" value="<?php echo $email?>" required readonly>
						</div>
					</div>

					<div class="us-data">
						<div class="us-label">
							<label>Address</label>
						</div> 
						<div class="us-input readonly">
							<input type="text" name="address" value="<?php echo $address?>" required readonly>
						</div>
					</div>

					<div class="us-data">
						<div class="us-label">
							<label>Old Password</label>
						</div>
						<div class="us-input">
							<input type="text" name="o_password" id="oldpass">
						</div>
					</div>
					<div class="us-data">
						<div class="us-label">
							<label>New Password</label>
						</div>
						<div class="us-input">
							<input type="text" name="n_password" id="npass">
						</div>
					</div>
					<div class="us-data">
						<div class="us-label">
							<label>Confirm Password</label>
						</div>
						<div class="us-input">
							<input type="text" name="c_password" id="cpass">
						</div>
					</div>

					<div class="us-data btn">
						<input type="submit" name="submit" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 
<script type="text/javascript" src="js/accounts.js"></script> 
</body>
</html>