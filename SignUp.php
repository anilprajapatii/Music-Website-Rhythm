<?php

session_start();

$server_name="localhost";
$user_name="root";
$password='anil1203';
$database_name="login_user";
$msg = false;
$con = mysqli_connect($server_name, $user_name, $password, $database_name);

if (!$con) {
    die('Connection failed: ' .mysqli_error($con));
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_re_password = $_POST['user_re_password'];
    if(!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)){
        $query1 = "select * from users1 where name ='".$user_name."'limit 1";
        $result1 = mysqli_query($con,$query1);
        if(mysqli_num_rows($result1)>0){
            $msg ="username already exist!";
        }
        else{
             if ($user_password === $user_re_password) {
            
               $query = "insert into users1 (name, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
               mysqli_query($con,$query);
               header("Location: log.php");

            } else {
           $msg= "Password did not match";
        };
     };  
    };

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Rhythm || Sign Up </title>
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
            font-size: 14rem;
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
                        <label for="email">Email</label>
                        <input type="email" name="user_email" placeholder="Enter Your Email..." required>
                    </div>
                    <div class="card">
                        <label for="password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password..." required>
                    </div>
                    <div class="card">
                        <label for="re-Password">Re-Password</label>
                        <input type="password" name="user_re_password" placeholder="Enter Your Re-Password..." required>
                    </div>
                    <input type="submit" value="Sign Up" class="submit">
                    <div class="check">
                        <input type="checkbox"><span>Remember Me.</span>
                    </div>
                </form>
                <p>You have an account? <a href="Log.php"> Login </a></p>
            </div>
        </div>
        <div class="right_box1">
             <h1 class="LoginHere">Sign Up</h1>            
             <?php
            if($msg){
               echo("<h3>'$msg'</h3>");
            }
            ?>
            
        </div>
    </section>
</body>
</html>