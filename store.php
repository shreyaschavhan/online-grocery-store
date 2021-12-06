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
        <div class="store__bottom-nav">
            <div class="store__categories">
                <a href="" class="store__logo">
                <?php
                    echo $_GET['store_name'];
                ?>
                </a>
                <nav class="store">
                    <div class="store__category-menu" id="store__category-menu">
                        <ul class="store__category-list flex">
                            <li class="store__item">
                                <a href="#recommended" class="store__link active__link">
                                    Recommended
                                </a>
                            </li>
                            <li class="store__item">
                                <a href="#stirred" class="store__link active__link">
                                    &stirred
                                </a>
                            </li>
                            <li class="store__item">
                                <a href="#sevenup" class="store__link active__link">
                                    7 Up
                                </a>
                            </li>
                            <li class="store__item">
                                <a href="#appy" class="store__link active__link">
                                    Appy
                                </a>
                            </li>
                            <li class="store__item">
                                <a href="#coca-cola" class="store__link active__link">
                                    Coca Cola
                                </a>
                            </li>

                        </ul>
                        <i class="uil uil-times store__close" id="store-close"></i>
                    </div>
                    <div class="store__btns">
                        <div class="store__toggle" id="store-toggle">
                            <i class="uil uil-apps"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <section class="store__name flex">
            <div class="store__name-container grid">
                <img src=
                "
                <?php
                    require('includes/config.php');

                    $storeName = $_GET['store_name'];
                    $query = "select * from stores where store_name = '$storeName'";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                    $store_image = $row['store_image'];
                    echo $store_image;
                ?>
                " alt="">
                <div class="store__name-text grid">
                    <h1 class="store__name-title">
                    <?php
                        echo $_GET['store_name'];
                     ?>
                    </h1>
                    <h2 class="store__name-subtitle">Store Category: 
                        <span>
                            <?php
                                echo $_GET['store_category'];
                            ?>     
                        </span>
                    </h2>
                    <p class="store__name-address">
                        <?php
                            echo $_GET['store_region'];
                        ?>
                    </p>
                </div>
            </div>
        </section>
        <section class="recommended" id="recommended">
            <h1 class="section__title">Recommended</h1>
            <div class="section-items grid">
                <!-- <div class="item">
                    <img src="assets/images/store-drinks/all/1.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div> -->
                <?php
                    $store_id = $_GET['store_id'];
                    $query = "select * from products where product_section = 'Recommended' and product_storeID = $store_id";
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result)){
                        echo '
                        <div class="item">
                        <img src="'.$row['product_image'].'" alt="">
                        <div class="item-text grid">
                        <form action = "cart_process.php" method = "get">   
                        <h3>'.$row['product_brand'].'</h3>
                            <h4>'.$row['product_name'].'</h4>
                            <p><span>MRP. '.$row['product_price'].'</span> <span>Qty. <input type="number" name="quantity" id="" value="1"></span>
                           
                                <input type = "hidden" name = "product_brand" value = "'.$row['product_brand'].'"/>
                                <input type = "hidden" name = "product_name" value = "'.$row['product_name'].'"/>
                                <input type = "hidden" name = "product_price" value = "'.$row['product_price'].'"/>
                                <input type = "hidden" name = "product_section" value = "'.$row['product_section'].'"/>
                                <input type = "hidden" name = "product_storeID" value = "'.$row['product_storeID'].'"/>
                                <input type = "hidden" name = "product_categoryID" value = "'.$row['product_categoryID'].'"/>
                                <input type = "hidden" name = "product_image" value = "'.$row['product_image'].'"/>
                                <button>add to cart</button>
                            </form>
                        </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </section>
        <section class="stirred" id="stirred">
            <h1 class="section__title">&Stirred</h1>
            <div class="section-items grid">

                <div class="item">
                    <img src="assets/images/store-drinks/&stirred-1.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/&stirred-2.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/&stirred-3.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/&stirred-4.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>

            </div>
        </section>
        <section class="sevenup" id="sevenup">
            <h1 class="section__title">7 UP</h1>
            <div class="section-items grid">

                <div class="item">
                    <img src="assets/images/store-drinks/7up1.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/7up2.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/7up3.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="appy" id="appy">
            <h1 class="section__title">Appy</h1>
            <div class="section-items grid">

                <div class="item">
                    <img src="assets/images/store-drinks/appy.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="coca-cola" id="coca-cola">
            <h1 class="section__title">Coca-Cola</h1>
            <div class="section-items grid">

                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola1.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola2.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola3.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola4.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola5.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola6.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola7.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola8.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola9.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
                <div class="item">
                    <img src="assets/images/store-drinks/coca-cola10.jpg" alt="">
                    <div class="item-text grid">
                        <h3>Brand Name</h3>
                        <h4>Product Name</h4>
                        <p><span>MRP. 00</span> <span>Qty. <input type="number" name="" id="" value="1"></span>
                            <button>Add to cart</button></p>
                    </div>
                </div>
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