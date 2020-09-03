<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mobile.css">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion|Happy+Monkey|Pacifico" rel="stylesheet">
</head>
<body>
    
    <main class="center">

        <h1 class="h1 primary">Login</h1>
        <img src="img/nesb.png" alt="New England Shea Butter, LLC." class="img-respnsive">
        

        <form method="post" action="signUp.php" style="margin-top: 20px;text-align: center;margin-left: 10%;margin-right: 10%;">
            <input class="input" type="email" name="email" id="email" placeholder="Enter your username">
            <br><br>
            <input class="input" type="password" name="password" id="pass" placeholder="Enter your password">
            <br><br>
            <button class="btn" type="submit" name="login">Enter</button>
        </form>
    </main>

</body>
</html>
<?php
//  include("includes/db.php"); 
	
//  	if(isset($_POST['login'])){
	
//  		$email = mysqli_real_escape_string($con, $_POST['email']);
//          $pass = mysqli_real_escape_string($con, $_POST['password']);
//          $hash = password_hash($pass, PASSWORD_DEFAULT);
	
//  	$sel_user = "INSERT INTO admin (ADMIN_USERNAME, ADMIN_EMAIL, ADMIN_PASS, ADMIN_IMG) VALUES ('Afrim Spataj', '$email','$hash', 'shea.png')";
	
//      $run_user = mysqli_query($con, $sel_user) or die("error 234"); 
    
//  	$check_user = mysqli_num_rows($run_user); 
	
//  	if($check_user == 1){
	
	
//  	echo "<script>alert('HAHA DUDE IT WORLED!!!!!!!!!')</script>";
	
// 	}
//  	else {
	
// 	echo "<script>alert('Password or Email is wrong, try again!')</script>";
	
//  	}
	
	
//      }
    ?>