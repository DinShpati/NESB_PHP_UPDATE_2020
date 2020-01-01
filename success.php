<?php

include 'header.php';
include 'footer.php';
include 'functions/functions.php';

    $ip_add = getUserIpAddr();

    $selected_cart = "SELECT * FROM temp_email WHERE ORDER_IP='$ip_add'";
    $run_select_all_cart = mysqli_query($con, $selected_cart);
    $count_selected_rows_cart = mysqli_num_rows($run_select_all_cart);

    if($count_selected_rows_cart <= 0){
        echo "<script>window.open('./', '_self');</script>";
    }

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
        .success{
            border-radius: 50%;
            border: 1px solid #607f24;
            width: 150px;
            height: 150px;
            margin-left: 41%;
        }
        #tick-mark {
            position: relative;
            display: inline-block;
            width: 70px;
            height: 70px;
            top: 25%;
            left: 35%;
        }

        #tick-mark::before {
            position: absolute;
            left: 0;
            top: 50%;
            height: 50%;
            width: 2px;
            background-color: #607f24;
            content: "";
            transform: translateX(10px) rotate(-45deg);
            transform-origin: left bottom;
        }

        #tick-mark::after {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 100%;
            background-color: #607f24;
            content: "";
            transform: translateX(10px) rotate(-45deg);
            transform-origin: left bottom;
        }
      </style>
</head>
<body lang="en">

          <!-- Navigation Bar -->
          <?php mainHeader() ?>
           
           <!-- content goes here -->

            <div class="body row" style="padding: 30px 0">
                <h2 class="mainHeader"style="margin-left: 38%;font-size: 3rem;color:#607f24;"><b>Success!</b></h2><br>
                <h2 class="mainHeader"style="margin-left: 23%;font-size: 1.5rem;color:white;"><b>Your order has been successfully placed!</b></h2>
            </div>

           <div class="row body" style="padding: 40px 0 100px 0;">
           
           <div class="success">
                <div id="tick-mark">
                </div>
           </div>
           
           </div>

           <?php

                global $con;
                global $order_summary;
                global $email;

                $ip_add = getUserIpAddr();
                $select_cart = "SELECT * FROM cart WHERE IP_ADD='$ip_add'";
                $run_cart = mysqli_query($con, $select_cart);

                $total = 0;

                $order_amount = 0;

                $sales_tax = 0;

                while($row_cart = mysqli_fetch_array($run_cart)){

                    $pro_id = $row_cart['P_ID'];
                    $pro_qty = $row_cart['QTY'];
                    $pro_var = $row_cart['VARIETY'];

                    $get_products = "SELECT * from products where PRODUCT_ID='$pro_id'";

                    $run_products = mysqli_query($con, $get_products);

                    while($row_products=mysqli_fetch_array($run_products)){

                        $product_name = $row_products['PRODUCT_NAME'];
                        $only_price = $row_products['PRODUCT_PRICE'];
                        $sub_total = $row_products['PRODUCT_PRICE']*$pro_qty;

                        $sales_tax = 0.0635;

                        $total += $sub_total;

                        $order_summary .= "`" . $product_name . $pro_var . " ~pcs: " . $pro_qty;
                    }
                }
                //double checking for orders
                $selected_cart = "SELECT * FROM temp_email WHERE ORDER_IP='$ip_add'";
                $run_select_all_cart = mysqli_query($con, $selected_cart);
                $count_selected_rows_cart = mysqli_num_rows($run_select_all_cart);

            if($count_selected_rows_cart <= 0){
                echo "<script>window.open('./', '_self');</script>";
            }else{
                //Inserting data into our customer_orders table

                date_default_timezone_set('America/New_York');
                $order_date = date('m/d/Y h:i:s a', time());

                $select_email = "SELECT ORDER_EMAIL FROM temp_email WHERE ORDER_IP='$ip_add' LIMIT 1";
                $run_email = mysqli_query($con, $select_email);
                
                while($order_email = mysqli_fetch_array($run_email)){
                    $email = $order_email['ORDER_EMAIL'];
                }


                $order_total =  number_format(($total * $sales_tax) + $total, 2);

                
                    $insert_email = "INSERT INTO orders (ORDER_EMAIL, ORDER_AMOUNT, ORDER_DATE, ORDER_TOTAL, ORDER_INFO) values ('$email', '$order_total', '$order_date', '$total', '$order_summary')";
                    $run_query = mysqli_query($con, $insert_email);
                

                //Deleting the items in the cart after purchase

                $selected_cart = "SELECT * FROM cart WHERE IP_ADD='$ip_add'";
                $run_select_all_cart = mysqli_query($con, $selected_cart);
                $count_selected_rows_cart = mysqli_num_rows($run_select_all_cart);

                if($count_selected_rows_cart){
                    $delete_cart = "DELETE FROM cart WHERE IP_ADD='$ip_add'";
                    $run_cart = mysqli_query($con, $delete_cart);
                }

                //delete email
                $selected_email = "SELECT * FROM temp_email WHERE ORDER_IP='$ip_add'";
                $run_select_all_email = mysqli_query($con, $selected_email);
                $count_selected_rows_email = mysqli_num_rows($run_select_all_email);

                if($count_selected_rows_email){
                    $delete_email = "DELETE FROM temp_email WHERE ORDER_IP='$ip_add'";
                    $run_email = mysqli_query($con, $delete_email);
                }
            }
            ?>
           
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