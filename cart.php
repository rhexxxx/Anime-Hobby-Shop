<?php 
session_start();
require 'function.php';
if(!isset($_SESSION["login"])){
    header('Location: login.php');
    exit;
}
    
$username = $_SESSION["username"];
$users = query("SELECT * FROM users WHERE username = '$username'");
$i = 0;
foreach($users as $user){
    $id = $user["id"];
}
$product = query("SELECT * FROM product WHERE bookCode ='$id'");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6f63cd3ddc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="main-body">
        <section id="header">
            <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
            <div class="search">
                <div class="input">
                    <form action="search.php" method="get">
                        <input type="text" name="search" id="src" placeholder="search" autocomplete="off"><button
                            type="submit" name="kirim" class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <div class="nav">
                <ul id="navbar">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a  class="active" href="cart.php" id="lg-bag" class="bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <?php if(!isset($_SESSION["login"])){?>
                    <?= "<a href='login.php' class='login-button'>Login</a>"; ?>
                    <?php } else{;?>
                    <a href="user.php" class="user-icon"><i class="fa-solid fa-user"></i></a>
                    <?php }?>
                    <a href="" id="close"><i class="fa-solid fa-x"></i></a>
                </ul>
            </div>
            <div class="mobile">
                <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
        </section>
        <section class="cart-display" id="section-p">
            <div class="cart-container padinside">
                <h4 class="cart-title">Shopping Cart</h4>
                <div class="line grey"></div>
                <button class="select-all-button" onclick="toggleCheckboxes()">SELECT ALL</button>
                <p class="padup">pre-order items</p>
                <?php $i=1;?>
                <?php foreach($product as $pro):?>
                <div class="cart-item">
                    <div class="item-check"><input type="checkbox" name="chk" id="chk"></div>
                    <img src="img/products/<?= $pro["img"]; ?>" alt="">
                    <div class="cart-item-description">
                        <h5><?= $pro["name"]; ?> - <?= $pro["series"]?></h5>
                        <h4 id="price">IDR <?= number_format($pro["price"],"0",",",".");?></h4>
                    </div>
                    <div class="counting">
                        <span>Quantity</span>
                        <div class="item-counter">
                            <button id="decrement-btn-<?=$i?>">-</button>
                            <div id="counter-value-<?=$i?>">1</div>
                            <button id="increment-btn-<?=$i?>">+</button>
                        </div>
                    </div>
                    <div class="subtotal">
                        <span>Subtotal</span>
                        <h4 id="subtotal-<?=$i?>">IDR <?= number_format($pro["price"],"0",",",".");?></h4>
                    </div>
                </div>
                <?php $i++;?>
                <?php endforeach;?>
            </div>
            <div class="payment-total padinside">
                <div class="payment-total-title">
                    <h4>Total Price</h4>
                    <h2>IDR <span id="total-payment">0</span></h2>
                    <button id="checkout">Checkout</button>
                </div>
                <div class="line grey"></div>
                <p>Shipping fee will be calculated when checkout</p>
                <p>If choosing DP as payment option, shipping fee will be invoiced when the item is arrived.</p>
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
    <script>
    const totalItems = <?php echo $totalItems;?>;
    </script>
    <script src="script.js"></script>
</body>

</html>