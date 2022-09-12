<?php
session_start();


if (isset($_POST['register'])) {
    $conn = new mysqli('localhost', 'root', '', 'ramen_website');

    $stmt = $conn->prepare("SELECT email_id FROM users WHERE email_id = ?");
    $stmt->bind_param("s", $email);
    $email = $_POST['email'];
    $stmt->execute();
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if ($rnum !== 0) {
        echo "<script>alert('Email already in use. Please login or use a different email.')</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (email_id, password, first_name, last_name, mobile_no) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $email, $password, $first_name, $last_name, $mobile);
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];       
        $last_name = $_POST['last_name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $stmt->execute();
    
        $user_id = "SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1;";
        $result = $conn->query($user_id);
        $row = $result -> fetch_assoc();
        $user_id = $row['user_id'];
        
        
        $stmt = $conn->prepare("INSERT INTO address (address, post_code, city, user_id) VALUES (?, ?, ?, ?);");
        $stmt->bind_param("ssss", $address, $postcode, $city, $user_id);
    
        $address = $_POST['address'];
        $postcode = $_POST['postcode'];
        $city = $_POST['city'];
        $stmt->execute();
    }
};



?>