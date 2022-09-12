<?php

if (isset($_POST['update'])) {
    $email = $_POST['email'];
    $confirm_email = $_POST['confirm_email'];
    $pwd = $_POST['pwd'];
    $confirm_pwd = $_POST['confirm_pwd'];
    $mobile = $_POST['mobile'];
    $confirm_mobile = $_POST['confirm_mobile'];
    $db_email = $_POST['email'];
    $first = $_POST['fname'];
    $lname = $_POST['lname'];


    if ($email == $confirm_email AND $pwd == $confirm_pwd AND $mobile == $confirm_mobile) {
        $conn = new mysqli('localhost', 'root', '', 'ramen_website');
        
        $sql = "UPDATE users SET email_id = '$email', password = '$pwd', mobile_no = '$mobile', first_name = '$first', last_name = '$lname' WHERE email_id = '$db_email'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Profile updated successfully')</script>";
        }} else {
            echo "<script>alert('Email, pwd or mobile does not match')</script>";
        }
    }



?>