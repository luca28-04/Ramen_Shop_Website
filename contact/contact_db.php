<?php
$conn = new mysqli('localhost', 'root', '', 'ramen_website');

if(isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO contact (first_name, last_name, message, email) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $msg, $email);

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $msg = $_POST['message'];
    $email = $_POST['email'];

    $stmt->execute();
    $stmt->close();

}

?>

