<?php
include 'inc/connection.php';


if (isset($_POST['submit'])) {

    $errors = array();

    if (empty($errors)) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = ($password);

        $query = "SELECT * FROM driver
                 WHERE email = '{$email}'
                 AND password = '{$hashed_password}'
                 LIMIT 1";

        $result_set = mysqli_query($connection, $query);

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {
                header('Location: index.php');

            } else {
                $errors[] = 'Invalid E-Mail/Password';
            }  
        } else {
            $errors[] = 'Database query failed'; 
        }          
    }
}
?>