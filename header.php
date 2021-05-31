<?php
require_once('inc/connection.php');
require_once('driver.php');
require_once('passenger.php');
?>

<dv class="top-nav-bar container"><!-- top-nav-bar -->
	<div class="logo-d"><!-- logo-d -->
		<a class="logo" href="#"><img src="img/logo.png"></a>
	</div><!-- /logo-d -->
	<div class="login"><!-- login -->
		<input type="hidden" name="login" value="Login" onclick="location.href='login.php';">
		<img class="user-icon" src="img/user.png">
		<span class="user-name">
			<?php 
				if(isset($_SESSION['p_id'])) {
						echo $_SESSION['fname'];
					} else if(isset($_SESSION['d_id'])) {
							echo $_SESSION['fname'];
						} else { echo 'User';}  
					?>
					<img src="img/btn/down-arrow.svg" ></span>
            <ul id="user-dropdown" class="user-dropdown">
                <li><a href="login.php">Account activities</a></li>
                <li><a href="">Edit Profile</a></li>
                <li id="logout"><a href="logout.php">Logout</a></li>

            </ul>
	</div><!-- /login -->
</dv><!-- /top-nav-bar -->

<div class="nav-bar container"><!-- nav-bar -->
	<ul class="manu"><!-- manu -->
		<li><a href="home.php">Home</a></li>
		<li><a href="allschdule.php">All Schedule</a></li>
		<li><a href="servicetype.php">Service type</a></li>
		<li><a href="contact.php">Contact</a></li>
		<li><a href="about_us.php">About Us</a></li>
	</ul><!-- /manu -->
	<div class="search-box"><!-- search-box -->
		<a href=""><img src="img/search.png"></a>
		<input type="input" name="search" placeholder="Search">
	</div><!-- /search-box -->
</div><!-- /nav-bar -->