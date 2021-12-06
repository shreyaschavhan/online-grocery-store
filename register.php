<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Grocery Store</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body class="grid">
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Grocery Store</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <i class="uil uil-box nav__icon"></i> All Categories
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <i class="uil uil-search-alt nav__icon"></i> Search
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <i class="uil uil-shopping-cart-alt nav__icon"></i> Cart
                        </a>
                    </li>
                </ul>
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
        <section class="error">
        <?php
            if(isset($_GET['error']))
			{
				echo '<font color="red">'.$_GET['error'].'</font>';
				echo '<br><br>';
			}
								
			if(isset($_GET['ok']))
			{
				echo '<font color="blue">You are successfully Registered. You can now login</font>';
				echo '<br><br>';
			}
							
		?>
        </section>
        <section class="login flex">
           <div class="login__container">
            <h1 class="section__title">
                Register
            </h1>
            <form action="register_process.php" method="post">
                <div class="grid section__login">
                    <div class="section__login-input">
                        <h1 class="username">Name</h1>
                        <i class="uil uil-kid input__icon"></i>
                        <input type="text" name="name" class="login_input" placeholder="Name" required>
                    </div>
                    <div class="section__login-input">
                        <h1 class="username">Username</h1>
                        <i class="uil uil-user input__icon"></i>
                        <input type="text" name="user_name" class="login_input" placeholder="Username" required>
                    </div>
                    <div class="section__login-input">
                        <h1 class="password">Password</h1>
                        <i class="uil uil-lock input__icon"></i>
                        <input type="password" name="pass_word" class="login_input" placeholder="password" required>
                    </div>
                    <div class="section__login-input">
                        <h1 class="password">Confirm Password</h1>
                        <i class="uil uil-lock input__icon"></i>
                        <input type="password" name="confirm_password" class="login_input" placeholder="confirm password" required>
                    </div>
                    <div class="section__login-input">
                        <h1 class="password">Contact No.</h1>
                        <i class="uil uil-phone-volume input__icon"></i>
                        <input type="text" name="contact" class="login_input" placeholder="Contact No" required>
                    </div>
                    <button>Register</button>
                </div>
            </form>
            <div class="not__yet">
                <div class="border"></div>
                <h3>Already Registered?</h3>
                <a href="login.php">Login Here</a>
            </div>
           </div>
        </section>
    </main>
    <!-- Scroll Up -->
    
    <a href="" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!-- Javascript -->
    <script src="assets/js/main.js"></script>

</body>
</html>