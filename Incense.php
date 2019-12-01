<?php

include 'header.php';
include 'footer.php';

?>
<!doctype html>
<html>
<head>
    
    <title>Incense</title>
    
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
           
           <div class="row body">
               <div class="col-md-6" style="margin-top: 10px;">
                   <img src="img/incense.jpg" alt="New England Shea Butter Incense" class="image_frame">
               </div>
               <div class="col-md-6" align="center" style="margin-top: 10px;">
                   <h2 class="large-header whitesmoke">Incense</h2>
                   <h2 class="large-header whitesmoke">"Fragrence From Jannah"</h2>
                   <p class="comfortaa">New England Shea Butter is proud and excited to       introduce our unique incense. Our incense is of the   highest quality charcoal, made with expertise handed   down, from generation to generation, over the past 200   years. The oils that go into creating our incense will bring   you wonder and delight.  Experience the tranquility,   beauty an aroma that will relax you.  Order now!!</p>
               </div>
           </div>
           
           <!-- Products-->
           <div class="row body">
              
               <div class="col-md-3" style="margin-left: 30%">
                  <br><br>
                   <div style="background-color:white;max-width:190px;" align="center">
                   <img src="img/incense_product.jpg" alt="SHampoo & Conditioner" class="product-image"style="height: 240px;width: 60%"/></div><br>
                   <h3 class="product-header" style="margin-left: 40px;">Incense</h3>
                   <p class="product-price"align="center">$5.99 &nbsp;&nbsp;<span style="text-decoration: line-through;color:dimgray;"></span></p>
                   <!-- Add to cart button-->
                   <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="V3NMSL58ZM3M8">
                        <table>
                            <tr><td><input type="hidden" name="on0" value="Choose a Scent" ><span style="color:white;">Choose a Scent</span></td></tr><tr><td><select name="os0" class="long_drpdwn">
                            <option value="Bint El Madina">Bint El Madina</option>
                            <option value="Firdaus">Firdaus </option>
                            <option value="Sandalwood">Sandalwood </option>
                            <option value="Superior Egyptian Musk">Superior Egyptian Musk</option>
                        </select> </td></tr>
                        </table><br>
                        <button class="btn btn-success" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>

               </div>
               <div class="col-md-3">
               </div>
               <div class="col-md-3"></div>
               <div class="col-md-3"></div>
               <br><br><br><br><br>
           </div>
           
           <?php mainFooter(); ?>
       
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