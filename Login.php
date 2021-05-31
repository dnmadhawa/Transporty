<?php
include 'driver.php';
include 'passenger.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login to Transporty</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="js/login.js"></script>
</head>

<body>
    <div class="main">
        <img src="img/logo.png" alt="logo">
        <div class="fbox">
            <div class="btn_box">
                <div class="btn_top" id="btn_top"></div>
                <button type="button" class="btn" onclick="passenger()">Login as Passenger</button>
                <button type="button" class="btn" onclick="driver()">Login as Driver</button>
            </div>

            <?php 
                if (isset($errors) && !empty($errors)) {
                    echo '<p class="error"> Invalid Username / Password </p>';
                }
            ?>
                
            <form class="form" id="form1" action="login.php" method="post">
                <center>
                    <h1>Driver Login</h1>
                </center>
                <input type="text" id="email" name="email" class="txt_box" placeholder="E-Mail" required>
                <input type="text" id="pwd" name="password" class="txt_box" placeholder="Password" required>
                <button type="submit" id="submit" name="submit">Login</button> 
                <div class="links">
                    <center>
                        <a href="">Forgot Password?</a><br>
                        <a href="">New user?</a>
                    </center>
                </div>
            </form>
            <form class="form" id="form2" action="login.php" method="post">
                <center>
                    <h1>Passenger Login</h1>
                </center>
                <input type="text" id="email" name="p_email" class="txt_box" placeholder="E-Mail" required>
                <input type="text" id="pwd" name="p_password" class="txt_box" placeholder="Password" required>
                <input type="submit" id="submit" value="Login" name="p_submit">
                <center>
                    <a href="">Forgot Password?</a><br>
                    <a href="reg.php">New user?</a>
                </center>
            </form>
        </div>
    </div>
</body>

</html>