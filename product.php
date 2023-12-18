<?php 
require 'function.php';
$id = $_GET["id"];
$product = query("SELECT * FROM product WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php foreach($product as $title) :echo $title["name"];?> - <?= $title["series"]?></title>
    <?php endforeach;?>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6f63cd3ddc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-product">
        <section id="header">
            <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
            <div class="nav">
                <ul id="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <a href="" id="close"><i class="fa-solid fa-x"></i></a>
                </ul>
            </div>
            <div class="mobile">
                <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
        <?php foreach($product as $pro) :?>
        <section id="product-page" class="section-p section-m1">
            <img src="img/products/<?= $pro["img"] ?>" alt="">
            <div class="product-des">
                <h2><?= $pro["name"]; ?> - <?= $pro["series"] ?></h2>
                <p>by <?= $pro["brand"];?></p>
                <div class="line"></div>
                <h3>IDR <?= $pro["price"]; ?> </h3>
                <div class="product-add">
                    <button class="add-button">Add to Cart</button>
                </div>
                <div class="product-des-info">
                    <div class="product-title">
                        <ul>
                            <li>Character</li>
                            <li>Series</li>
                            <li>Category</li>
                            <li>Manufacturer</li>
                        </ul>
                    </div>
                    <div class="product-info">
                        <ul>
                            <li><a href="search.php?chara=<?= $pro["chara"]?>"><?= $pro["chara"];?></a></li>
                            <li><a href="search.php?series=<?= $pro["series"]?>"><?= $pro["series"];?></a></li>
                            <li><a href="search.php?category=<?= $pro["category"]?>"><?= $pro["category"];?></a></li>
                            <li><a href="search.php?brand=<?= $pro["brand"]?>"><?= $pro["brand"];?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <?php endforeach;?>
        <section>
            <footer id="section-p">
                <div class="Col">
                    <img class="logo" src="img/logo.png" alt="">
                    <h4>Contact</h4>
                    <p><strong>Address:</strong> 562 Wellington Road, Street 32, San Fransisco</p>
                    <p><strong>Phone:</strong> +01 2222 365/ (+91) 01 2345 6789</p>
                    <p><strong>Hours:</strong> 10.00 - 18.00, Mon - Sat</p>
                    <div class="social">
                        <h4>Follow Us</h4>
                        <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-pinterest-p"></i>
                            <i class="fab fa-youtube"></i>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h4>About</h4>
                    <a href="">About Us</a>
                    <a href="">Delevery Information</a>
                    <a href="">Provacy Policy</a>
                    <a href="">Terms & Conditions</a>
                    <a href="">Contact Us</a>
                </div>
                <div class="col">
                    <h4>My Account</h4>
                    <a href="">Sign In</a>
                    <a href="">View Cart</a>
                    <a href="">My Wishlist</a>
                    <a href="">Track My Order</a>
                    <a href="">Help</a>
                </div>
                <div class="col install">
                    <h4>Instal App</h4>
                    <p>From App Store or Google Play</p>
                    <div class="row">
                        <img src="img/pay/app.jpg" alt="">
                        <img src="img/pay/play.jpg" alt="">
                    </div>
                    <p>Secured Payment Gateaway</p>
                    <img src="img/pay/pay.png" alt="">
                </div>
                <div class="copyright">
                    <p><i class="fa-regular fa-copyright"></i> 2023, Rheino Perean - Anime Hobby Shop (learn)</p>
                </div>
            </footer>
        </section>
    </div>
    
</body>
</html>