<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';

global $con;
global $email;
global $order_summary;

session_start();

    //updating QTY
    if(isset($_SESSION['shopping_cart'])){
        if(isset($_POST['add_qty'])){
                for($i = 0; $i < count($_SESSION['shopping_cart']); $i++){
                    if($_SESSION['shopping_cart'][$i]['id'] == filter_input(INPUT_GET, 'id') && $_SESSION['shopping_cart'][$i]['variation'] == filter_input(INPUT_POST, 'variety')){
                        if(filter_input(INPUT_POST, 'qty') > 0){
                            $_SESSION['shopping_cart'][$i]['quantity'] = filter_input(INPUT_POST, 'qty');
                        }else{
                            $_SESSION['shopping_cart'][$i]['quantity'] = 1;
                        }
                }
            }
        }
    }

    //REmoving product from product
    if(isset($_SESSION['shopping_cart'])){
        if(filter_input(INPUT_GET, 'action') == 'delete'){
                foreach($_SESSION['shopping_cart'] as $key =>  $product){
                    if($product['id'] == filter_input(INPUT_GET, 'id') && $_SESSION['shopping_cart'][$key]['variation'] == filter_input(INPUT_POST, 'var_rem')){
                            //remove from the shopping card after meeting the criteria
                            unset($_SESSION['shopping_cart'][$key]);
                }
            }
            //reset sesssion array keys so they match the new product ids
            $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
        }
    }


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
                  <ul class="cartWrap">

                <?php

                    if(empty($_SESSION['shopping_cart'])){
                    echo "
                    <div class='heading'>
                        <h2 class='comfortaa'><span style='color: rgb(144, 161, 40);font-size: 24px;'>Your Cart is Empty</span></h2>
                    </div>";
                    }

                    $total = 0;
                    $order_summary = "";
                    $sales_tax = 0.0635;

                   if(!empty($_SESSION['shopping_cart'])){

                        foreach($_SESSION['shopping_cart'] as $key => $product): 

                            $prod_id = $product['id'];
                            $sub_total = $product['quantity'] * implode(" ", $product['price']);

                            $getImage = 'SELECT * FROM products WHERE PRODUCT_ID = ' . $prod_id . ' LIMIT 1';
                            $iResult = mysqli_query($con, $getImage);
                            $image;
                            if (mysqli_num_rows($iResult) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($iResult)) {
                                    $image = $row['PRODUCT_IMG'];
                                }
                            }

                    ?>

                        <li class="items odd">
                            <div class="infoWrap"> 

                                <div class="cartSection">
                                    
                                <img src="<?php echo $image; ?>" alt="" class="itemImg" />
                                <h3><?php echo $product['name']; ?></h3>
                                <p class="itemNumber"><?php 
                                
                                $pro_var_arr = explode("~", $product['variation']); 
                              
                                for($i = 0; $i < count($pro_var_arr); $i++){
                                    $optionNum = $i+1;
                                    echo 'Option ' . $optionNum . ': ' . $pro_var_arr[$i] . "<br>";
                                } ?>
                                    </p>
                                <br>
                                <p> 
                                <form action='cart.php?action=update&id=<?php echo $product['id'] ?>' method="post">
                                    <input type="text" name="qty" class="qty" placeholder=" " value="<?php echo $product['quantity']; ?>"/> <span style="color:white;">x $<?php echo number_format($sub_total, 2); ?></span>
                                    <input type="hidden" name="itemID" value="<?php echo $product['id'];?>">
                                    <input type="hidden" name="variety" value="<?php echo $product['variation'];?>">
                                    <button type="submit" name="add_qty" class="updateQTY">update</button>
                                </form>
                                </p>
                                
                                <p class="stockStatus out"></p>
                                </div>  

                                <div class="prodTotal cartSection">
                                <p>$<?php echo number_format($sub_total, 2); ?></p>
                                <?php $total += $sub_total ?>
                                </div>

                                <div class="cartSection removeWrap">
                                <form action="cart.php?action=delete&id=<?php echo $product['id']; ?>" method="post">
                                    <input type="hidden" name="itemID" value="<?php echo $product['id']?>">
                                    <input type="hidden" name="var_rem" value="<?php echo $product['variation'];?>">
                                    <button type="submit" name="remove_cart" class="remove">X</button>
                                </form>
                                </div>
                            </div>
                        </li>
                        <hr>

                        <?php endforeach; ?>
                        <?php

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

