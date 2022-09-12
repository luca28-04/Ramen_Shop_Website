<?php 
if (isset($_POST['user_login'])) {
    $conn = new mysqli('localhost', 'root', '', 'ramen_website');

        /* Check db if account exists */
    $stmt = $conn->prepare("SELECT * FROM users WHERE email_id = ? AND password = ?");
    $stmt->bind_param("ss", $email, $pwd);
    $email = $_POST['login_email'];
    $pwd = $_POST['login_password'];
    
    $stmt->execute();
    $stmt->store_result();
    $nrows = $stmt->num_rows();

        /* if account exists */
        
    if ($nrows > 0) {
        $_SESSION['is_logged']= true;

        $stmt = $conn->prepare("SELECT * FROM users WHERE email_id = ?"); 
        $stmt->bind_param("s", $email);
        $email = $_POST['login_email'];
        $stmt->execute(); 
        $stmt->store_result();
        $stmt->bind_result($id, $email, $pwd, $fname, $lname, $mobile);
        
        while ($stmt->fetch()) {
            $id = $id;
            $email = $email;
            $pwd = $pwd;
            $fname = $fname;
            $lname = $lname;
            $mobile = $mobile;
        }
        $_SESSION['fname'] = $fname;
        
        
         /* if account doesn't exist */
         } else {
            echo "<script>alert('This account is not registered')</script>";
            $_SESSION['is_logged'] = false;
            
         }};

        







?>