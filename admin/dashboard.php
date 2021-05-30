<!DOCTYPE html>
<html>
<head>
	<title>Transporty</title>
	<link rel="shortcut icon" href="img/logo-icon.png">
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
</head>
<body>

<div class="nav-bar">
	<div class="header-nav">
		 <div class="logo-d"><!-- logo-d -->
			<a class="logo" href="#"><img src="../img/logo.png"></a>
		</div><!-- /logo-d -->
		<div class="login"><!-- login -->
			<img class="user-icon" src="../img/user.png">
			<span class="user-name">Administrator <img src="../img/btn/down-arrow.svg" ></span>
            <ul id="user-dropdown" class="user-dropdown">
                <li><a href="">Account activities</a></li>
                <li><a href="">Edit Profile</a></li>
                <li id="logout"><a href="../logout.php">Logout</a></li>

            </ul>
		</div><!-- /login -->
	</div>
	<div class="side-nav">
		<ul>
			<li><a href="#"><img class="side-img" src="img/icon/dashboard.svg">Dashboard</a></li>
			<li><a href="#"><img class="side-img" src="img/icon/bus.svg">Add Vahicle</a></li>
			<li><a href="#"><img class="side-img" src="img/icon/calendar.svg">Schedule</a></li>
			<li><a href="#"><img class="side-img" src="img/icon/gears.svg">Advanced</a></li>
		</ul>
	</div>
</div>


<div class="container">
	<div class="con-body">
		<h2>Dashboard</h2>
		<hr>
		<table>
			<tr>
				<th>ID</th>
				<th>Vehicle ID</th>
				<th>From - To</th>
				<th>Bookrd Seat</th>
				<th>Status</th>
			</tr>
			<tr>
				<td>1234</td>
				<td>ABC-1122</td>
				<td>Colombo - Kandy</td>
				<td>01.00a.m - 03.00a.m</td>
				<td>32</td>
				<td><button>Cancel</button></td>
			</tr>
		</table>
	</div>
</div>

</body>
</html>