
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel='stylesheet' href='main_styles.css'>
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
                        <a href='../login/login.php' class='nav-login'><img src='../images/account.svg'>
                        <?php
                        
    
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
                        <a class="nav-link active" aria-current="page" href="main.php">Home</a>
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
                        <a class='nav-link active' href='../contact/contact.php' aria-current='page' id='contact_padding'>Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <figure>
        <img src='../images/pic_big.jpg' class='main_image'>
    </figure>

    <form method='get' action='../cart/db.php'>
    <div class="container p-0 mt-5 mb-5">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/6/9/6926410320610.webp'
                        class="card-img-top" alt="..."><!--done-->

                    <div class="card-body text-center">
                        <h5 class="card-title">Baija A-kuan Big Boss Vermicelli - Spicy Hot Flavour 100g</h5>
                        <h4 class="card-text text-danger">£2.00</h4>
                        <input type="submit" class="btn btn-outline-primary" name='1' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/6/9/6926410338165.webp'
                        class="card-img-top" alt="..."><!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Baija A-kuan Big Boss Vermicelli - Hot & Sour Vermicelli 145g</h5>
                        <h4 class="card-text text-danger">£2.00</h4>
                        <input type="submit" class="btn btn-outline-primary" name='2' value='Add to cart'></input>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/6/9/6926410320634.webp'
                        class="card-img-top" alt="..."> <!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Baija A-kuan Big Boss Vermicelli - Spice & Sesame Flavour 112g</h5>
                        <h4 class="card-text text-danger">£2.00</h4>
                        <input type="submit" class="btn btn-outline-primary" name='3' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/6/9/6926410320115_0.webp'
                        class="card-img-top" alt="..."><!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Baija A-kuan Sichuan Broad Noodle - Hot & Sour Flavour 115g</h5>
                        <h4 class="card-text text-danger">£1.50</h4>
                        <input type="submit" class="btn btn-outline-primary" name='4' value='Add to cart'></input>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-0 mt-5 mb-5">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/6/9/6926410337236_2.webp'
                        class="card-img-top" alt="..."> <!--done-->

                    <div class="card-body text-center">
                        <h5 class="card-title">Baija A-kuan Sichuan Broad Noodle - Sesame Paste Flavour 120g</h5>
                        <h4 class="card-text text-danger">£1.50</h4>
                        <input type="submit" class="btn btn-outline-primary" name='5' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/6/9/6926410332743_00.webp'
                        class="card-img-top" alt="..."> <!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Baija A-kuan Sichuan Broad Noodle - Spicy Flavour 125g</h5>
                        <h4 class="card-text text-danger">£1.50</h4>
                        <input type="submit" class="btn btn-outline-primary" name='6' value='Add to cart'></input>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801073110502_halal.webp'
                        class="card-img-top" alt="..."> <!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Samyang Buldak Hot Chicken Flavour Ramen - Original 140g</h5>
                        <h4 class="card-text text-danger">£1.25</h4>
                        <input type="submit" class="btn btn-outline-primary" name='7' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/0/7/074603003287_2.webp'
                        class="card-img-top" alt="..."> <!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Samyang Kimchi Ramen 120g</h5>
                        <h4 class="card-text text-danger">£1.25</h4>
                        <input type="submit" class="btn btn-outline-primary" name='8' value='Add to cart'></input>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-0 mt-5 mb-5">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801073113893.webp'
                        class="card-img-top" alt="..."> <!--done-->

                    <div class="card-body text-center">
                        <h5 class="card-title">Samyang Buldak Hot Chicken Flavour Ramen - Carbonara 130g</h5>
                        <h4 class="card-text text-danger">£1.25</h4>
                        <input type="submit" class="btn btn-outline-primary" name='9' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801073113312.webp'
                        class="card-img-top" alt="..."> <!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Samyang Buldak Hot Chicken Flavour Ramen - Cheese 140g</h5>
                        <h4 class="card-text text-danger">£1.25</h4>
                        <input type="submit" class="btn btn-outline-primary" name='10' value='Add to cart'></input>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801073114531_0.webp'
                        class="card-img-top" alt="..."><!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Samyang Buldak Hot Chicken Flavour Ramen - Kimchi 135g</h5>
                        <h4 class="card-text text-danger">£1.25</h4>
                        <input type="submit" class="btn btn-outline-primary" name='11' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801043150620_7.webp'
                        class="card-img-top" alt="..."> <!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Nongshim Shin Ramyun 120g</h5>
                        <h4 class="card-text text-danger">£1.25</h4>
                        <input type="submit" class="btn btn-outline-primary" name='12' value='Add to cart'></input>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-0 mt-5 mb-5">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4">

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801043022002_2021.webp'
                        class="card-img-top" alt="..."><!--done-->

                    <div class="card-body text-center">
                        <h5 class="card-title">Nongshim Kimchi Ramyun 120g (Pack of 5)</h5>
                        <h4 class="card-text text-danger">£5.00</h4>
                        <input type="submit" class="btn btn-outline-primary" name='13' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/mf_webp/jpg/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801043951685_3.webp'
                        class="card-img-top" alt="..."><!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Nongshim Shin Ramyun 120g (Pack of 20)</h5>
                        <h4 class="card-text text-danger">£17.00</h4>
                        <input type="submit" class="btn btn-outline-primary" name='14' value='Add to cart'></input>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801073140578_1.jpg'
                        class="card-img-top" alt="..."><!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Samyang Buldak Hot Chicken Flavour Ramen - Original 140g (Pack of 5)</h5>
                        <h4 class="card-text text-danger">£6.00</h4>
                        <input type="submit" class="btn btn-outline-primary" name='15' value='Add to cart'></input>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">

                    <img src='https://d1jdlez3mwxs70.cloudfront.net/media/catalog/product/cache/bd26b567513db19db6f02247c8975b01/8/8/8801073141780_1.jpg'
                        class="card-img-top" alt="..."><!--done-->
                    <div class="card-body text-center">
                        <h5 class="card-title">Samyang Buldak Hot Chicken Flavour Ramen - Cheese 140g (Pack of 5)</h5>
                        <h4 class="card-text text-danger">£7.00</h4>
                        <input type="submit" class="btn btn-outline-primary" name='16' value='Add to cart'></input>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>


    <footer class="text-center text-lg-start" style="background-color: #ffc107;">
        <div class="container d-flex justify-content-center py-5">
        </div>
            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        </div>
    </footer>

    <?php
    if(isset($_GET['submit'])){
        print_r($_GET);    }


    ?>
</body>


</html>