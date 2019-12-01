<?php

include 'header.php';

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
              
              <div class="lipbalm-desc" align="center" style="margin-top: 20px; margin-left:4px;">
                   <h2 class="large-header whitesmoke">100% Natural Lip Balms</h2>
                   <p class="comfortaa">Our lip balms are luxurious and help to keep your lips moisturized. They also help protect your lips from damaging UV rays, fight against chapped lips, and help to battle cold sores!! Our lip balms are available in regular unflavored, butterscotch, mango, peach, peppermint, strawberry, and vanilla!</p>
               </div>
               
               <!-- LipBalm Products Start Here-->
               <!-- PRODUCTS -->
               <div class="row" style='padding-top: 30px;padding-left: 20px;padding-bottom:50px;'>
                   <!-- Product 1-->
                   <div class="col-sm-6"align="center">
                   <div class="lipbalm-img">
                   <img src="img/lipbalm.jpg" alt="NESB LipBalm" class="product-image"style="width: 200px;height: 65.25px;"/></div><br>
                   <h3 class="product-header">Lip Balm</h3>
                   <p class="product-price"align="center">$2.99 &nbsp;&nbsp;<span style="text-decoration: line-through;color:dimgray;"></span></p>
                   <!-- Add to cart button-->
                       <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="SYHNCE658ADLQ">
                            <table>
                                <tr><td><input type="hidden" name="on0" value="Choose A Flavor:"><span style="color:white;">Choose A Flavor:</span></td></tr><tr><td><select name="os0">
                                <option value="Regular Unflavored">Regular Unflavored </option>
                                <option value="Butterscotch & Honey OUT OF STOCK" disabled>Butterscotch &amp; Honey - OUT OF STOCK</option>
                                <option value="Mango">Mango </option>
                                <option value="Peach">Peach </option>
                                <option value="Peppermint">Peppermint </option>
                                <option value="Strawberry" disabled>Strawberry OUT-OF_STOCK</option>
                                <option value="Vanilla">Vanilla </option>
                            </select> </td></tr>
                            </table>
                                <button class="btn btn-success LipBalm-btn" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                   Add To Cart <i class="fas fa-shopping-cart"></i>
                               </button>
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form>
                   <!-- Add to cart ends Here-->
                   </div>
                   <!-- Product 2-->
                   <div class="col-sm-6"align="center">
                   <div class="lipbalm-img">
                   <img src="img/lipbalm.jpg" alt="NESB LIPBALM" class="product-image" style="width: 200px;height: 65.25px;"/></div><br>
                   <h3 class="product-header">Lip Balm (3 pack)</h3>
                   <p class="product-price"align="center">$7.99 &nbsp;&nbsp;<span style="text-decoration: line-through;color:dimgray;"></span></p>
                   <!-- Add to cart button-->
                   <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="SVGRRHGCPTEC2">
                        <table>
                        <!-- First Option-->
                            <tr><td><input type="hidden" name="on0" value="2nd Option:"><span style="color:white;">Choose A Flavor:</span></td></tr><tr><td><select name="os0">
                            <option value="Regular Unflavored">Regular Unflavored </option>
                            <option value="Butterscotch & Honey OUT OF STOCK" disabled>Butterscotch & Honey OUT OF STOCK </option>
                            <option value="Mango">Mango </option>
                            <option value="Peach">Peach </option>
                            <option value="Peppermint">Peppermint </option>
                            <option value="Strawberry" disabled>Strawberry OUT-OF-STOCK</option>
                            <option value="Vanilla">Vanilla </option>
                        </select> </td></tr>
                        
                        <!-- Second option-->
                            <tr><td><input type="hidden" name="on1" value="3rd Option:"><span style="color:white;">Choose your 2nd Flavor:</span></td></tr><tr><td><select name="os1">
                            <option value="Regular Unflavored">Regular Unflavored </option>
                            <option value="Butterscotch & Honey OUT OF STOCK" disabled>Butterscotch & Honey OUT OF STOCK </option>
                            <option value="Mango">Mango </option>
                            <option value="Peach">Peach </option>
                            <option value="Peppermint">Peppermint </option>
                            <option value="Strawberry" disabled>Strawberry OUT-OF-STOCK</option>
                            <option value="Vanilla">Vanilla </option>
                        </select> </td></tr>
                        
                        <!-- Third Option-->
                            <tr><td><input type="hidden" name="on2" value="Choose A Flavor:"><span style="color:white;">Choose your 3rd Flavor:</span></td></tr><tr><td><select name="os2">
                            <option value="Regular Unflavored">Regular Unflavored </option>
                            <option value="Butterscotch & Honey OUT OF STOCK" disabled>Butterscotch & Honey OUT OF STOCK </option>
                            <option value="Mango">Mango </option>
                            <option value="Peach">Peach </option>
                            <option value="Peppermint">Peppermint </option>
                            <option value="Strawberry" disabled>Strawberry OUT-OF-STOCK</option>
                            <option value="Vanilla">Vanilla </option>
                        </select> </td></tr>
                        
                        </table>
                        <button class="btn btn-success" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"style="margin-top: 5px;">
                                   Add To Cart <i class="fas fa-shopping-cart"></i>
                        </button>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </form>
                   <!--ADD TO CART ENDS HERE-->
                   </div>
                   
                   
               </div>
               
           </div>
           
           <!-- footer-->
           <div class="row body">
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