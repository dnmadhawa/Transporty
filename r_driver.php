<?php
session_start();
include 'inc/connection.php';

$errors = array();

if (isset($_POST['submit'])) {
    if (empty($_POST['lname'])) {
        $errors[] = 'Input First Name';
    }
}
