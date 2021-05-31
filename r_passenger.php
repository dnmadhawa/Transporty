<?php
session_start();
include 'inc/connection.php';

$errors = array();

if (isset($_POST['submit'])) {
    if (empty($_POST['fname'])) {
        $errors[] = 'Input First Name';
    }
}
