<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';

$userIp = getUserIpAddr();
remove_cart();
updateQTY();

?>
<!doctype html>
<html>
<head>
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/cart.css">
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
          (function(a,t,o,m,s){a[m]=a[m]||[];a[m].push({t:new Date().getTime(),event:'snippetRun'});var f=t.getElementsByTagName(o)[0],e=t.createElement(o),d=m!=='paypalDDL'?'&m='+m:'';e.async=!0;e.src='https://www.paypal.com/tagmanager/pptm.js?id='+s+d;f.parentNode.insertBefore(e,f);})(window,document,'script','paypalDDL','d31f7794-cf90-4f46-b1f6-2b3aebbbb37a');
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
           
          <div class="row body" id="cartSection">
            <div class="wrap cf">
    
                <div class="heading cf">
                  <h2 class="comfortaa"><span style="color: rgb(144, 161, 40);font-size: 24px;">My Cart</span></h2>
                  <a href="index.php" class="continue">Continue Shopping</a>
                </div>
                <div class="cart">
                  <ul class="cartWrap">
                      
                    <?php

                      $get_pro = "SELECT * FROM cart WHERE IP_ADD='$userIp'";
                      $runQuery = mysqli_query($con, $get_pro);
                      $count = mysqli_num_rows($runQuery);

                      if($count <= 0){
                        echo "
                        <div class='heading'>
                          <h2 class='comfortaa'><span style='color: rgb(144, 161, 40);font-size: 24px;'>Your Cart is Empty</span></h2>
                        </div>";
                      }

                      $total = 0;

                      while($row_cart = mysqli_fetch_array($runQuery)){

                          $pro_id = $row_cart['P_ID'];
                          $item_id = $row_cart['CART_ID'];
                          $pro_qty = $row_cart['QTY'];
                          $pro_var = $row_cart['VARIETY'];


                          $get_products = "SELECT * from products where PRODUCT_ID='$pro_id'";
                          $run_products = mysqli_query($con, $get_products);

                          while($row_products=mysqli_fetch_array($run_products)){

                            $product_title = $row_products['PRODUCT_NAME'];
                            $product_img = $row_products['PRODUCT_IMG'];
                            $only_price = $row_products['PRODUCT_PRICE'];
                            $sub_total = $row_products['PRODUCT_PRICE']*$pro_qty;

                            $sales_tax = 0.0635;

                            $total += $sub_total;
                        ?>

                    <li class="items odd">
                          <div class="infoWrap"> 

                            <div class="cartSection">
                                
                              <img src="<?php echo $product_img; ?>" alt="" class="itemImg" />
                              <h3><?php echo $product_title; ?></h3>
                              <p class="itemNumber"><?php 
                              
                              $pro_var_arr = explode("~", $pro_var); 
                              
                              for($i = 0; $i < count($pro_var_arr); $i++){
                                echo $pro_var_arr[$i] . "<br>";
                              } ?></p>
                              <br>
                              <p> 
                              <form action="cart.php?add_qty=<?php echo $pro_id; ?>" method="post">
                                <input type="text" name="qty" class="qty" placeholder=" " value="<?php echo $pro_qty; ?>"/> <span style="color:white;">x $<?php echo number_format($only_price, 2); ?></span>
                                <input type="hidden" name="itemID" value="<?php echo$item_id;?>">
                                <button type="submit" name="add_qty" class="updateQTY">update</button>
                              </form>
                              </p>
                            
                              <p class="stockStatus out"></p>
                            </div>  

                            <div class="prodTotal cartSection">
                              <p>$<?php echo number_format($sub_total, 2); ?></p>
                            </div>

                            <div class="cartSection removeWrap">
                              <form action="cart.php?remove_cart=<?php echo $pro_id; ?>" method="post">
                                <input type="hidden" name="itemID" value="<?php echo$item_id;?>">
                                <button type="submit" name="remove_cart" class="remove">X</button>
                              </form>
                            </div>
                          </div>
                    </li>
                    <hr>

                    <?php  

                        }
                    }

                    ?>
                    

                  </ul>
                </div>
                
                <div class="promoCode">
                  <form action="cart.php" method="POST">
                    <label for="promo">Join Our Email List</label>
                    <input style="color: black;" type="email" name="email" placeholder="Enter a Email: " required/>
                    <button type="submit" name="insert_email" class="btn"></button>
                  </form>
                  <?php
                    global $con;
                    $ip_add = getUserIpAddr();
                    
                    //getting the emails from the newsletter...........................
                    if (isset($_POST['email'])) {
                      $email = $_POST['email'];
                    
                      $check_email = "SELECT * FROM newsletter WHERE EMAIL='$email'";
                      $run_check_query = mysqli_query($con, $check_email);
                    
                      if (mysqli_num_rows($run_check_query) >= 1) {
                        echo "<script>window.open('cart.php#cartSection', '_self')</script>";
                      } else {
                        $insert_email = "INSERT INTO newsletter (EMAIL, PHONE, CUS_NAME) values ('$email','none','none')";
                        $run_query = mysqli_query($con, $insert_email);
                    
                        echo "<script>window.open('cart.php#cartSection', '_self')</script>";
                        echo "<p style='color:red;'>Successfully added!</p>";
                      }
                    }
                  ?>
                </div>
                
                <div class="subtotal cf">
                  <ul>
                    <li class="totalRow"><span class="label"><b>Subtotal</b></span><span class="value">$<?php echo number_format($total, 2); ?></span></li>
                    <?php if($total > 0){ ?>
                    <li class="totalRow"><span class="label"><b>Tax</b></span><span class="value">$<?php echo number_format($total * $sales_tax, 2); ?></span></li>
                    <li class="totalRow final"><span class="label">Total</span><span class="value">$<?php echo number_format(($total * $sales_tax) + $total, 2); ?></span></li>
                    <li class="totalRow" style="color:white;font-size: 13px;">Continue to checkout to view shipping price</li>
                    <li class="totalRow"><a href="checkout.php" class="btn continue">Checkout</a></li>
                    <?php }else{  ?>
                    <li class="totalRow final"><span class="label">Total</span><span class="value">$<?php echo $total; ?></span></li>
                    <?php }?>
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