<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';

global $con;
global $email;
global $order_summary;

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
           
          <div class="row body">
            <div class="wrap cf">
    
                <div class="heading cf">
                  <h2 class="comfortaa"><span style="color: rgb(144, 161, 40);font-size: 24px;">Order Summary</span></h2>
                </div>

                <div class="heading cf">

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
                    $order_summary = "";

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

                        $order_summary .= "`" . $product_title . $pro_var . " ~pcs: " . $pro_qty;

                    }
                    }

                    ?>
                    <ul class="summary">
                        <li class="totalRow"><h6><b>Subtotal: </b>$<?php echo number_format($total, 2); ?></h6></li>
                        <?php if($total > 0){ ?>
                        <li class="totalRow"><h6><b>Tax: </b>$<?php echo number_format($total * $sales_tax, 2); ?></h6></li>
                        <li class="totalRow final"><h4>Total: $<?php echo number_format(($total * $sales_tax) + $total, 2); ?></h4></li>
                        <li class="totalRow" style="color:white;font-size: 13px;">Continue to checkout to view shipping price</li>
                        <?php }else{  ?>
                        <li class="totalRow final"><span class="label">Total</span><span class="value">$<?php echo $total; ?></span></li>
                        <?php }?>
                    </ul>

                </div>
                <br>
                <div class="heading cf" id="hidOnCheckout">
                  <h2 class="comfortaa"><span style="color: rgb(144, 161, 40);font-size: 24px;">Contact Information</span></h2>
                </div>
                <div class="cart">
                    <form action="checkout.php" method="post">
                        <input type="email" name="contactEmail" id="vontactEmail" class="textInpt" placeholder="Enter Your Email" required>
                        <button type="submited" name="submitEmail" id="sbmitEmail" class="btn con">Continue to Checkout</button>
                    </form>
                    <?php
                        global $con;

                        $ip_add = getUserIpAddr();

                        if(isset($_POST['contactEmail'])){
                            
                            $email = $_POST['contactEmail'];

                            echo "<script>document.getElementById('test').style.visibility = 'hidden';</script>";
                            include("payments.php");

                        }
                    ?>
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