<div class="nav-bar">
	<div class="header-nav">
		 <div class="logo-d"><!-- logo-d -->
			<a class="logo" href="#"><img src="../img/logo.png"></a>
		</div><!-- /logo-d -->
		
		<div class="search-box"><!-- search-box -->
		<a href=""><img src="img/search.png"></a>
		<input type="input" name="search" placeholder="Search">
		</div><!-- /search-box -->

		<div class="login"><!-- login -->
			<img class="user-icon" src="../img/user.png">
			<span class="user-name">
				<?php 
				if(isset($_SESSION['d_id'])) {
							echo $_SESSION['fname_d'];}
							?> <img src="../img/btn/down-arrow.svg" ></span>
            <ul id="user-dropdown" class="user-dropdown">
                <li><a href="account-settings.php">Edit Profile</a></li>
                <li id="logout"><a href="../logout.php">Logout</a></li>

            </ul>
		</div><!-- /login -->
	</div>
	<div class="side-nav"><!-- side-nav -->
		<ul>
			<li><a href="dashboard.php"><img class="side-img" src="img/icon/dashboard.svg">Dashboard</a></li>
			<li><a href="addvehicle.php"><img class="side-img" src="img/icon/bus.svg">Add Vahicle</a></li>
			<li><a href="driversch.php"><img class="side-img" src="img/icon/calendar.svg">Schedule</a></li>
			<li><a href="account-settings.php"><img class="side-img" src="img/icon/gears.svg">Account Settings</a></li>
		</ul>
	</div><!-- /side-nav -->
</div>