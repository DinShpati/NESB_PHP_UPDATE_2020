<?php

include 'header.php';
include 'footer.php';

?>
<!doctype html>
<html>
<head>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="cart.css">
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
           
           <!-- content goes here -->
           
          <div class="row body">
            <div class="wrap cf">
    
                <div class="heading cf">
                  <h2 class="comfortaa"><span style="color: rgb(144, 161, 40);font-size: 24px;">My Cart</span></h2>
                  <a href="index.php" class="continue">Continue Shopping</a>
                </div>
                <div class="cart">
              <!--    <ul class="tableHead">
                    <li class="prodHeader">Product</li>
                    <li>Quantity</li>
                    <li>Total</li>
                    <li>Remove</li>
                  </ul>-->
                  <ul class="cartWrap">
                    <li class="items odd">
                      
                  <div class="infoWrap"> 
                      <div class="cartSection">
                      <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                        <p class="itemNumber">#QUE-007544-002</p>
                        <h3>Item Name 1</h3>
                      
                        <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
                      
                        <p class="stockStatus"> In Stock</p>
                      </div>  
                  
                      
                      <div class="prodTotal cartSection">
                        <p>$15.00</p>
                      </div>
                            <div class="cartSection removeWrap">
                        <a href="#" class="remove">x</a>
                      </div>
                    </div>
                    </li>
                    <li class="items even">
                      
                    <div class="infoWrap"> 
                      <div class="cartSection">
                      
                      <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                        <p class="itemNumber">#QUE-007544-002</p>
                        <h3>Item Name 1</h3>
                      
                        <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
                      
                        <p class="stockStatus"> In Stock</p>
                      </div>  
                  
                      
                      <div class="prodTotal cartSection">
                        <p>$15.00</p>
                      </div>
                            <div class="cartSection removeWrap">
                        <a href="#" class="remove">x</a>
                      </div>
                    </div>
                    </li>
                    
                          <li class="items odd">
                          <div class="infoWrap"> 
                      <div class="cartSection">
                          
                      <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                        <p class="itemNumber">#QUE-007544-002</p>
                        <h3>Item Name 1</h3>
                      
                        <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
                      
                        <p class="stockStatus out"> Out of Stock</p>
                      </div>  
                  
                      
                      <div class="prodTotal cartSection">
                        <p>$15.00</p>
                      </div>
                                  <div class="cartSection removeWrap">
                        <a href="#" class="remove">x</a>
                      </div>
                            </div>
                    </li>
                    <li class="items even">
                    <div class="infoWrap"> 
                      <div class="cartSection info">
                          
                      <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />
                        <p class="itemNumber">#QUE-007544-002</p>
                        <h3>Item Name 1</h3>
                      
                        <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>
                      
                        <p class="stockStatus"> In Stock</p>
                        
                      </div>  
                  
                      
                      <div class="prodTotal cartSection">
                        <p>$15.00</p>
                      </div>
                  
                          <div class="cartSection removeWrap">
                        <a href="#" class="remove">x</a>
                      </div>
                      </div>
                      
                    </li>
                    
                    
                    <!--<li class="items even">Item 2</li>-->
              
                  </ul>
                </div>
                
                <div class="promoCode"><label for="promo">Join Our Email List</label><input type="text" name="promo" placholder="Enter Code" />
                <a href="#" class="btn"></a></div>
                
                <div class="subtotal cf">
                  <ul>
                    <li class="totalRow"><span class="label">Subtotal</span><span class="value">$35.00</span></li>
                    
                        <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>
                    
                          <li class="totalRow"><span class="label">Tax</span><span class="value">$4.00</span></li>
                          <li class="totalRow final"><span class="label">Total</span><span class="value">$44.00</span></li>
                    <li class="totalRow"><a href="#" class="btn continue">Checkout</a></li>
                  </ul>
                </div>
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
            <script>
            // Remove Items From Cart
            $('a.remove').click(function(){
              event.preventDefault();
              $( this ).parent().parent().parent().hide( 400 );
            })
            // Just for testing, show all items
              $('a.btn.continue').click(function(){
                $('li.items').show(400);
              })
        </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    </body>

</html>