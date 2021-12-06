<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Grocery Store</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body class="grid">
    <!-- Header -->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">Grocery Store</a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                <li class="nav__item"><a href="store_login.php" class="nav__link"><i class="uil uil-signin nav__icon"></i>Login</a></li>
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
        <div class="error">
        <?php
            if(isset($_GET['error']))
			{
				echo '<font color="red">'.$_GET['error'].'</font>';
				echo '<br><br>';
			}
								
			if(isset($_GET['ok']))
			{
				echo '<font color="blue">Thanks for application! We will contact you with your login details once approved</font>';
				echo '<br><br>';
			}
							
		?>
        </div>
        <section class="login flex">
           <div class="login__container">
            <h1 class="section__title">
                Store Application
            </h1>
            <form action="storeapplication_process.php" method="post">
                <div class="grid section__login">
                    <div class="section__login-input">
                        <h1 class="username">
                            Store Name</h1>
                        <i class="uil uil-store input__icon"></i>
                        <input type="text" name="store_name" class="login_input" placeholder="Name" required>
                    </div>
                    <div class="section__login-input">
                        <h1 class="username">Store Category</h1>
                        <i class="uil uil-user input__icon"></i>
                        <input type="text" name="store_category" class="login_input" placeholder="Store Category" required>
                    </div>
                    <div class="section__login-input">
                        <h1 class="username">Store Region</h1>
                        <i class="uil uil-user input__icon"></i>
                        <input type="text" name="store_region" class="login_input" placeholder="Store Category" required>
                    </div>
                    <div class="section__login-input">
                        <h1 class="password">Contact No.</h1>
                        <i class="uil uil-phone-volume input__icon"></i>
                        <input type="text" name="contact" class="login_input" placeholder="Contact No" required>
                    </div>
                    <button>Apply</button>
                </div>
            </form>
            <div class="not__yet">
                <div class="border"></div>
                <h3>Already have a store?</h3>
                <a href="store_login.php">Login Here</a>
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