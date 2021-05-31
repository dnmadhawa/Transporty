<?php
include 'inc/connection.php';

if (isset($_POST['p_submit'])) {

    $errors = array();

    if (empty($errors)) {
        $p_email = mysqli_real_escape_string($connection, $_POST['p_email']);
        $p_password = mysqli_real_escape_string($connection, $_POST['p_password']);
        $hashed_password = sha1($p_password);

        $query = "SELECT * FROM passenger
                 WHERE email = '{$p_email}'
                 AND password = '{$hashed_password}'
                 LIMIT 1";

        $result_set = mysqli_query($connection, $query);

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {
                header('Location: home.php');

            } else {
                $errors[] = 'Invalid E-Mail/Password';
            }  
        } else {
            $errors[] = 'Database query failed'; 
        }          
    }
}
?>