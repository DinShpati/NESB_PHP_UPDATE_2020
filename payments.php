<?php
                global $con;

                echo "<script>document.getElementById('sbmitEmail').style.display = 'none';
                              document.getElementById('vontactEmail').style.display = 'none';
                              document.getElementById('hidOnCheckout').style.display = 'none';</script>";

                $insert_email = "INSERT INTO temp_email (ORDER_EMAIL, ORDER_IP) values ('$email', '$ip_add')";
                $run_query = mysqli_query($con, $insert_email);

                $ip_add = getUserIpAddr();

                $select_cart = "SELECT * FROM cart WHERE IP_ADD='$ip_add'";

                $run_cart = mysqli_query($con, $select_cart);

                $count = mysqli_num_rows($run_cart);
                                
                $total = 0;
                
                $pp_sales_tax = 0;

                while($row_cart = mysqli_fetch_array($run_cart)){

                    $pro_id = $row_cart['P_ID'];
                    $pro_qty = $row_cart['QTY'];
                    $pro_var = $row_cart['VARIETY'];

                    if($pro_qty == 0){
                        $pro_qty = $pro_qty + 1;
                    }


                    $get_products = "SELECT * from products where PRODUCT_ID='$pro_id'";

                    $run_products = mysqli_query($con, $get_products);

                    while($row_products=mysqli_fetch_array($run_products)){

                        $product_title = $row_products['PRODUCT_NAME'];
                        $only_price = array($row_products['PRODUCT_PRICE']);
                        $sub_total = $row_products['PRODUCT_PRICE']*$pro_qty;
                        $sub_total_two = $row_products['PRODUCT_PRICE']*$pro_qty;

                        $sales_tax = 0.0635;

                        $sub_total = $sub_total + $sub_total * $sales_tax;

                        $total += $sub_total;
                        
                        $pp_sales_tax += $sub_total_two;

                    }
                }

                    ?>
            <?php

                function pp_cart(){

                    global $con;

                    $ip_add = getUserIpAddr();

                $select_cart = "SELECT * FROM cart WHERE IP_ADD='$ip_add'";

                $run_cart = mysqli_query($con, $select_cart);

                $count = mysqli_num_rows($run_cart);
                                
                $total = 0;

                $i = 1;

                while($row_cart = mysqli_fetch_array($run_cart)){

                    $pro_id = $row_cart['P_ID'];
                    $pro_qty = $row_cart['QTY'];
                    $pro_var = $row_cart['VARIETY'];

                    $get_products = "SELECT * from products where PRODUCT_ID='$pro_id'";

                    $run_products = mysqli_query($con, $get_products);


                    while($row_products=mysqli_fetch_array($run_products)){

                        $product_title = $row_products['PRODUCT_NAME'];
                        $only_price = $row_products['PRODUCT_PRICE'];
                        $sub_total = $row_products['PRODUCT_PRICE']*$pro_qty;

                        $sales_tax = 0.0635;

                        $sub_total = $sub_total + $sub_total * $sales_tax;

                        $total += $sub_total;


                        echo "
                        <input type='hidden' name='item_name_$i' value='$product_title'>
                        <input type='hidden' name='item_number_$i' value='$pro_id'>
                        <input type='hidden' name='quantity_$i' value='$pro_qty'>
                        <input type='hidden' name='on0_$i' value='$pro_var'>
                        <input type='hidden' name='amount_$i' value='$only_price'>
                        ";
                            
                        $i++;
                    }

                        
                }

            }
            ?>
        
                
                <div id="ppDiv">
                        <div style="float: left"><!--<a href="cart.php" style="color:black; text-decoration: none;"><i class="fas fa-chevron-left"></i>&nbsp;Return to cart</a>--></div>
                        <div style="float: right">
                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">

                                <!-- Identify your business so that you can collect the payments. -->
                                <input type="hidden" name="business" value="sadriu.muslim-facilitator@hotmail.com">

                                <!-- Specify a Buy Now button. -->
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="upload" value="1">

                                <!--
                                    I will add this if neccessary becasue I think I can do it from my account settings
                                    <input type="hidden" name="tax_cart" value="<?php echo "100 * $sales_tax"; ?>">-->

                                <!-- Specify details about the item that buyers will purchase. -->

                                <?php 
                                pp_cart(); 
                                ?>

                                <!-- Canceling and success-->
                                <input type="hidden" name="return" value="success.php">
                                <input type="hidden" name="cancel_return" value="cf.php">

                                <!-- Display the payment button. -->
                                <input type="image" name="submit" border="0"
                                alt="Pay With payPal" class="paypalBtn" style="max-width:200px;"
                                src="img/ppal.png">
                                <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">

                            </form>
                        </div>
                </div>
