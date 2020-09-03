<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';
global $con;

// Cart Session starts here
include 'functions/cartSessions.php';
?>

<!doctype html>
<html>
<head>
    
    <title>New England Shea Butter</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion|Happy+Monkey|Pacifico" rel="stylesheet">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

      <style>
          .bg-mb-rp{
            background:url(img/bg.jpg) no-repeat center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .nesbmail1{
            display:none;
            color: white;
            text-shadow: 3px 3px 9px #000;
        }
        .col-sm-6 div{
            min-width: 250px;
            min-height: 100px;
        }
        .product-image{
            width: 240px;
        }
        @media(max-width: 700px){
            .bg-mb-rp{
                background:url(img/bg-mini.jpg);
            }
            .text1{
            font-size: 28px;
        }
        .text2{
            font-size: 10px;
            margin-left:60px;
        }
        .numnum{
            margin-left:120px;
        }
        .nesbmail1{
            display: block;
            text-align: center;
        }
        }
      </style>
</head>
<body lang="en">
   
           <!-- Navigation Bar -->
        <?php mainHeader() ?> 
           
           <div class="row body">
              
              <div class="lipbalm-desc" align="center" style="margin-top: 20px; margin-left:4px;">
                   <h2 class="large-header whitesmoke">100% Natural Lip Balms</h2>
                   <p class="comfortaa">Our lip balms are luxurious and help to keep your lips moisturized. They also help protect your lips from damaging UV rays, fight against chapped lips, and help to battle cold sores!! Our lip balms are available in regular unflavored, butterscotch, mango, peach, peppermint, strawberry, and vanilla!</p>
               </div>
               
               <!-- LipBalm Products Start Here-->
               <!-- PRODUCTS -->
               <div class="row" style='padding-top: 30px;padding-left: 20px;padding-bottom:50px;'>
                   
                   <!-- Products-->
                   <?php 
                        $proCat = 8;
                        $size = 6;
                        getPro($proCat, $size); 
                    ?>  
                   
               </div>
               
           </div>
           
           <!-- footer-->
           <?php mainFooter();?>
       <!-- end footer-->
       
       
       
       
        </div>
    </div>
        
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    </body>

</html>