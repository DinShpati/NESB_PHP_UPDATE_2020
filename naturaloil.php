<?php

include 'header.php';
include 'footer.php';

?>

<!doctype html>
<html>
<head>
    
    <title>Natural Oils</title>
    
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
                  <div class="Main_Natural_Oil" style="margin-left: 23%;" align="center">
                       <br>
                       <h2 class="large-header whitesmoke">Natural Oils</h2>
                       <br>
                       <h2 class="large-header whitesmoke">New England Shea Butter</h2>
                       <p class="comfortaa"><b>"Fragrances from Jannah"</b></p><br>
                       <p class="comfortaa">Fragrances of the highest quality. <br>
                        Long lasting, sensual fragrances.</p><br>
                        <p class="comfortaa">
                            <span style="color:red;">Q2000</span> is our signature scent that you will only find here!<br>
                            Don't forget to try our newest oils & #1 sellers "<span style="color:hotpink;">Bella, Rabia, Saffron</span>" 
                        </p>
                   </div>
               </main>
               
               <!-- PRODUCTS DIVISION-->
               <div class="row body">
                  
                  <!-- First Product-->
                   <div class="col-sm-3" align="center">
                       <div style="background-color:white;max-width:190px;">
                   <img src="img/oils.jpg" alt="Oils" class="product-image"style="width: 180px;"/></div><br>
                   <h3 class="product-header">Natural Oils</h3>
                   <p class="product-price"align="center">$9.99 &nbsp;&nbsp;<span style="text-decoration: line-through;color:dimgray;"></span><br>
                   1/3 oz per bottle</p>
                   <!-- Add to cart button-->
                   <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="RS5T5RWA357J4">
                        <table>
                        <tr><td><input type="hidden" name="on0" value="Choose an Oil:"><span style="color:white;">Choose an Oil:</span></td></tr><tr><td><select name="os0">
                            <option value="Aqaba">Aqaba</option>
                            <option value="Arabian Sandalwood">Arabian Sandalwood</option>
                            <option value="Bella *NEW OIL*">Bella *NEW OIL*</option>
                            <option value="Breeze">Breeze</option>
                            <option value="Black Coconut *NEW OIL*">Black Coconut *NEW OIL* </option>
                            <option value="China Rain">China Rain </option>
                            <option value="China Musk">China Musk </option>
                            <option value="Egyptian Musk">Egyptian Musk </option>
                            <option value="Glow *NEW OIL*">Glow *NEW OIL* </option>
                            <option value="Green Musk">Green Musk </option>
                            <option value="Hejaz">Hejaz *NEW OIL* </option>
                            <option value="Isma *NEW OIL*">Isma *NEW OIL* </option>
                            <option value="Mawa">Mawa </option>
                            <option value="Mali">Mali </option>
                            <option value="Mist *NEW OIL*">Mist *NEW OIL* </option>
                            <option value="Myrrh">Myrrh </option>
                            <option value="Opium">Opium </option>
                            <option value="Q2000">Q2000 </option>
                            <option value="Rabia *NEW OIL*">Rabia *NEW OIL* </option>
                            <option value="Red Musk">Red Musk </option>
                            <option value="Red Sea">Red Sea </option>
                            <option value="Roses *NEW OIL*">Roses *NEW OIL* </option>
                            <option value="Saffron *NEW OIL*">Saffron *NEW OIL* </option>
                            <option value="Sleek *NEW OIL*">Sleek *NEW OIL* </option>
                            <option value="Suwais">Suwais *NEW OIL* </option>
                            <option value="Vanilla Woods *NEW OIL*">Vanilla Woods *NEW OIL* </option>
                            <option value="Waves *New OIL*">Waves *New OIL* </option>
                            <option value="Zahra">Zahra *NEW OIL* </option>
                        </select> </td></tr>
                        </table><br><br>
                       <button class="btn btn-success" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"style="margin-top: 5px;">
                           Add To Cart <i class="fas fa-shopping-cart"></i>
                       </button>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                    <!-- Button Ends-->
                   </div>
                   <!-- Second Product-->
                   <div class="col-sm-3 mobile-padding-20-700px" align="center" style="margin-left: 20px;" class="margin-top-15"><br>
                       <div style="background-color:white;max-width:190px;">
                   <img src="img/oils.jpg" alt="Oils" class="product-image" style="width: 180px;"/></div><br>
                   <h3 class="product-header">Natural Oils 2pack</h3>
                   <p class="product-price"align="center">$14.99 &nbsp;&nbsp;</p>
                   <!-- Add to cart button-->
                   <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="VLP9W8R52FMY6">
                        <table>
                            <tr><td><input type="hidden" name="on0" value="Choose an Oil:"><span style="color:white;">Choose an Oil:</span></td></tr><tr><td><select name="os0">
                            <option value="Aqaba">Aqaba</option>
                            <option value="Arabian Sandalwood">Arabian Sandalwood</option>
                            <option value="Bella *NEW OIL*">Bella *NEW OIL*</option>
                            <option value="Breeze">Breeze</option>
                            <option value="Black Coconut *NEW OIL*">Black Coconut *NEW OIL* </option>
                            <option value="China Rain">China Rain </option>
                            <option value="China Musk">China Musk </option>
                            <option value="Egyptian Musk">Egyptian Musk </option>
                            <option value="Glow *NEW OIL*">Glow *NEW OIL* </option>
                            <option value="Green Musk">Green Musk </option>
                            <option value="Hejaz">Hejaz *NEW OIL* </option>
                            <option value="Isma *NEW OIL*">Isma *NEW OIL* </option>
                            <option value="Mawa">Mawa </option>
                            <option value="Mali">Mali </option>
                            <option value="Mist *NEW OIL*">Mist *NEW OIL* </option>
                            <option value="Myrrh">Myrrh </option>
                            <option value="Opium">Opium </option>
                            <option value="Q2000">Q2000 </option>
                            <option value="Rabia *NEW OIL*">Rabia *NEW OIL* </option>
                            <option value="Red Sea">Red Sea </option>
                            <option value="Roses *NEW OIL*">Roses *NEW OIL* </option>
                            <option value="Saffron *NEW OIL*">Saffron *NEW OIL* </option>
                            <option value="Sleek *NEW OIL*">Sleek *NEW OIL* </option>
                            <option value="Suwais">Suwais *NEW OIL* </option>
                            <option value="Vanilla Woods *NEW OIL*">Vanilla Woods *NEW OIL* </option>
                            <option value="Waves *New OIL*">Waves *New OIL* </option>
                            <option value="Zahra">Zahra *NEW OIL* </option>
                        </select> </td></tr>
                            <tr><td><input type="hidden" name="on1" value="Choose Your Second Oil:"><span style="color:white;">Choose Your Second Oil:</span></td></tr><tr><td><select name="os1">
                            <option value="Aqaba">Aqaba</option>
                            <option value="Arabian Sandalwood">Arabian Sandalwood</option>
                            <option value="Bella *NEW OIL*">Bella *NEW OIL*</option>
                            <option value="Breeze">Breeze</option>
                            <option value="Black Coconut *NEW OIL*">Black Coconut *NEW OIL* </option>
                            <option value="China Rain">China Rain </option>
                            <option value="China Musk">China Musk </option>
                            <option value="Egyptian Musk">Egyptian Musk </option>
                            <option value="Glow *NEW OIL*">Glow *NEW OIL* </option>
                            <option value="Green Musk">Green Musk </option>
                            <option value="Hejaz">Hejaz *NEW OIL* </option>
                            <option value="Isma *NEW OIL*">Isma *NEW OIL* </option>
                            <option value="Mawa">Mawa </option>
                            <option value="Mali">Mali </option>
                            <option value="Mist *NEW OIL*">Mist *NEW OIL* </option>
                            <option value="Myrrh">Myrrh </option>
                            <option value="Opium">Opium </option>
                            <option value="Q2000">Q2000 </option>
                            <option value="Rabia *NEW OIL*">Rabia *NEW OIL* </option>
                            <option value="Red Sea">Red Sea </option>
                            <option value="Roses *NEW OIL*">Roses *NEW OIL* </option>
                            <option value="Saffron *NEW OIL*">Saffron *NEW OIL* </option>
                            <option value="Sleek *NEW OIL*">Sleek *NEW OIL* </option>
                            <option value="Suwais">Suwais *NEW OIL* </option>
                            <option value="Vanilla Woods *NEW OIL*">Vanilla Woods *NEW OIL* </option>
                            <option value="Waves *New OIL*">Waves *New OIL* </option>
                            <option value="Zahra">Zahra *NEW OIL* </option>
                        </select> </td></tr>
                        </table><br>
                       <button class="btn btn-success" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                        <!-- Cart Button Ends Here-->
                   </div>
                   <!-- 3rd product -->
                   <div class="col-sm-3 mobile-padding-20-700px" align="center" style="margin-left: 20px;" class="margin-top-15"><br>
                        <div style="background-color:white;max-width:190px;">
                       <img src="img/oils.jpg" alt="Oils" class="product-image" style="width: 180px;"/></div><br>
                       <h3 class="product-header">Exotic & Essential Oils</h3>
                       <p class="product-price"align="center">$10.00 &nbsp;&nbsp;</p>
                       <!-- Add to cart button-->
                       <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="LRVKMVZUJVUZ2">
                        <table>
                        <tr><td><input type="hidden" name="on0" value="Choose an Oil"><span style="color:white;">Choose an Oil:</span></td></tr><tr><td><select name="os0">
                            <option value="Almond">Almond </option>
                        	<option value="Attar 96 Majmua">Attar 96 Majmua </option>
                        	<option value="Bergamot Musk">Bergamot Musk </option>
                        	<option value="Bint Al-Madina">Bint Al-Madina </option>
                        	<option value="Firdaus">Firdaus </option>
                            <option value="Jasmine">Jasmine </option>
                        	<option value="Kush">Kush </option>
                        	<option value="Lavender">Lavender </option>
                        	<option value="Lemongrass">Lemongrass </option>
                        	<option value="Patchuli">Patchouli</option>
                        	<option value="Red Musk">Red Musk </option>
                        	<option value="Rizwan Musk">Rizwan Musk </option>
                        </select> </td></tr>
                        </table><br>
                        <button class="btn btn-success" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">Add To Cart <i class="fas fa-shopping-cart"></i></button>
                        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>

                   </div>
                   <div class="col-sm-3">
                      <!-- More Products Go here-->
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