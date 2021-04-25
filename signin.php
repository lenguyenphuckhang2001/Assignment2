<?php
session_start();
include('config/config.php');
if(isset($_POST['loginbutton'])){
    $user_name=$_POST['user'];
    $pass_word=$_POST['psw'];
    $sql_login="SELECT * FROM tb_admin WHERE username='".$user_name."' AND password='".$pass_word."'LIMIT 1" ;
    $row=mysqli_query($mysqli,$sql_login);
    $count = mysqli_num_rows($row);
    if($count>0){
        $_SESSION["dangnhap"]=$user_name;
        header("location:index.php");
    }else{
        header("signin.php");
    }

}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css"  href="css/signin.css">
</head>

<body>
    <section>
        <div class="image">
            <img src="images/background-1.png">
        </div>
        <div class="content">
            <div class="form-signin">
                <h2 class="">Login</h2>
                <form action="" method="POST">
                    <div class="input-signin">
                        <p>Username</p>
                        <input type="text" name="user">
                    </div>
                    <div class="input-signin">
                        <p>Password</p> 
                        <input type="password"  name="psw"   >
                    </div>
                    <div class="remember">
                       <label><input type="checkbox"> Remember me</label> 
                    </div>
                    <div class="input-signin">
                    <input type="submit" value="Login" class="Summit" name="loginbutton">
                    </div>
                    <div class="input-signin">
                        <p>Don't have account? <a href="register.php" class="Summit">Sign up</a></p>
                    </div>
                </form>
                <h3>Login with social media</h3>
                <ul class="social">
                    <li><img src="images/facebook.png"></li>
                    <li><img src="images/google.png"></li>
                </ul>
            </div>
        </div>
    </section>
    
</body>

</html>