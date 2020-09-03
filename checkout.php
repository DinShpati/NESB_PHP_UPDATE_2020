<?php
require_once './vendor/autoload.php';

use Utrust\ApiClient;
use Utrust\Validator;
use Utrust\Store\Customer;
use Utrust\Store\Order;
use function PHPSTORM_META\map;

$api_key = getenv('UTRUST_API_SANDBOX');

include 'header.php';
include 'footer.php';
include 'functions/functions.php';

global $con;
global $email;
global $order_summary;

session_start();

if(empty($_SESSION['shopping_cart'])){
    echo "
    <div class='heading'>
        <h2 class='comfortaa'><span style='color: rgb(144, 161, 40);font-size: 24px;'>Your Cart is Empty</span></h2>
    </div>";
}
if(!isset($_SESSION['finish'])){
    $_SESSION['finish'] = true;
}

    $total = 0;
    $order_summary = "";
    $sales_tax = 0.0635;
    $params = array(
        'business' => 'nesb.sales@gmail.com',
        'cmd' => '_cart',
        'upload' => '1',
        'currency_code' => 'USD',
        'return' => 'success.php',
        'cancel_return' => 'cf.php',
    );
    $lineItems = [];

   if(!empty($_SESSION['shopping_cart'])){

        foreach($_SESSION['shopping_cart'] as $key => $product): 

            $pro_var_arr = explode("~", $product['variation']);
            $prod_var = count($pro_var_arr);

            echo "<script>console.log('$prod_var');</script>";

            $prod_id = $product['id'];
            $prod_num = $key + 1;
            $prod_price = array_values($product['price'])[0];
            $sub_total = $product['quantity'] * implode(" ", $product['price']);

            if(count($pro_var_arr) <= 1){
                $arrayBefore = $params;
                $lineBefore = $lineItems;
                $productArray = array(
                    'item_name_' . $prod_num => $product['name'],
                    'item_number_' . $prod_num => $prod_id, 
                    'quantity_' . $prod_num => $product['quantity'],
                    'on0_' . $prod_num => $pro_var_arr[0],
                    'amount_' . $prod_num => $prod_price
                );
                $lineAfter = [
                    'sku' => $prod_num . ' ' . $pro_var_arr[0],
                    'name' => $product['name'],
                    'price' => $prod_price,
                    'currency' => 'USD',
                    'quantity' => $product['quantity']
                ];
            }else if(count($pro_var_arr) == 2){
                $arrayBefore = $params;
                $lineBefore = $lineItems;
                $productArray = array(
                    'item_name_' . $prod_num => $product['name'],
                    'item_number_' . $prod_num => $prod_id, 
                    'quantity_' . $prod_num => $product['quantity'],
                    'on0_' . $prod_num => $pro_var_arr[0],
                    'on1_' . $prod_num => $pro_var_arr[1],
                    'amount_' . $prod_num => $prod_price
                );
                $lineAfter = [
                    'sku' => $prod_num . ' ' . $pro_var_arr[0] . ' ' . $pro_var_arr[1],
                    'name' => $product['name'],
                    'price' => $prod_price,
                    'currency' => 'USD',
                    'quantity' => $product['quantity']
                ];
            }else if(count($pro_var_arr) == 3){
                $arrayBefore = $params;
                $lineBefore = $lineItems;
                $productArray = array(
                    'item_name_' . $prod_num => $product['name'],
                    'item_number_' . $prod_num => $prod_id, 
                    'quantity_' . $prod_num => $product['quantity'],
                    'on0_' . $prod_num => $pro_var_arr[0],
                    'on1_' . $prod_num => $pro_var_arr[1],
                    'on2_' . $prod_num => $pro_var_arr[2],
                    'amount_' . $prod_num => $prod_price
                );
                $lineAfter = [
                    'sku' => $prod_num . ' ' . $pro_var_arr[0] . ' ' . $pro_var_arr[1] . ' ' . $pro_var_arr[2],
                    'name' => $product['name'],
                    'price' => $prod_price,
                    'currency' => 'USD',
                    'quantity' => $product['quantity']
                ];
            }else{
                $arrayBefore = $params;
                $lineBefore = $lineItems;
                $productArray = array(
                    'item_name_' . $prod_num => $product['name'],
                    'item_number_' . $prod_num => $prod_id, 
                    'quantity_' . $prod_num => $product['quantity'],
                    'on0_' . $prod_num => $pro_var_arr,
                    'amount_' . $prod_num => $prod_price
                );
                $lineAfter = [
                    'sku' => $prod_num . ' ' . (string) $pro_var_arr,
                    'name' => $product['name'],
                    'price' => $prod_price,
                    'currency' => 'USD',
                    'quantity' => $product['quantity']
                ];
            }

            array_push($lineItems, $lineAfter);
            $params = array_merge($arrayBefore, $productArray);

        endforeach;
    }


if (isset($_POST['submit'])) {
    //print_r($params);
    header('Location: https://www.paypal.com/cgi-bin/webscr?'.http_build_query($params));

    exit();
}
if (isset($_POST['utrust'])) {

    $totalUTrust = 0;
    $sales_tax = 0.0635;
    $shipping = 0;

    if(!empty($_SESSION['shopping_cart'])){

        foreach($_SESSION['shopping_cart'] as $key => $product): 

            $prod_id = $product['id'];
            $sub_total = $product['quantity'] * implode(" ", $product['price']);
            $totalUTrust += $sub_total;
        endforeach;

        if(($total*$sales_tax)+$total <= 10){
            $shipping = 3.99;
        }else if(($total*$sales_tax)+$total <= 30){
            $shipping = 7.99;
        }else if(($total*$sales_tax)+$total <= 100){
            $shipping = 9.99;
        }else{
            $shipping = 19.99;
        }
    }

    $firstName = (string) $_POST['first_name'];
    $lastName = (string) $_POST['last_name'];
    $emailAdd = (string) $_SESSION['contact']['email'];
    $address = (string)$_POST['address'];
    $city = (string)$_POST['city'];
    $state = (string)$_POST['state'];
    $postcode = (string)$_POST['postcode'];
    $country = (string)$_POST['country'];


    $totalUTrust = number_format(($totalUTrust * $sales_tax) + $totalUTrust + $shipping, 2);

    $api_key = "u_test_api_68b9d5fb-6218-45a0-8641-c25acdf21764";

    // Init Utrust API
    $utrustApi = new ApiClient($api_key, 'sandbox');

    echo '<pre>'; print_r($lineItems); echo '</pre>';


    $orderData = [
        'reference' => 'REF-12345678',
        'amount' => [
            'total' => $totalUTrust,
            'currency' => 'USD',
        ],
        'return_urls' => [
            'return_url' => 'http://example.com/order_success',
            'cancel_url' => 'http://example.com/order_canceled',
            'callback_url' => 'http://example.com/webhook_url',
        ],
        'line_items' => $lineItems,
    ];
    
    // Build Customer data array
    $customerData = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $emailAdd,
        'address1' => $address,
        'city' => $city,
        'state' => $state,
        'postcode' => $postcode,
        'country' => $country,

    ];

    try {
        // Validate data
        $orderIsValid = Validator::order($orderData);
        $customerIsValid = Validator::customer($customerData);
    
        // Make the API request
        if ($orderIsValid && $customerIsValid) {
            $response = $utrustApi->createOrder($orderData, $customerData);
        }
    
        // Use the $redirect_url to redirect the customer to our Payment Widget
        echo $response->attributes->redirect_url;
       header('Location: ' . $response->attributes->redirect_url);
    } catch (Exception $e) {
        // Handle error (e.g.: show message to the customer)
        echo 'Something went wrong: ' . $e->getMessage();
    }

    exit();
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
        .paypalBtn{
            background: #ffffff00;
            border-radius: 20px;
            border:none;
            outline: none;
        }
        .paypalBtn:hover{
            cursor: pointer;
        }
        .paypalBtn:focus{
            border: none;
            outline: none;
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

                    if(empty($_SESSION['shopping_cart'])){
                        echo "
                        <div class='heading'>
                            <h2 class='comfortaa'><span style='color: rgb(144, 161, 40);font-size: 24px;'>Your Cart is Empty</span></h2>
                        </div>";
                        }

                        $total = 0;
                        $order_summary = "";
                        $sales_tax = 0.0635;
                        $shipping = 0;

                    if(!empty($_SESSION['shopping_cart'])){

                            foreach($_SESSION['shopping_cart'] as $key => $product): 

                                $prod_id = $product['id'];
                                $sub_total = $product['quantity'] * implode(" ", $product['price']);
                                $total += $sub_total;
                            endforeach;

                            if(($total*$sales_tax)+$total <= 10){
                                $shipping = 3.99;
                            }else if(($total*$sales_tax)+$total <= 30){
                                $shipping = 7.99;
                            }else if(($total*$sales_tax)+$total <= 100){
                                $shipping = 9.99;
                            }else{
                                $shipping = 19.99;
                            }
                    }
                    ?>
                    <ul class="summary">
                        <li class="totalRow"><h6><b>Subtotal: </b>$<?php echo number_format($total, 2); ?></h6></li>
                        <?php if($total > 0){ ?>
                        <li class="totalRow"><h6><b>Tax: </b>$<?php echo number_format($total * $sales_tax, 2); ?></h6></li>
                        <li class="totalRow"><h6><b>*Shipping: </b>$<?php echo number_format($shipping, 2); ?></h6></li>
                        <li class="totalRow final"><h4>Total: $<?php echo number_format(($total * $sales_tax) + $total + $shipping, 2); ?></h4></li>
                        <li class="totalRow" style="color:white;font-size: 13px;">*Shipping may change after providing your address</li>
                        <li class="totalRow" style="color:white;font-size: 13px;">*Note these shipping prices do not apply to international shipments, please <a href="/ContactUs.php">contact us</a> for more details on international shipping</li>
                        <?php }else{  ?>
                        <li class="totalRow final"><span class="label">Total</span><span class="value">$<?php echo $total; ?></span></li>
                        <?php }?>
                    </ul>

                </div>
                <br>
                <div class="heading cf" id="hidOnCheckout">
                  <h2 class="comfortaa" id="contactInfo"><span style="color: rgb(144, 161, 40);font-size: 24px;">Contact Information</span></h2>
                  <h2 class="comfortaa" id="PaymentInfo" style="display: none;"><span style="color: rgb(144, 161, 40);font-size: 24px;">Choose a Payment Option: </span></h2>
                </div>

                <div class="cart">
                    <form action="checkout.php" method="post">
                        <input type="email" name="contactEmail" id="contactEmail" class="textInpt" placeholder="Enter Your Email" required>
                        <button type="submited" name="submitEmail" id="sbmitEmail" class="btn con">Continue to Checkout</button>
                    </form>
                    <?php
                        global $con;

                        $ip_add = getUserIpAddr();

                        if(isset($_POST['submitEmail'])){
                            
                            $email = $_POST['contactEmail'];

                            if(!isset($_SESSION['contact'])){
                                    $_SESSION['contact'] = array(
                                        'email' => $email
                                    );
                            }

                            echo "<script>document.getElementById('contactEmail').style.display = 'none';</script>";
                            echo "<script>document.getElementById('contactInfo').style.display = 'none';</script>";
                            echo "<script>document.getElementById('PaymentInfo').style.display = 'block';</script>";
                            
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