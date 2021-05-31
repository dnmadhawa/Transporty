<?php
if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    if ($user == 'p') {
        include 'r_passenger.php';
    } else {
        include 'r_driver.php';
    }
}
?>
<!DOCTYPE html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="css/reg.css">
    <script src="js/reg.js"></script>
</head>

<body>
    <div class="main">
        <center><img src="img/logo.png" alt="logo"></center>
        <form action="reg.php" method="post" class="form">
            <div class="form_items">
                <center>
                    <h1>User Registration</h1>

                    <?php
                        if (!empty($errors)) {
                            echo '<div class="msg">';
                            echo '<b>Error</b><br>';
                            foreach ($errors as $error) {
                                echo $error,'<br>';
                            }
                            echo '</div>';
                        }
                    ?>


                    <input type="text" name="fname" id="fname" placeholder="First Name" class="input_box1">
                    <input type="text" name="lname" id="lname" placeholder="Last Name" class="input_box1">
                    <br>
                    <input type="email" name="email" id="email" placeholder="E-Mail" class="input_box2"
                        pattern="[a-z 0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    <br>
                    <input type="password" name="password" id="pwd" placeholder="Password" class="input_box2"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,10}">
                    <br>
                    <input type="password" name="c_password" id="c_pwd" placeholder="Confirm Password"
                        class="input_box2">
                    <br>
                    <input type="tel" name="m_number" id="m_number" placeholder="Mobile Number" class="input_box2">
                    <br>
                    <lable for="usertype" class="usertype"> I'm a </lable>
                    <select id="usertype" name="user" onchange="showhidden()" class="usertypedropbox">
                        <option value="d">Driver</option>
                        <option value="p">Passenger</option>
                    </select>
                    <br>

                    <div class="driver_items" id="driver_items">
                        <input type="date" name="dob" id="dob" placeholder="Date of Birth" class="input_box2">
                        <br>
                        <input type="text" name="nic" id="nic" placeholder="NIC Number" class="input_box1">
                        <input type="text" name="lic" id="licence" placeholder="Driver Licence Number"
                            class="input_box1"><br>
                        <textarea id="address" name="address" rows="4" cols="50" placeholder="Address"
                            class="address"></textarea>
                    </div>
                    <input type="submit" class="submit_btn" name="submit" id="submit" value="Submit">
                </center>
            </div>
    </div>
</body>

</html>