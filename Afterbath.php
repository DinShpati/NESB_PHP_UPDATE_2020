<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';
add_cart();
?>

<!doctype html>
<html>
<head>
    
    <title>After Bath Oil</title>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet" type="text/css">
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
<body lang="en" >
   
    <!-- Navigation Bar -->
        <?php mainHeader() ?>
    
           <div class="row body">
                  <div class="col-sm-12">
                        <p align="center"><span style="color: rgb(144, 161, 40);font-size: 25px;">AfterBath<br><span style="font-size: 16px; color: rgb(252, 15, 62);">"More than just a beautiful fragrance"</span><br></span></p>    
                   </div>
           </div>
           <div class="row body">
               <div class="col-sm-6">
                   <div class="row">
                        <!-- Products-->
                        <?php 
                            $proCat = 2;
                            $size = 6;
                            getPro($proCat, $size); 
                        ?>
                   </div>
               </div>
               <div class="col-sm-6">
                   <p class="comfortaa mobile-padding-20">New England Shea Butter's AfterBath oil is a combination of oils that make it a MULTI-TASKING POWERHOUSE.
                <br>
                <br>    
                It is made by infusing Shea Oil, Avocado Oil, Jojoba Oil and our infamous Q2000 oil. A combination of the best oils for your skin and hair will leave you feeling and smelling great. Our unique formula is non-greasy and quickly absorbs into your skin. No personal routine would be complete without our AfterBath Oil.<br>
                <br>
                These natural, raw, and 100% pure ingredients have endless applications because they mimic the natural oils (Sebum) found in our skin and hair. Sebum keeps moisture in and protects skin and hair from environmental stressors. The composition of these oils so closely resemble our body's natural oils that they are prone to penetrate deep within several layers of our skin leaving it hydrated and soft. Dry skin and oily areas alike soak up its moisturizing properties, which are quickly absorbed without leaving a greasy residue or clogging pores. Hair loves it, too. From scalp to strands, our AfterBath delivers essential hydration. It's the ideal foundation for all beauty regimens.<br>
                <br>
                We've sourced our ingredients from a select few farms in the Sonoran Desert, Peru, Ghana and Italy. These close and longstanding relationships help us ensure that our oils are extracted according to strict standards of chemical-free processing and respect for the land on which these fruits and shrubs are grown. The results are pure and rich in simple goodness.<br>
                <br>
                We're confident you'll be completely enamored by our AfterBath Oil because our love for it runs deep. It was one of our first products back in 2004, and it's still our #1 selling product today.<br>
                <br>
                </p>
               </div>
           </div>
           
           <!-- footer-->
           <?php mainFooter()?>
       <!-- end footer-->
       
       
       
       
        </div>
    </div>
    </div>
       <script src="main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>

</html>