<?php

include 'header.php';

?>
<!doctype html>
<html>
<head>
    
    <title>Shampoo & Conditioner</title>
    
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

    <!-- PayPal BEGIN -->
      <script>
          ;(function(a,t,o,m,s){a[m]=a[m]||[];a[m].push({t:new Date().getTime(),event:'snippetRun'});var f=t.getElementsByTagName(o)[0],e=t.createElement(o),d=m!=='paypalDDL'?'&m='+m:'';e.async=!0;e.src='https://www.paypal.com/tagmanager/pptm.js?id='+s+d;f.parentNode.insertBefore(e,f);})(window,document,'script','paypalDDL','d31f7794-cf90-4f46-b1f6-2b3aebbbb37a');
        </script>
      <!-- PayPal END -->
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


           
               <!-- MAIN BODY-->
               <main class="row body">
                     <div class="col-md-5" style="padding: 20px 0 0 20px;">
                         <img src="img/shampoo_cond.jpg" class="image_frame"/>
                     </div>
                     <div class="col-md-7" style="padding-top: 20px">
                         <h2 class="comfortaa"><span style="color: rgb(144, 161, 40);font-size: 24px;">Shea Butter Shampoo plus Conditioner </span><br></h2>
                         <p class="comfortaa" style="margin-top: 20px;"><b>Shea Butter Shampoo & Conditioner:</b><br>
                    Contains a Pro-Vitamin Complex, which penetrates into your hair to help prevent damages and improve it from the inside out. 
                    Made with all natural botanical and organic herbs. It gently cleans without stripping and can be used everyday. 
                    It moisturizes, repairs and protects lifeless hair into healthy, soft & shiny hair with extra body.</p>
                     </div>
               </main>
               
               <!-- PRODUCTS -->
               <div class="row body" style='padding-top: 30px;'>
                   <!-- Product 1-->
                   <div class="col-md-3"align="center">
                   <div style="">
                   <img src="img/shampoo_cond.jpg" alt="SHampoo & Conditioner" class="product-image"style="width: 200px;"/></div><br>
                   <h3 class="product-header">Shea Butter Shampoo &amp; Conditioner</h3>
                   <p class="product-price"align="center">$9.99 &nbsp;&nbsp;<span style="text-decoration: line-through;color:dimgray;"></span></p>
                   <!-- Add to cart button-->
                   <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=XHV3YMWDXXMLN" class="btn btn-success" target="_blank">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                   </div>
                   <!-- Product 2-->
                   <div class="col-md-3 mobile-padding-20"align="center"style="margin-left: 10px;">
                   <div style="">
                   <img src="img/shampoo_cond_2pk.jpg" alt="SHampoo & Conditioner" class="product-image" style="width: 200px;"/></div><br>
                   <h3 class="product-header">Shea Butter Shampoo &amp; Conditioner--2pk</h3>
                   <p class="product-price"align="center">$16.99 &nbsp;&nbsp;<span style="text-decoration: line-through;color:dimgray;"></span></p>
                   <!-- Add to cart button-->
                   <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2NQQYPHY2KNFN" class="btn btn-success" target="_blank">Add To Cart <i class="fas fa-shopping-cart"></i></a>
                   </div>
                   <!-- Product 3-->
                   <div class="col-md-3"align="center">
                   
                   </div>
                   <!-- Product 4-->
                   <div class="col-md-3"align="center">
                   
                   </div>
                   
               </div>
               
           <!-- footer-->
           <div class="row body" style="padding-top: 30px;">
                  
                   <div class="col-sm-5">
                      
                       <a href="#"><img src="img/logo-facebook.png" class="icons" alt="Folllow us on Facebook"/></a>
                       <a href="#"><img src="img/twitter-logo.png" class="icons" alt="Folllow us on Twitter"/></a>
                       <a href="#"><img src="img/icon2.png" class="" alt="Network" width="22px" style="margin-left: 5px;"/></a>
                   </div>
                   <div class="col-sm-7">
                       <div class="quote">
                           <blockquote>
                               <span style="font-size: 18px; color:white;"><span style="font-size: 60px; color:forestgreen;font-family: happy-monkey">“
                               </span> <i class="slogan">A name you can trust at a price you can afford! </i><span style="font-size: 60px; color:forestgreen;font-family: happy-monkey">”
                               </span></span>
                           </blockquote>
                       </div>
                   </div>
            </div>
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