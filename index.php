<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Grocery Store</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body class="grid">
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Grocery Store</a>
            <div class="nav__menu" id="nav-menu">
                <?php
                    include("includes/menu.php");
                ?>
                <i class="uil uil-times nav__close" id="nav-close"></i>
            </div>
            <div class="nav__btns">
                <div class="nav__toggle" id="nav-toggle">
                    <i class="uil uil-bars"></i>
                </div>
            </div>
        </nav>
    </header>
    <!-- Main -->
    <main>
        <section class="background">
            <div class="section__background">
                <h2>Grocery at home</h2>
            <h1>Your Daily <span>Needs</span> </h1>
            <button>Shop Now</button>
            </div>
        </section>
        <?php
            include("includes/popular-stores.php")
        ?>
        <section class="section">
            <h1 class="section__title">Shop By Category</h1>
            <div class="section__category grid">
                <!-- <div class="section__category-box b1">
                    <img src="assets/images/beverages.png" alt="">
                    <h3>beverages and drinks</h3>
                </div>
                <div class="section__category-box">
                    <img src="assets/images/fruits.png" alt="">
                    <h3>Fruits and vegetables</h3>
                </div>
                <div class="section__category-box">
                    <img src="assets/images/baby products.png" alt="">
                    <h3>baby products</h3>
                </div>
                <div class="section__category-box">
                    <img src="assets/images/cosmetics.png" alt="">
                    <h3>personal care</h3>
                </div>
                <div class="section__category-box">
                    <img src="assets/images/grains.png" alt="">
                    <h3>cereals and grains</h3>
                </div> -->
                <?php
                    require('includes/config.php');
                    $query = "select * from category";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)){
                       
                        echo '
                        <a href="category.php?category_name='.$row['category_name'].'">
                        <div class="section__category-box">
                            <img src="'.$row['category_image'].'" alt="">
                            <h3>'.$row['category_name'].'</h3>
                        </div>
                        </a>
                        ';
                    }
                ?>

            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__container grid">
            <div class="footer__logo">
                <h1 class="footer__title">Grocery Store</h1>
                <span class="footer__subtitle">
                    Project by Shreyas, Rutuja & Sauhard.
                </span>
            </div>
            <div class="footer__about">
                <h1 class="footer__about-title">About</h1>
                <ul class="footer__links">
                    <li>
                        <a href="" class="footer__link">About Us</a>
                    </li>
                    <li>
                        <a href="" class="footer__link">Contact</a>
                    </li>
                    <li>
                        <a href="" class="footer__link">Return Policy</a>
                    </li>
                    <li>
                        <a href="" class="footer__link">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="store/store_application.php" class="footer__link">Apply Store</a>
                    </li>
                </ul>
            </div>
            
            <div class="footer__socials">
                <a href="https://github.com/" target="_blank" class="footer__social">
                    <i class="uil uil-github"></i>
                </a>
                <a href="https://www.linkedin.com/in//" target= "_black" class="footer__social">
                    <i class="uil uil-linkedin"></i>
                </a>
                <a href="https://www.instagram.com//" target= "_black" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://twitter.com/" target= "_black" class="footer__social">  
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
            <p class="footer__copy">&#169; Front End by Shreyas</p>
        </div>
    </footer>
    <!-- Scroll Up -->
    
    <a href="" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!-- Javascript -->
    <script src="assets/js/main.js"></script>

</body>
</html>