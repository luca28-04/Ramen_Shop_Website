<?php
include 'contact_db.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='contact_styles.css'>
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
                        <a href='../login/login.php' class='nav-login'><img src='../images/account.svg'><?php
                     session_start();
                     if(isset($_SESSION['is_logged'])) {
                        echo $_SESSION['fname'];
                    } else {
                        echo 'login';
                    }
                        ?>  
                        
                        </a>
                    </li>
                    <li class='cart'>
                        <a href='../cart/cart.php' class='nav-cart'><img src='../images/shop_cart.svg'>Cart</a>
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
                        <a class="nav-link active" href="" aria-current='page'>About</a>
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
                        <a class='nav-link active' href='contact.php' aria-current='page'
                            id='contact_padding'>Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <figure>
        <img src='../images/pic_big.jpg' class='main_image'>
    </figure>

    <div class='contact_form_container'>

        <form action='contact_db.php' method='post'>
            <div>
                <h4>First name</h4>
                <label>
                    <input type='text' id='first_name' name='first_name' placeholder='Your name...' value=></a>
                </label>
            </div>
            <div>
                <h4>Last name</h4>
                <label>
                    <input type='text' id='last_name' name='last_name' placeholder='Your last name...'>
                </label>
            </div>
            <div>
                <h4>Email</h4>
                <label>
                    <input type='text' id='email' name='email' placeholder='Your email...'>
                </label>
            </div>
            <div>
                <h4>Your message</h4>
                <label>
                    <textarea id='message' name='message' placeholder='Please type your message in here...'></textarea>
                </label>
            </div>
            <div>
                <label>
                    <input type='submit' name='submit' value='Submit'>
                </label>
            </div>
        </form>
    </div>

    <footer class="text-center text-lg-start" style="background-color: #ffc107;" id='footer'>
        <div class="container d-flex justify-content-center py-5">
        </div>
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        </div>
    </footer>

</body>

</html>