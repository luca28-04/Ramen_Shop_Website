<?php
include 'register_db.php';
?>
<?php
include 'login_db.php';
?>
<?php
include 'user_details.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='login_styles.css'>
    <title>Document</title>
</head>

<body>

    <div>
        <nav class="navbar navbar-light bg-light">

            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <img src='https://cdn.shopify.com/s/files/1/0126/6014/6240/files/Instantramenshop_Logo_big2022v2_180x.png?v=1643514476'
                    class='logo'>

                <ul class='nav'>
                    <li class='login'>
                        <a href='login.php' class='nav-login'><img src='../images/account.svg'>
                        
                        <?php if(isset($_SESSION['is_logged'])) {echo $_SESSION['fname'];} else {echo 'login';} 
                        ?>
                        </a>

                    </li>
                    <li class='cart'>
                        <a href='' class='nav-cart'><img src='../images/shop_cart.svg'>Cart</a>
                    </li>
                </ul>

            </div>

        </nav>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid2">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id='nav_container'>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../main/main.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current='page'>About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Instant ramen
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">All Instant Ramen</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Spicy Instant Ramen</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Non-spicy Instant Ramen</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class='dropdown-item' href='#'>Instant Ramen Multi-Packs</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current='page'>Ingredients and Toppings</a>
                    </li>

                    <li class='nav-item'>
                        <a class='nav-link active' href='#' aria-current='page'>Shipping</a>
                    </li>

                    <li class='nav-item'>
                        <a class='nav-link active' href='../contact/contact.php' aria-current='page'
                            id='contact_padding'>Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <figure>
        <img src='../images\pic_big.jpg' class='main_image' >
    </figure>

    <!--User details form -->
    <form method='post' id='user_details' style="<?php if(isset($_SESSION['is_logged'])) {echo 'visibility: visible';} else {echo 'visibility: hidden';}?>">
        <h3>My Details</h3>
        <br><br>
        <div>
            <div>
                <h4>Login Details</h4>
                <label>
                    <input style='margin-right:10px' type='text' name='email' placeholder='Email Address:'
                    value= "">
                </label>
                <label>
                    <input type='password' name='pwd' placeholder='Password:'
                    value="">
                </label>
            </div> <br>
            <div>
                <label>
                    <input style='margin-right:10px' type='text' name='confirm_email'
                        placeholder='Confirm Email Address:'>
                </label>
                <label>
                    <input type='text' name='confirm_pwd' placeholder='Confirm Password:'>
                </label>
            </div>
        </div>
        <div> <br>
            <div>
                <h4>Personal Details</h4>
                <label>
                    <input style='margin-right: 10px' type='text' name='fname' placeholder='First Name:'
                    value="">
                </label>
                <label>
                    <input type='text' name='mobile' placeholder='Mobile:'>
                </label>
            </div> <br>
            <div>
                <label>
                    <input style='margin-right: 10px' type='text' name='lname' placeholder='Last Name:'>
                </label>
                <label>
                    <input type='text' name='confirm_mobile' placeholder='Confirm Mobile:'>
                </label>
            </div>
        </div>
        <div> <br>
                <label>
                    <input type='submit' name='update' value='Update Details'>
                </label>
                <label>
                    <input type='submit' name='delete' value='Logout'>
                </label>
            </div>
        

    </form>



    <!--register form-->
    <form method="post" id='register_form' class='form' style="<?php if(!isset($_SESSION['is_logged'])) {echo 'visibility: visible';} else {echo 'visibility: hidden';}  ?>">
        <h3>Register now</h3>
        <br>
        <br>

        <div>
            <h4>Login Details:</h4>
            <label>
                <input type="text" name="email" id="email" placeholder="Email:">
            </label>
            <label>
                <input type="password" name="password" id="password" placeholder="Password:">
            </label>
        </div> <br>
        <div>
            <label>
                <input type='text' name='Confirm_email' placeholder='Confirm Email:'>
            </label>
            <label>
                <input type='password' name='Confirm_password' placeholder='Confirm Password:'>
            </label>
        </div>
        <div>
            <br>



            <div>
                <h4>Personal Details:</h4>
                <label>
                    <input type='text' name='first_name' placeholder='First Name:'>
                </label>
                <label>
                    <input type='text' name='mobile' placeholder='Mobile Number:'>
                </label>
            </div>
            <br>
            <div>
                <label>
                    <input type='text' name='last_name' placeholder='Last Name:'>
                </label>
                <label>
                    <input type='text' name='confirm_mobile' placeholder='Confirm Mobile:'>
                </label>
            </div>

            <div class='shipping'>
                <br>
                <h4>Shipping Address:</h4>
                <div>
                    <label>
                        <input type='text' name='address' placeholder='Address:'>
                    </label>
                    <label>
                        <input type='text' name='postcode' placeholder='Postcode:'>
                    </label>
                </div>
                <div>
                    <br>
                    <label>
                        <input type='text' name='city' placeholder='City:'>
                    </label>

                </div>
            </div>
            <br>
            <label>
                <input type='submit' name='register' value='Register'>
            </label>
    </form>


    <!-- user login form -->
    <form method='post' class='form' style="<?php if (isset($_SESSION['is_logged'])) echo 'visibility: visible';?>">
        <span id='user_login_form'>
            <h3 class='header_login'>Login To Your Account</h3>
            <br>
            <div>
                <h4>Login</h4>
                <div>
                    <label>
                        <input type='text' name='login_email' placeholder="Email:" 
                        value="">
                    </label>
                </div>
                <br>
                <div>
                    <label>
                        <input type='password' name='login_password' placeholder="Password:" 
                        value="">
                    </label>
                </div>
            </div>
            <br>
            <div>
                <label>
                    <input type='submit' name='user_login' value='Login'>
                </label>
            </div>

        </span>
    </form>


    <div class=' whitespace'>
    </div>
    <div>
        <footer class="text-center text-lg-start" style="background-color: #ffc107;" id='footer'>
            <div class="container d-flex justify-content-center py-5">
            </div>
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            </div>
        </footer>
    </div>




</body>

</html>