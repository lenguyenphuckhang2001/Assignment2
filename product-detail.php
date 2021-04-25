<?php
    $sql_chitiet = "SELECT * FROM tb_product WHERE tb_product AND tb_product = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($querry_chitiet)){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="css/productdetail.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap');
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <nav class="sticky">
                    <a href="index.html"><img src="https://file.hstatic.net/200000152949/file/logo_cc7cc2e5022e4fdca6480dd6d34ee942.jpg" width="125px" alt="photo"></a>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href="">Account</a></li>
                    </ul>
                </nav>
                <img src="images/cart.png" alt="photo" width="30px" height="30px">
                <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </div>
    <!-------------------------single product details----------------------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="//product.hstatic.net/200000152949/product/152509188_149757950300258_4250893435454781964_n_64d3dd67948643eabe44286d6d45aff6_master.jpg" width="100%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="//product.hstatic.net/200000152949/product/153505655_711062726239808_4302989104855299185_n_556cad916ddc4ce59db3ba6eafe2cdd5_master.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="//product.hstatic.net/200000152949/product/152217849_340718313904650_8077427394934662014_n_30164fd00c12453393add7143ecf96ad_master.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="//product.hstatic.net/200000152949/product/147912263_268910697921097_6822304830271416152_n_37ea0423cc3a4e5f9f48bf31b0ac54ca_master.jpg" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="//product.hstatic.net/200000152949/product/147144734_821694071711723_3168873249640236207_n_db4a6c3fe93941afa5b5c755ce96e9a1_master.jpg" width="100%" class="small-img">
                    </div>
                </div>
            </div>
            <form action="">
            <div class="col-2">
                <p>Home/T-Shirt</p>
                <h1>Red Printed T-shirt<?php echo $row_chitiet['tensanpham'] ?></h1>
                <h4><php? echo number_format($row_chitiet['giasp'],0,',','.').'$' ?></h4>
                <select>
                    
                    <input type="number" value="1">
                    <a href="cart.php" name="themgiohang" class="btn"> Add to cart</a>
                    <h2>Product Details</h2>
                    <p>Lorem ipsum dolor sum laudantium mollitia laboriosam architecto?</p>
                </select>
            </div>
            </form>
        </div>
    </div>
   <!---------Title-------------->
   <div class="small-container">
       <div class="row row-3">
        <h2>Related Product</h2>
       </div>
   </div>

    <!---------Products-------------->
   
   
    <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="images/product-9.jpg" alt="photo">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="far fa-star"></i></span>
                </div>
                <p>$50.00</p>
            </div>

            <div class="col-4">
                <img src="images/product-9.jpg" alt="photo">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="far fa-star"></i></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-9.jpg" alt="photo">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="far fa-star"></i></span>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <img src="images/product-9.jpg" alt="photo">
                <h4>Red Printed T-shirt</h4>
                <div class="rating">
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="fa fa-star"></i></span>
                    <span> <i class="far fa-star"></i></span>
                </div>
                <p>$50.00</p>
            </div>
        </div>
    </div>

<!---------------------------------------------------------Footer----------------------------------------------------------------------->
   <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Đăng ký nhận tin</h3>
                    <p>Đăng ký ngay để nhận thông tin khuyến mãi, <br> các chương trình quà  tặng từ shop.</p>
                    <br>
                    <input type="text" id="email" placeholder="Nhập Email của bạn">
                    <input type="submit" value="Submit">
                </div>
                <div class="footer-col-2">
                    <img src="images/logo.jpg" alt="photo">
                    <p> <b>Trang Trí Nội Thất Dành Cho Phái Đẹp</b> </p>
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
            <p class="copyright">Copyright 2021 | Lipstick Box by Phuc Khang</p>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    
</body>
</html>
<?php }
?>