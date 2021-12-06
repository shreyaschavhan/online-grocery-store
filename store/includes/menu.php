<ul class="nav__list grid">
    
    <?php
        if(isset($_SESSION['status'])){
            echo ' 
            <li class="nav__item">
            <a href="add_products.php" class="nav__link">
                <i class="uil uil-signin nav__icon"></i> Add Products
            </a>
            </li>
            ';
        }
        else{
            echo '<li class="nav__item"><a href="store_login.php" class="nav__link"><i class="uil uil-signin nav__icon"></i>Login</a></li>';
        }
    ?>
    
    <?php
        if(isset($_SESSION['status'])){
            echo 
            ' 
            <li class="nav__item">
            <a href="logout.php" class="nav__link">
                <i class="uil uil-signout nav__icon"></i> Logout
            </a>
            </li>
            ';
        }
    ?>
</ul>