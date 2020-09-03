<?php 
session_start();

?>
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
        

        <form method="post" action="login.php" style="margin-top: 20px;text-align: center;margin-left: 10%;margin-right: 10%;">
            <input class="input" type="email" name="email" id="email" placeholder="Enter your username">
            <br><br>
            <input class="input" type="password" name="password" id="pass" placeholder="Enter your password">
            <br><br>
            <button class="btn" name="login" type="submit">Enter</button>
        </form>
    </main>

</body>
</html>
<?php
include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$email = mysqli_real_escape_string($con, $_POST['email']);
        $pass = mysqli_real_escape_string($con, $_POST['password']);
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        
	$sel_user = "SELECT * from admin where ADMIN_EMAIL='$email'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	$check_user = mysqli_num_rows($run_user); 
    
        if($check_user==1){

            $row = mysqli_fetch_assoc($run_user);


            if(password_verify($pass, $row["ADMIN_PASS"]))  
            {  
                //return true;  
                echo '<script>alert("Sign in")</script>';

                $_SESSION['username']=$email;  
                header("location: index.php");
                  
            }  
            else  
            {  
            //return false;  
            echo '<script>alert("Wrong User Details")</script>';  
            }  
            
        }
        else {
        
        echo "<script>alert('Password or Email is wrong, try again!')</script>";
        }
}
	
    ?>