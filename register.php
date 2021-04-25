<?php
   include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/5eafdc130b.js" crossorigin="anonymous"></script>

</head>

<body>
    <section>
        <div class="content">
            <div class="form-signup">
                <h2>Create Account</h2>
                <?php
                  if(isset($_POST['Regisbutton'])){
                  if(empty($_POST['username']) or empty($_POST['psw1'])){
                echo'<p style="color:red">Please not empty</p>';
                }   else{
                $username = $_POST['username'];
                $password = $_POST['psw1'];
                $password2 = $_POST['psw2'];
                if($password2 != $password){
                echo'<p style="color:red">Password not same</p>';
                 } else{
                $sql = "SELECT * FROM tb_admin WHERE username ='$username'";
                $query = mysqli_query($mysqli,$sql);
                $num = mysqli_num_rows($query);
                if($num == 0){
                    $sql2 = "INSERT INTO tb_admin(username,password) VALUES('".$username."','".$password."')";
                    $them = mysqli_query($mysqli, $sql2);
                    if($them){
                        echo'<p style="color:white">Successful Register</p>';
                    }
                }
            }
        }
        }
    ?>
                <form method="POST" action="register.php">
                    <div class="input-signup">
                        <span> Create Username</span>
                        <input type="text" name="username" class="username">
                    </div>
                    <div class="input-signup">
                        <span>Password</span>
                        <input type="password" name="psw1" class="Pass1">
                    </div>
                    <div class="input-signup">
                        <span>Confirm Password</span>
                        <input type="password" name="psw2" class="Pass2">
                    </div>
                   
                       <p> This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy">Google Privacy Policy</a> and <a href="https://policies.google.com/terms">Terms of Service</a> apply.</p>

                    <div class="input-signup">
                        <input type="submit" class="Regis" name="Regisbutton" value="Sign In">
                    </div>
                    <div class="input-signup">
                        <p>Do you already have an account? <a href="signin.php">Sign Up</a></p>
                    </div>
                </form>
               
            </div>
        </div>
    </section>
</body>

</html>