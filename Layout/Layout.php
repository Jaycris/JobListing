<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">
        <title>Taskpro Outsourcing</title>
        <link rel="stylesheet" href="<?php echo web_root; ?>/Layout/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo web_root; ?>/Assets/FavIcon.png">
    </head>
    <body>
        
        <header>
            <div class="nav-bar">
                <a href="<?php echo web_root; ?>" class="Logo">
                    <img class="image-logo" src="<?php echo web_root; ?>/Assets/Taskpro-logo-white.png">
                </a>
                <div class="menu-btn"></div>
                <div class="navigation">
                    <div class="navigation-items">
                        <a href="https://taskproph.com/">Home</a>
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <?php if(isset($_GET['q'])) { if($_GET['q']=='./Pages/home.php'){echo 'active'; }
                        else{ echo ''; }} ?><a href="<?php echo web_root;?>index.php?q=./Pages/home.php">Careers</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </header>

        <?php require_once($content);?>

        <footer>
            <div class="row">
                <div class="col">
                    <img src="assets/Taskpro-logo-white.png" class="logo">
                    <p>TaskPro Outsourcing is an independent Philippine-based business process outsourcing company. It provides a wide range of services and solutions across various industries.
                        </p>
                </div>
                <div class="col">
                    <h3>Recruitment<div class="underline"><span></span></div></h3>
                    <p>Unit 209, 2nd Floor,</p>
                    <p>JDN IT Center, P. Remedio Street,</p>
                    <p>Mandaue City, Cebu 6014, Philippines</p>
                    <p class="email-id">taskpro@gmail.com</p>
                    <p>Globe: +63 995 790 8680</p>
                    <p>Smart: +63 969 421 3238</p>
                </div>
                <div class="col">
                    <h3>Quick Links <div class="underline"><span></span></h3>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Careers</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Newsletter <div class="underline"><span></span></h3>
                    <form>
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </form>
                    <div class="social-icons">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright">TASKPRO Outsourcing © 2022 | All Rights Reserved</p>
        </footer>
    </body>