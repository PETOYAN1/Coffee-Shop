<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Coffee</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/auth.css">
</head>
<body>
    <div class="wrapper">
    <header>
            <nav>
                <a href="../index.php"><img src="../assets/images/logo.png" alt="logo"></a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About us</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contactUs.php">Contact us</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="" method="post">
                <h1>Authorization</h1>
                <label for="login">Username</label>
                <input type="text" name="login" id="login">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <span>
                    <label for="rememberMe">Remember</label>
                    <input type="checkbox" name="rememberMe" id="rememberMe">
                    <a href="register.php">I don't have account</a>
                </span>
                <input class="btn" type="submit" name="submit" value="Login">
            </form>
        </main>
        <footer>
            <div>
                <h4>About</h4>
                <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
            </div>
            <div>
                <h4>Menu</h4>
                <a href="#">Home</a>
                <a href="#">About Us</a>
                <a href="#">Gallery</a>
                <a href="#">Services</a>
                <a href="#">Contact Us</a>
            </div>
            <div>
                <h4>Useful links</h4>
                <p>Adipiscing Elit,</p>
                <p>sed do</p>
                <p>Eiusmod</p>
                <p>Tempor</p>
                <p>incididunt</p>
            </div>
            <div>
                <h4>Contact Us</h4>
                <a href="#">Address : Loram Ipusm</a>
                <a href="#">Call : +01 1234567890</a>
                <a href="#">Email : mail@domain.com</a>
            </div>
        </footer>
    </div>
</body>
</html>