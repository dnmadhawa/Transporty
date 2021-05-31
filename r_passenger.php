<?php
session_start();
include 'inc/connection.php';

$errors = array();
$fname = '';
$lname = '';
$email = '';
$password = '';
$c_password = '';
$m_number = '';

    $fname  = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $m_number = $_POST['m_number'];
if (isset($_POST['submit'])) {

    $fname  = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $m_number = $_POST['m_number'];

    $req_fields = array('fname','lname','email','password','c_password','m_number');

        foreach ($req_fields as $field) {
            if (empty(trim($_POST[$field]))) {
            $errors[] = $field.' is required';
            }
        }

    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $query = "SELECT * FROM passenger WHERE email = '{$email}' LIMIT 1";

    $result_set = mysqli_query($connection, $query);

    if ($result_set) {
        if (mysqli_num_rows($result_set) == 1) {
            $errors[] = 'E-Mail address already registered';
        }
    }        

    if (empty($errors)) {

        $fname = mysqli_real_escape_string($connection, $_POST['fname']);
        $lname = mysqli_real_escape_string($connection, $_POST['lname']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $c_password = mysqli_real_escape_string($connection, $_POST['c_password']);
        $m_number = mysqli_real_escape_string($connection, $_POST['m_number']);
        $hashed_password = sha1($password);

        $query = "INSERT INTO `passenger` (`p_id`, `fname`, `lname`, `email`, `password`, `mnumber`, `rp_date`) VALUES (NULL, '{$fname}', '{$lname}', '{$email}', '{$hashed_password}', '{$m_number}', NOW())";

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: login.php');
        } else {
            $errors[] = 'Failed to add the user';
        }
    }
            










}
