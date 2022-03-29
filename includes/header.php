<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <header class="header">
        <div class="site-navigation">

            <ul class="site-navs">
                <div class=site-logo align=center>
                    <a href="index.php"><img src="images/retrologo.png"></a>

                </div>
                <li class="navs"><a href="index.php">Home</a></li>

                <div class="dropdown" class="navs">
                    <li class="dropbtn">Products</li>
                    <div class="dropdown-content">
                        <a href="products.php">All Products</a>
                        <a href="games.php">Games</a>
                        <a href="consoles.php">Consoles</a>
                        <a href="boards.php">Board Games</a>
                        <a href="figures.php">Action Figures</a>
                        <a href="deals.php">Retro Deals</a>
                    </div>
                </div>
                <div class="dropdown" class="navs">
                    <li class="dropbtn">Account</li>
                    <div class="dropdown-content">
                        <a href="signin.php">Sign In</a>
                        <a href="register.php">Create Account</a>
                    </div>
                </div>
                <div class="dropdown" class="navs">
                    <li class="dropbtn">About Us</li>
                    <div class="dropdown-content">
                        <a href="about.php">Our Team</a>
                    </div>
                </div>
                <div class="dropdown" class="navs">
                    <li class="dropbtn"><a href="cart.php">Cart</a></li>
                </div>
                <ul class="navs" class="nav">
                    <li id="search">
                        <form action="products.php" method="get">
                            <input type="text" name="search_text" id="search_text" placeholder="Search..." />
                            <button type="submit" name="search_button" id="search_button" placeholder="Go"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>


                <script src="prefixfree-1.0.7.js" type="text/javascript"></script>

            </ul>
        </div>
    </header>