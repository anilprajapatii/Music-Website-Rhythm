<?php

session_start();

$server_name="localhost";
$user_name="root";
$password='anil1203';
$database_name="login_user";
$msg = false;
$con = mysqli_connect($server_name, $user_name, $password, $database_name);

if (isset($_POST['user_name'])) {
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];
    $query = "select * from users1 where name ='".$user_name."' AND password = '".$user_password."'limit 1";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1){
        header("Location: MusicWeb.php");
    }
    else{
        $msg= "Incorrect Password";
    };
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rhythm || Login</title>
    <link rel="stylesheet" href="LoginSignup.css">
    <style>
        .right_box1{
            /* border:1px solid white; */
            display:flex;
            align-item:center;
            justify-content:center;
        }
        .LoginHere{
            color:white;
            text-align:center;
            font-size: 22rem;
        }
    </style>
</head>
<body>
    <section>
        <div class="left_box1">
            <div class="content">
                <form action="#" method="POST">
                    
                    <div class="card">
                        <label for="name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your Name..." required>
                    </div>
                    
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password..." required>
                    </div>
                    
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox"><span>Remember Me.</span>
                    </div>
                </form>
                <p>Don't have a account yet? <a href="SignUp.php"> Sign Up </a></p>
            </div>
        </div>
        <div class="right_box1">
            <h1 class="LoginHere">Login</h1>
            <?php
            if($msg){
               echo("<h3>'$msg'</h3>");
            }
            ?>
        </div>
    </section>
</body>
</html>