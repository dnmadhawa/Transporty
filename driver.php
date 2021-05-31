<?php session_start(); ?>
<?php
include 'inc/connection.php';

if (isset($_POST['submit'])) {

    $errors = array();

    if (empty($errors)) {
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $hashed_password = sha1($password);

        $query = "SELECT * FROM driver
                 WHERE email = '{$email}'
                 AND password = '{$hashed_password}'
                 LIMIT 1";

        $result_set = mysqli_query($connection, $query);

        if ($result_set) {

            if (mysqli_num_rows($result_set) == 1) {

                $user = mysqli_fetch_assoc($result_set);
                $_SESSION['d_id'] = $user['id'];
                $_SESSION['fname_d'] = $user['fname'];
                
                header('Location: drive/dashboard.php');

            } else {
                $errors[] = 'Invalid E-Mail/Password';
            }  
        } else {
            $errors[] = 'Database query failed'; 
        }          
    }
}
?>