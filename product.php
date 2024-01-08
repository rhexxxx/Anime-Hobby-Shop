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
    <script src="script.js"></script>
</head>
<body>
    <div class="main-body">
        <section id="header">
            <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
            <div class="search">
                <div class="input">
                    <form action="search.php" method="get"> 
                        <input type="text" name="search" id="src" placeholder="search" autocomplete="off"><button type="submit" name="kirim" class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
            </div>
            <div class="nav">
                <ul id="navbar">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.php" id="lg-bag" class="bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
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
        <?php foreach($product as $pro) :?>
        <section id="product-page" class="section-p section-m1">
            <img src="img/products/<?= $pro["img"] ?>" alt="">
            <div class="product-des">
                <h2><?= $pro["name"]; ?> - <?= $pro["series"] ?></h2>
                <p>by <?= $pro["brand"];?></p>
                <div class="line"></div>
                <h3>IDR <?= number_format($pro["price"],"0",",","."); ?> </h3>
                <div class="counting">
                        <span>Quantity</span>
                        <div class="item-counter">
                            <button id="decrement-btn">-</button>
                            <div id="counter-value">1</div>
                            <button id="increment-btn">+</button>
                        </div>
                    </div>
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
                            <li><a href="search.php?search=<?= $pro["chara"]?>"><?= $pro["chara"];?></a></li>
                            <li><a href="search.php?search=<?= $pro["series"]?>"><?= $pro["series"];?></a></li>
                            <li><a href="search.php?search=<?= $pro["category"]?>"><?= $pro["category"];?></a></li>
                            <li><a href="search.php?search=<?= $pro["brand"]?>"><?= $pro["brand"];?></a></li>
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
                    <p><strong>Address:</strong> Jalan Gunung Payung No.46, Jimbaran</p>
                    <p><strong>Phone:</strong> +62 823 2727 8434/ (+62) 08 2327 8434</p>
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
                    <a href="login.php">Sign In</a>
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
        let counter = 0;
        const counterValue = document.getElementById('counter-value');
        const incrementBtn = document.getElementById('increment-btn');
        const decrementBtn = document.getElementById('decrement-btn');

        incrementBtn.addEventListener('click', () => {
            counter++;
            counterValue.innerHTML = counter;
        });
        
        decrementBtn.addEventListener('click', () => {
            if(counter >1){
                counter--;
                counterValue.innerHTML = counter; 
            }
            
        });
    </script>
    <script src="script.js"></script>
</body>
</html>