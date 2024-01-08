<?php
require 'function.php';
if(isset($_POST["register"])){
    if(register($_POST) > 0 ){
        echo"
        <script>
        document.location.href = 'login.php';
        </script>
    ";
    } else{
    echo mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Animeku</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/6f63cd3ddc.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <div class="main-body">
        <section id="header">
            <a href="index.php"><img src="img/logo.png" class="logo" alt=""></a>
            <!-- <div class="nav">
                <ul id="navbar">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="cart.html" id="lg-bag"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <a href="" id="close"><i class="fa-solid fa-x"></i></a>
                </ul>
            </div>
            <div class="mobile">
                <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div> -->
        </section>
        <section class="gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Sign Up</h2>
                                    <p class="text-white-50 mb-5">Please enter your username and password!</p>
                                    <form action="" method="post">

                                        <div class="form-outline form-white mb-4">
                                            <label class="label-form" for="typeEmailX">Username</label>
                                            <input type="text" name="username" id="typeEmailX"
                                                class="form-control form-control-lg" placeholder="your username"
                                                required />
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="label-form" for="typePasswordX">Password</label>
                                            <div class="password-container">
                                                <input type="password" name="password" id="typePasswordX"
                                                    class="form-control form-control-lg" placeholder="your password"
                                                    required />
                                                <div class="see-password">
                                                    <input type="checkbox" id="password-seeker" name="see"
                                                        onclick="passSeeker()">
                                                    <label for="password-seeker"><i id="see"
                                                            class="fa-regular fa-eye see"
                                                            style="color: #ffffff;"></i></label>
                                                    <label for="password-seeker"><i id="unsee"
                                                            class="fa-regular fa-eye-slash"
                                                            style="color: #ffffff;"></i></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <label class="label-form" for="typePasswordX2">Confirm Password</label>
                                            <div class="password-container">
                                                <input type="password" name="password2" id="typePasswordX2"
                                                    class="form-control form-control-lg"
                                                    placeholder="confirm your password" required />
                                                <div class="see-password">
                                                    <input type="checkbox" id="password-seeker1" name="see"
                                                        onclick="passSeeker2()">
                                                    <label for="password-seeker1"><i id="see1"
                                                            class="fa-regular fa-eye see"
                                                            style="color: #ffffff;"></i></label>
                                                    <label for="password-seeker1"><i id="unsee1"
                                                            class="fa-regular fa-eye-slash"
                                                            style="color: #ffffff;"></i></label>
                                                </div>
                                            </div>

                                        </div>

                                        <?php if(isset($nameeror)):?>
                                        <p class="mb-0 error-message">Userame is Already Used</p>
                                        <?php endif;?>

                                        <?php if(isset($passeror)):?>
                                        <p class="mb-0 mb-md-4 error-message">Password Isnt Correct</p>
                                        <?php endif;?>

                                        <button class="sign-in-button white" type="submit"
                                            name="register">Register</button>
                                    </form>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i
                                                class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                    </div>

                                </div>

                                <div>
                                    <p class="mb-0">Already have an account? <a href="login.php"
                                            class="text-white-50 fw-bold">Login</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script src="script.js"></script>
</body>

</html>