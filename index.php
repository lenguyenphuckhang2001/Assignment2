<?php
include("config/config.php");
$sql_sanpham = "SELECT*FROM new_product LIMIT 10";
$query_sanpham = mysqli_query($mysqli, $sql_sanpham)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lipstick Box</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/5eafdc130b.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <nav class="sticky">
                    <a href="index.php"><img src="https://file.hstatic.net/200000152949/file/logo_cc7cc2e5022e4fdca6480dd6d34ee942.jpg" width="125px" alt="photo"></a>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cart/product.php">Products</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="signin.php">Account</a></li>
                        <li><a href="cart/viewCart.php">Cart</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                    <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
                </nav>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------Slide show-------------------------------------------------------------------->
    <main>
        <div class="slideshow-container">
            <div class="myslides fade">
                <img src="images/lipstickbox-1.jpg" style="width:100%">
            </div>

            <div class="myslides fade">
                <img src="images/lipstickbox-2.jpg" style="width:100%">
            </div>
        </div>
        <br>
        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </main>
    <!------categories----->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="//product.hstatic.net/200000152949/product/146637906_2787977078139172_6968480091364052402_n_233c04ec7290491b87dbc85b546765ce_master.jpg" width="100%" height="100%" alt="photo">
                </div>
                <div class="col-3">
                    <img src="https://file.hstatic.net/200000152949/file/c065abf0-3dae-46a5-b6e4-6f7fd226ac0d_3f8060eb473e453e937337a2f864674d.jpeg" alt="photo">
                </div>
                <div class="col-3">
                    <img src="//product.hstatic.net/200000152949/product/z2143963910867_6cfdb2e642a24f370d68607b88cac023__2__baa577b0a5d44fd6a5dbf2957e5cffa2_master.jpg" alt="photo">
                </div>
                <div class="col-3">
                    <img src="//product.hstatic.net/200000152949/product/152509188_149757950300258_4250893435454781964_n_64d3dd67948643eabe44286d6d45aff6_master.jpg" alt="photo">
                </div>
                <div class="col-3">
                    <img src="https://file.hstatic.net/200000152949/file/img_3025_4069973837644a36a241dcacb42e79f4.jpg" alt="photo">
                </div>
                <div class="col-3">
                    <img src="//product.hstatic.net/200000152949/product/z1993392548257_03cb8d169121a8239bd27736c9be5687_69a59b8cb4de45f4bea06b3c513a1b19_master.jpg" alt="photo">
                </div>
            </div>
        </div>
    </div>
    <!---------------------ABOUT------------------------------>
    <div class="background">
        <div class="row">
            <div class="col-2">
                <h1>THE VOICE OF LIPSTICK BOX <br></h1>
                <p><b> I'm Phuc Khang, I created the lipstick box! </b> <br>
                      What I want most is returned to you all
                      The best products for girls to beautify the room <br>
                      Her, the most peaceful place for each girl. <br> <br>

                      All products you find here have been researched by me
                      choose, even make your own to get the products
                      the best for you guys. <br> <br>

                      Founder of Phuc Khang - 033.88.677.00</p>
                
            </div>
            <div class="col-2">
                <img src="https://file.hstatic.net/200000152949/file/z1992551249120_05a6d37e6a0649f8407a4ba518c897c8_cd33fff871dc4d93bdc132b4fdd3477e.jpg" style="opacity: 80%;" alt="photo">
            </div>
        </div>
    </div>
     <!------------------Testimontial---------------->
     <div class="testimontial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                    The product is beautiful and delicate, extremely quality, and the consulting staff are very enthusiastic
                    I really like this place and I will keep coming to buy and support
                    </p>
                    <img src="images/avarta-1.png" alt="photo">
                    <h3>Tố Quyên</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                    Các sản phẩm của cửa hàng rất chất lượng, đặt biệt là những chiếc gương rất là đẹp và tinh tế. 
                    Tôi rất thích sản phẩm ở đây và tôi vẫn sẽ tiếp tục ủng hộ 
                    </p>
                    <img src="images/avarta-2.png" alt="photo">
                    <h3>Lương Hà</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p>
                    Although the price is quite high and expensive, the quality of the product must be said to be excellent.
                    We feel very nice when decorating our room and the counselors support me very well
                    </p>
                    <img src="images/avarta-3.png" alt="photo">
                    <h3>Tường Nhi</h3>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------brands---------------------------->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-chilai.png" alt="photo">
                </div>
                <div class="col-5">
                    <img src="images/logo-custom.png" alt="photo">
                </div>
                <div class="col-5">
                    <img src="images/logo-luxury.jpg" alt="photo">
                </div>
                <div class="col-5">
                    <img src="images/jupp-logo.jpg" alt="photo">
                </div>
                <div class="col-5">
                    <img src="images/careno-logo.png" alt="photo">
                </div>
            </div>
        </div>
    </div>
    <!----------------------------footer---------------------------->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Sign up to receive information</h3>
                    <p>Sign up now to receive promotional information,<br>show gifts from the store.</p>
                    <br>
                    <input type="text" id="email" placeholder="Nhập Email của bạn">
                    <input type="submit" value="Submit">
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.jpg" alt="photo">
                    <p><b>Interior Decoration For Women</b></p>
                </div>
                <div class="footer-col-3">
                    <h3>Contact</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 200 Quang Trung ,Da Nang</li>
                        <li><i class="fas fa-phone"></i> +84-935554854</li>
                        <li><i class="fas fa-envelope"></i> toquyen2001@gmail.com</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-youtube"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2021 | RedStore by Phuc Khang</p>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/jquery.waypoints.min.js"></script>
</body>

</html>