<?php session_start();
require('includes/config.php');
?>

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

    <main>
        <section class="category__title-container">
            <h1 class="category__title">
                Cart
            </h1>
        </section>
        <section class="recommended" id="recommended">
            <form action="cart_process.php" method="post">
            <div class="section-items grid" style="max-width: 968px;">
                <!-- <div class="item">
                    <img src="assets/images/store-drinks/all/1.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> 
                        <button>Remove from cart</button></p>
                    </div>
                </div> -->
                <?php
                    $total = 0;
                    
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $id => $x){
                            echo '
                            <div class="item">
                            <img src="'.$x['product_image'].'" alt="">
                            <div class="item-text grid">
                                <h3>'.$x['product_brand'].'</h3>
                                <h4>'.$x['product_name'].'</h4>
                                <p><span>MRP. '.($x['product_price']*$x['quantity']).'</span> 
                                <a class ="button" href="cart_process.php?id='.$id.'" >Remove from cart</a>
                                </p>
                            </div>
                            </div>
                            ';
                            $total = $total + ($x['quantity']*$x['product_price']);
                        }
                    }
                ?>

                
                <!-- <div class="item">
                    <img src="assets/images/store-drinks/all/10.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> 
                        <button>Remove from cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/all/11.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> 
                        <button>Remove from cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/all/12.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> 
                        <button>Remove from cart</button></p>
                    </div>
                </div> -->
            </div>
            </form>
            <div class="grid cart_buttons">
                    <h4> Total Price: <?php echo $total;?></h4>
                <button type='submit'>Re-calculate</button>
                
                <a href="checkout.php" class="button">Checkout</a>
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
                </ul>
            </div>

            <div class="footer__socials">
                <a href="https://github.com/" target="_blank" class="footer__social">
                    <i class="uil uil-github"></i>
                </a>
                <a href="https://www.linkedin.com/in//" target="_black" class="footer__social">
                    <i class="uil uil-linkedin"></i>
                </a>
                <a href="https://www.instagram.com//" target="_black" class="footer__social">
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://twitter.com/" target="_black" class="footer__social">
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