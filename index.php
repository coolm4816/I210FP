<?php
require_once('includes/database.php');
require_once('includes/header.php');
//require_once ('includes/cookies.php');
?>

<head>
    <title>Retro Video Game Store: Home | Retro Games</title>
</head>
<div class='back_color'>
    <div id="container">
        <header class='partone'>
            <h1></h1>

        </header>

        <di class="whole">
            <section class="main-section section-padding">
                <div class="content">
                    <div class="content-side right-side">
                        <div class="main-content">
                            <img src="images/dk-hd-12345.gif" alt="">
                        </div>
                    </div>
                    <div class="content-side left-side">
                        <div class="main-section-title">
                            <h3 class="section-title">
                                <span>Retro Video </span>Game Store
                            </h3>
                        </div>
                        <div class="section-text">
                            Here at Retro Games we offer a vast selection of retro gaming items ranging from all systems dating back to the 70’s including a number of games to go along with each console of choice. Retro Games specializes in all forms of gaming, including old board games of pristine condition, gaming collectibles including trading cards and action figures. Retro Games offers fair prices compared to all other online competitors, and we even do price matching to guarantee our customers get the best deals available.
                        </div>
                    </div>
                </div>
            </section>
            <section class="deals-section section-padding">
                <div class="home-page-deals">
                    <div class="section-title-div">
                        <span>Retro</span> Deals
                    </div>
                    <div class="all-deals">
                        <div class="dealone" class="single-deal">
                            <div class="deal-outer">
                                <div class="deal-image">
                                    <img src="images/p4.jpg" alt="">
                                </div>
                                <div class="deal-title">
                                    *FAN FAVORITE* Original NES Mario 123 Pak
                                </div>
                                <div class="deal-price">
                                    <span class="cut-price"><s>$239.99</s></span> <span class="current-price">$204.99</span>
                                </div>
                                <div class="deal-stars">

                                </div>
                                <div class="deal-review">
                                    161 Reviews
                                </div>
                            </div>
                        </div>
                        <div class="dealtwo" class="single-deal">
                            <div class="deal-outer">
                                <div class="deal-image">
                                    <img src="images/p1.jpg" alt="">
                                </div>
                                <div class="deal-title">
                                    *FAN FAVORITE* N64 Mario Zelda Pak
                                </div>
                                <div class="deal-price">
                                    <span class="cut-price"><s>$319.99</s></span> <span class="current-price">$269.99</span>
                                </div>
                                <div class="deal-stars">

                                </div>
                                <div class="deal-review">
                                    120 Reviews
                                </div>
                            </div>
                        </div>
                        <div class="dealthree" class="single-deal">
                            <div class="deal-outer">
                                <div class="deal-image">
                                    <img src="images/p2.jpg" alt="">
                                </div>
                                <div class="deal-title">
                                    Legend of Zelda Gold - NES Game
                                </div>
                                <div class="deal-price">
                                    <span class="cut-price"><s>$47.99</s></span> <span class="current-price">$39.99</span>
                                </div>
                                <div class="deal-stars">

                                </div>
                                <div class="deal-review">
                                    142 Reviews
                                </div>
                            </div>
                        </div>
                        <div class="dealfour" class="single-deal">
                            <div class="deal-outer">
                                <div class="deal-image">
                                    <img src="images/p3.jpg" alt="">
                                </div>
                                <div class="deal-title">
                                    Super Mario Sunshine - GameCube Game
                                </div>
                                <div class="deal-price">
                                    <span class="cut-price"></span> <span class="current-price">$52.99</span>
                                </div>
                                <div class="deal-stars">

                                </div>
                                <div class="deal-review">
                                    75 Reviews
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    require_once('includes/banner.php')
                    ?>
                    <form action="deals.php" method="get">
                    <div class="deal-button">
                        <button type="submit" class="site-button">Shop More Deals</button>
                    </div>
                    </form>
                </div>
            </section>
    </div>
    <script src="retrogame.js"></script>
    <?php
    require_once('includes/footer.php');
    ?>