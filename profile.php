<?php
session_start();
include("config/config.php");
if (isset($_SESSION['dangnhap'])) {
  $sql = "SELECT*FROM tb_admin WHERE username='" . $_SESSION['dangnhap'] . "' LIMIT 1 ";
  $sql_user = mysqli_query($mysqli, $sql);
  $row_user = mysqli_fetch_array($sql_user);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/profile.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    </style>
  <title>Profile</title>
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

  <table class="Profiletable" border="1">
    <div class="wrapper">
      <div class="left">
        <img src="<?php echo $row_user['picture'] ?>" width="100">
      </div>
      <div class="right">
        <div class="info">
          <h3>Information</h3>
          <div class="info_data">
            <div class="data">
              <h4>Name</h4>
              <p>
                <?php echo $row_user['username'] ?>
              </p>
            </div>
            <div class="data">
              <h4>Email</h4>
              <p> <?php echo $row_user['email'] ?></p>
            </div>
          </div>
          <div class="projects">
            <h3></h3>
            <div class="projects_data">
              <div class="data">
                <h4>Full name</h4>
                <p>
                  <?php echo $row_user['fullname']  ?>
                </p>
              </div>
              <div class="data">
                <h4>Phone</h4>
                <p>
                  <?php echo $row_user['phone'] ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </table>  

  <?php
  if (isset($_GET['action']) && $_GET['action'] == "update") {
    include("update_pro.php");
  }
  ?>


  <?php

  if (isset($_POST['updatebut'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $avt = $_POST['avatar'];
    $sql_update = "SELECT * FROM tb_admin WHERE username='" . $_SESSION['dangnhap'] . "' LIMIT 1";
    $query_update = mysqli_query($mysqli, $sql_update);
    $row_update = mysqli_fetch_array($query_update);
    $sql_edit = "UPDATE tb_admin SET avatar='" . $avt . "', fullname='" . $username . "', email='" . $email . "', phone='" . $phone . "'  WHERE id_admin='" . $row_update['id_admin'] . "'";
    session_start();
    mysqli_query($mysqli, $sql_edit);
    $_SESSION['dangnhap'] = $username;
    header('Location:profile.php');
  }
  ?>
</body>

</html>