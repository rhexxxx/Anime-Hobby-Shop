<?php 
require 'function.php';
$product = query("SELECT * FROM product");
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6f63cd3ddc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-index">
        <section id="header">
            <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
            <div class="nav">
                <ul id="navbar">
                    <li><a class="active" href="index.php">Home</a></li>
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
        <section class="main-hero">
            <h4>Trade-In-Offer</h4>
            <h2>Super Value Deals</h2>
            <h1>On All Products</h1>
            <p>Save more with cuppons & up to 70% off!</p>
            <button>Shop now</button>
        </section>
        <section class="features" id="section-p">
            <h2>Categories</h2>
            <div class="index-feature" >
                <div class="fe-box">
                    <img src="img/features/nendroid.png" alt="">
                    <h6>Nendroid</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/scale_figures.png" alt="">
                    <h6>Scale Figures</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/figma.png" alt="">
                    <h6>Figma</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/merchandise.png" alt="">
                    <h6>Mercandise</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/model_kit.png" alt="">
                    <h6>Model Kit</h6>
                </div>
                <div class="fe-box">
                    <img src="img/features/plush.png" alt="">
                    <h6>Plush</h6>
                </div>
            </div>
        </section>
        <section class="index-product1" id="section-p">
        <div class="product-tittle">
                <h2>Top Item </h2>
                <a href="category.php?category=Newest">See More -></a>
            </div>
            <div class="pro-container"> 
                <?php $i = 1;?>
                <?php foreach ($product as $pro) : ?>
                <div class="pro">
                    <a href="product.php?id=<?= $pro["id"]?>">
                        <img src="img/products/<?= $pro["img"] ?>" alt="">
                        <div class="des">
                            <span><?= $pro["brand"] ?></span>
                            <h5><?= $pro["name"] ?> - <?= $pro["series"]?></h5>
                            <div class="pro-status">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>Rp.<?= $pro["price"]?></h4>
                                
                            </div> 
                            
                        </div>
                        <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                    </a>
                    
                </div>
                <?php if($i >= 8) {
                   break; 
                    }?>
                <?php $i++?>
                <?php endforeach;?>
                </div>
            </div>
            
        </section>
        <section class="index-banner" id="section-m1">
            <h4>Repair Service</h4>
            <h2>Up To <span>70% Off</span>  - All Anime Figures & Accessories</h2>
            <button class="normal">Explore More</button>
        </section>
        <section class="index-product1" id="section-p">
            <div class="product-tittle">
                <h2>Newest Item </h2>
                <a href="category.php?category=Newest">See More -></a>
            </div>
            <div class="pro-container"> 
            <?php $i = 1;?>
                <?php foreach ($product as $pro) : ?>
                <?php if($i > 8 && $i <=16) { ?>
                    <div class="pro">
                    <a href="product.php?id=<?= $pro["id"]?>">
                    <img src="img/products/<?= $pro["img"] ?>" alt="">
                    <div class="des">
                        <span><?= $pro["brand"] ?></span>
                        <h5><?= $pro["name"] ?> - <?= $pro["series"]?></h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>Rp.<?= $pro["price"]?></h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                    </a>
                    
                    </div>
                <?php }?>
                <?php $i++?>
                <?php endforeach;?>
            </div>
        </section>
        <section class="sm-banner" id="section-p">
            <div class="banner-box">
                <h4>Crazy Deals</h4>
                <h2>Buy 1 Get 1 Free</h2>
                <span>The best Classic dress is on sale at cara</span>
                <button class="white">learn More</button>
            </div>
            <div class="banner-box banner-box2">
                <h4>Spring/Summer</h4>
                <h2>Upomming Season</h2>
                <span>The best Classic dress is on sale at cara</span>
                <button class="white">Collection</button>
            </div>
        </section>
        <section class="banner3">
            <div class="banner-box">
                <h2>SEASONAL SALE</h2>
                <h3>Winter Collection -50% Off</h3>
            </div>
            <div class="banner-box banner-box2">
                <h2>NEW FOOTWEAR COLLECTION</h2>
                <h3>Spring/Summer 2022</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>T-SHIRTS</h2>
                <h3>New Trendy Prints</h3>
            </div>
        </section>
        <section id="newsletter" class="section-p"> 
            <div class="newstext">
                <h4>Sign Up For newsletter</h4>
                <p>Get Email Updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="newsform">
                <input type="text" placeholder="your email address">
                <button class="normal">sign up</button>
            </div>
        </section>
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
    <script src="script.js"></script>
</body>
</html>