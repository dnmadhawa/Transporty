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
				<h4>user name</h4>
				<div class="user-ids">
					<h4>NIC :</h4>
					<p>123658958v</p>
				</div>
				<div class="user-ids">
					<h4>Driving licence No :</h4>
					<p>123658958v</p>
				</div>
			</div>
			<div class="user-details">
				<div class="us-data">
					<div class="us-label">
						<label>First Name</label>
					</div>
					<div class="us-input">
						<input type="text" name="fname" required>
					</div>
				</div>
				
				<div class="us-data">
					<div class="us-label">
						<label>Last Name</label>
					</div>
					<div class="us-input">
						<input type="text" name="lname" required>
					</div>
				</div>

				<div class="us-data">
					<div class="us-label">
						<label>Email</label>
					</div>
					<div class="us-input">
						<input type="email" name="email" required>
					</div>
				</div>

				<div class="us-data">
					<div class="us-label">
						<label>Address</label>
					</div>
					<div class="us-input">
						<input type="text" name="address" required>
					</div>
				</div>

				<div class="us-data">
					<div class="us-label">
						<label>Old Password</label>
					</div>
					<div class="us-input">
						<input type="text" name="o_password">
					</div>
				</div>
				<div class="us-data">
					<div class="us-label">
						<label>New Password</label>
					</div>
					<div class="us-input">
						<input type="text" name="n_password">
					</div>
				</div>
				<div class="us-data">
					<div class="us-label">
						<label>Confirm Password</label>
					</div>
					<div class="us-input">
						<input type="text" name="c_password">
					</div>
				</div>

				<div class="us-data btn">
					<input type="submit" name="submit" value="Update">
				</div>

			</div>
		</div>
	</div>
</div>

</body>
</html>