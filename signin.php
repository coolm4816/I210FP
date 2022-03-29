<?php
require_once('includes/database.php');
require_once('includes/header.php');
?>
<head><title>Retro Video Game Store: Sign In | Retro Games</title></head>
    <section class="main-section section-padding">
        <div class="page-navigation">
            <ul>
                <li class="page-navsli page-nav"><a href="#">Home</a></li>
                <li class="page-navsli page-nav">></li>
                <li class="page-navsli page-nav">Sign In</li>
            </ul>
        </div>
        <div class="register-content">
            <div class="register-div">
                <div class="register-heading">
                    Sign In
                </div>
                <div class="register-text">
                    Sign in now to redeem your rewards!
                </div>
            </div>
            <div class="register-form">
                <div class="form-groups">
                    
                    <div class="input-div">
                        <input type="text" class="input-field" placeholder="Username">
                    </div>
                </div>
                <div class="form-groups">
                    <div class="input-div">
                        <input type="text" class="input-field" placeholder="Password">
                    </div>
                    <div class="input-div">
                        <button class="submit-button">Sign in</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
require_once('includes/footer.php');
?>