<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php
                echo $_GET['category_name'];
                ?> | Grocery Store</title>
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
        <section class="category__title-container">
            <h1 class="category__title">
                <?php
                echo $_GET['category_name'];
                ?>
            </h1>
        </section>
        <section class="stores flex">
            <h1 class="section__title">Stores</h1>
            <div class="section__stores grid">
                <!-- <div class="section__store">
                    <div class="section__store-img">
                        <img src="assets/images/drinks/1.jpg" alt="">
                    </div>
                    <div class="section__store-text">
                        <h1>Store Name</h1>
                        <p>Pimpri chinchwad region - pune</p>
                    </div>
                </div>
                <div class="section__store">
                    <div class="section__store-img">
                        <img src="assets/images/drinks/04.jpg" alt="">
                    </div>
                    <div class="section__store-text">
                        <h1>Store Name</h1>
                        <p>Pimpri chinchwad region - pune</p>
                    </div>
                </div>
                <div class="section__store">
                    <div class="section__store-img">
                        <img src="assets/images/drinks/10.jpg" alt="">
                        
                    </div>
                    <div class="section__store-text">
                        <h1>Store Name</h1>
                        <p>Pimpri chinchwad region - pune</p>
                    </div>
                </div>
                <div class="section__store">
                    <div class="section__store-img">
                        <img src="assets/images/drinks/12.jpg" alt="">
                        
                    </div>
                    <div class="section__store-text">
                        <h1>Store Name</h1>
                        <p>Pimpri chinchwad region - pune</p>
                    </div>
                </div>
                <div class="section__store">
                    <div class="section__store-img">
                        <img src="assets/images/drinks/2.jpg" alt="">
                    </div>
                    <div class="section__store-text">
                        <h1>Store Name</h1>
                        <p>Pimpri chinchwad region - pune</p>
                    </div>
                </div>
                <div class="section__store">
                    <div class="section__store-img">
                        <img src="assets/images/drinks/23.jpg" alt="">
                    </div>
                    <div class="section__store-text">
                        <h1>Store Name</h1>
                        <p>Pimpri chinchwad region - pune</p>
                    </div>
                </div> -->
                <?php
                    require('includes/config.php');
                    $cat_name = $_GET['category_name'];
                    
                    $fetch_categoryID = "select * from category where category_name = '$cat_name'";

                    $categoryID = mysqli_query($conn, $fetch_categoryID);
                    $cat_result = mysqli_fetch_assoc($categoryID);
                    $value = $cat_result['category_id'];
                    $query = "select * from stores where store_categoryID = $value";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <a href="store.php?store_id='.$row['store_id'].'&store_name='.$row['store_name'].'&store_category='.$cat_name.'&store_region='.$row['store_region'].'">
                        <div class="section__store">
                            <div class="section__store-img">
                                <img src="'.$row['store_image'].'" alt="">
                            </div>
                            <div class="section__store-text">
                                <h1>'.$row['store_name'].'</h1>
                                <p>'.$row['store_region'].'</p>
                            </div>
                        </div>
                        </a>
                        ';
                    }
                ?>
            </div>
            <button>View All</button>
            
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