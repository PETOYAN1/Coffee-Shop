<?php 
    require "../MySQL/connect.php";
    session_start();
    
    // Get user data from the database using PDO

    $id = $_SESSION['user_id'];

    $sql = "SELECT * FROM users WHERE id = '$id'";
    $result = $pdo->query($sql);
    $row = $result->fetch();

    // Log Out

    if(isset($_GET['logout']) || !$id) {
        session_unset();
        session_destroy();
        header('location: login.php');
        exit();
    }
    
?>
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
</head>
<body>
    <div class="wrapper">
    <header>
            <nav>
                <a href="../index.php"><img class="buy_coffee" src="../assets/images/logo.png" alt="logo"></a>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../aboutUs.php">About us</a></li>
                    <li><a href="../gallery.php">Gallery</a></li>
                    <li><a href="../services.php">Services</a></li>
                    <li><a href="../contactUs.php">Contact us</a></li>
                </ul>
            </nav>
        </header>
        <main style="position: relative;">
            <h1 style="text-align: center;margin-top: 1em;color: #26252b;">Welcome, <?php echo $row["name"];?>!</h1>
            <a class="logout" href="user.php?logout">Logout</a>
            <section class="section3">
                <h3>All Specialty Coffee</h3>
                <p style="width: 50%; margin: 0 auto;" class="paragraph1">Choose from a wide variety of coffee from the top roasters in the US. All our specialty coffee is roasted to order and shipped fresh to your door.</p>
                <div class="layout-container" style="width: min(1150px, 100%);">
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/yexgs5ujizmhmdworj36.png?v=1704953888" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/fgvsvncym0nnj3chzz0k.png?v=1704953744" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/TRD00133_HUC_Bom_Senso_V2.png?v=1729110279" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>
                <div class="coffee_blog">
                <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/TRD00126_SEE_Space_Cowboy_V2.png?v=1710774556" alt="coffee">
                <a href="#">ATOMIC</a>
                <h5>Space Cadet</h5>
                <p>Sweet & Smooth</p>
                <span><b>15.75$</b></span>
            </div>
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/isupd3demgmqjlbuarhl.png?v=1704953802" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div> 
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/GimmeSumatraHighlandsUPdated.png?v=1720732431" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div> 
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/WONdriftlessupdated_eda49ff4-e067-4393-9515-ef748e528bb6.png?v=1720807740" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/TRD00126_EQU_Ardi_Natural_Main.png?v=1712091929" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/SparrowsHOMESupdated_a243f2d1-c5f4-4b9b-983b-a9128bb8f164.png?v=1720806067" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/CaffeVitaOrganicEspressoUpdated.png?v=1720727464" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/jbpgq7djhldulgvowe1o.png?v=1704953748" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/t71j6reej4pyo3dwxwmh.png?v=1704953772" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/TRD00131_RRC_Floyd_Farmhouse_Main.png?v=1722963222" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/s64ycpspykmemtupuoi6.png?v=1704953717" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/nien9l92dj3bis3vbvof.png?v=1704953716" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/ftx69umvuyd2mnylm4qs.png?v=1704953773" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/sighjyhliefukn8dygvd.png?v=1704953717" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/ebuvwohfgak3aznrgfqr.png?v=1704953745" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/nocubtg4czb5ycnonkrb.png?v=1704953744" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    <img class="buy_coffee" src="https://cdn.shopify.com/s/files/1/0794/7128/0447/files/w73vhyjhu1y3odxqvnjt.png?v=1704953717" alt="coffee">
                    <a href="#">ATOMIC</a>
                    <h5>Space Cadet</h5>
                    <p>Sweet & Smooth</p>
                    <span><b>15.75$</b></span>
                </div>    
                <div class="coffee_blog">
                    </section>
                </div></div>
        </main>
        <footer>
            <div class="left-blog">
                <h4>About</h4>
                <p>consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
            </div>
            <div class="left-blog">
                <h4>Menu</h4>
                <a href="index.php">Home</a>
                <a href="aboutUs.php">About Us</a>
                <a href="gallery.php">Gallery</a>
                <a href="services.php">Services</a>
                <a href="contactUs.php">Contact Us</a>
            </div>
            <div class="right-blog">
                <h4>Useful links</h4>
                <p>Adipiscing Elit,</p>
                <p>sed do</p>
                <p>Eiusmod</p>
                <p>Tempor</p>
                <p>incididunt</p>
            </div>
            <div class="right-blog">
                <h4>Contact Us</h4>
                <a href="#">Address : Loram Ipusm</a>
                <a href="#">Call : +01 1234567890</a>
                <a href="#">Email : mail@domain.com</a>
            </div>
        </footer>
        <p class="reserved">2045 All Rights Reserved</p>
    </div>
    <script src="https://unpkg.com/scrollreveal">
    </script>
    <script>
            ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 2000,
            delay: 400
        });
        ScrollReveal().reveal('.coffee_blog', { origin: 'top' });
    </script>
</body>
</html>