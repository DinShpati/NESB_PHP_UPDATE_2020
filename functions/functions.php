<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "nesb";
    $con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);

//Getting the Users Ip Address
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}


//displaying products according to their category and size
function getPro($catID, $size){

    global $con;
    $pageName = basename($_SERVER['PHP_SELF']);

    $get_pro = "SELECT * from products where PRODUCT_CAT='$catID' order by PRODUCT_ID";

    $run_pro = mysqli_query($con, $get_pro);
    $counter = 0;

    while($row_pro=mysqli_fetch_array($run_pro)){

        $pro_id = $row_pro['PRODUCT_ID'];
        $pro_cat = $row_pro['PRODUCT_CAT'];
        $pro_name = $row_pro['PRODUCT_NAME'];
        $pro_price = $row_pro['PRODUCT_PRICE'];
        $pro_image = $row_pro['PRODUCT_IMG'];
        $pro_desc = $row_pro['PRODUCT_DESC'];
        $pro_var = $row_pro['PRODUCT_VARIETY'];
        $pro_var_bool = $row_pro['PRODUCT_VAR_BOOL'];
        $pro_var2 = $row_pro['PRODUCT_VARIETY2'];
        $pro_var_bool2 = $row_pro['PRODUCT_VAR_BOOL2'];
        $pro_var3 = $row_pro['PRODUCT_VARIETY3'];
        $pro_var_bool3 = $row_pro['PRODUCT_VAR_BOOL3'];

        $pro_price = number_format($pro_price, 2);

        echo "
        <!-- Product-->
        <div class='col-sm-$size product'align='center'>
            <div style='background-color:white;max-width:190px;'>
                <img src='$pro_image' alt='Shea Butter' class='product-image'/>
            </div><br>
            <h3 class='product-header'>$pro_name</h3>
            <p class='product-price'align='center'>$$pro_price &nbsp;&nbsp;<br>$pro_desc</p>";

            //from tuts
            echo "<form method='post' action='$pageName?action=add&id=$pro_id'>
                        <input type='hidden' name='name' value='$pro_name'/>";

                        if($pro_var_bool){

                            echo "<select name='var_opt' class='productDropdown' required>";
                
                            $parts = explode(', ', $pro_var);
                        
                            $counter = 0;
                        
                            while($counter < count($parts) ){
                                                        
                                echo "<option value='$parts[$counter]'>$parts[$counter]</option>";
                                    ++$counter;
                                }
                            echo"</select>";
            
                            if($pro_var_bool2){
            
                                echo "<br><select name='var_opt2' class='productDropdown' required>";
                    
                                $parts = explode(', ', $pro_var2);
                            
                                $counter = 0;
                            
                                while($counter < count($parts) ){
                                                            
                                    echo "<option value='$parts[$counter]'>$parts[$counter]</option>";
                                        ++$counter;
                                    }
                                echo"</select>";
                    
                            }
                            if($pro_var_bool3){
            
                                echo "<br><select name='var_opt3' class='productDropdown' required>";
                    
                                $parts = explode(', ', $pro_var3);
                            
                                $counter = 0;
                            
                                while($counter < count($parts) ){
                                                            
                                    echo "<option value='$parts[$counter]'>$parts[$counter]</option>";
                                        ++$counter;
                                    }
                                echo"</select><br>";
                    
                            }
                
                        }

            echo "<input type='submit' name='add_to_cart' class='btn btn-success' value='Add to Cart'/>
                    </form>
                    </div>";

    }

 }

 //Adding products to the cart
 function add_cart(){

    global $con;
    $pageName = basename($_SERVER['PHP_SELF']);
    $ip_add = getUserIpAddr();
    $variety = "\n~Option: ";

    if(isset($_GET['add_cart'])){

        $p_id = $_GET['add_cart'];

        $product_qty = 1;

        $product_variety = $_POST['var_opt'];

        if($product_variety){
            
            $variety .= $product_variety;
            $product_variety2 = $_POST['var_opt2'];

            if($product_variety2){

                $variety .= " \n~Option 2: " . $product_variety2;
                $product_variety3 = $_POST['var_opt3'];

                if($product_variety3){

                    $variety .= "\n~Option 3: " . $product_variety3;

                }
            }
        }else{
            $variety = " ";
        }

        $check_product_same = "SELECT * from cart where IP_ADD='$ip_add' AND P_ID=$p_id AND VARIETY='$variety'";

        $run_check_product_same = mysqli_query($con, $check_product_same);

        if(mysqli_num_rows($run_check_product_same) == 1){

            $query = "UPDATE cart SET QTY = QTY + 1 WHERE IP_ADD='$ip_add' AND P_ID=$p_id AND VARIETY='$variety'";
            $run_query = mysqli_query($con, $query);

        }else{

            $query = "INSERT into cart (P_ID,IP_ADD,QTY,VARIETY) values ('$p_id','$ip_add','$product_qty','$variety')";
            $run_query = mysqli_query($con, $query);

        }

        echo "<script>window.open('cart.php#cartSection', '_self')</script>";

    }
    
}

function remove_cart(){
    global $con;
    $pageName = basename($_SERVER['PHP_SELF']);
    $ip_add = getUserIpAddr();

   if(isset($_GET['remove_cart'])){

        $p_id = $_GET['remove_cart'];
        $cart_id = $_POST['itemID'];

    
        $remove_item = "DELETE from cart where IP_ADD='$ip_add' AND P_ID=$p_id AND CART_ID='$cart_id'";
        $run_query = mysqli_query($con, $remove_item);

        echo "<script>window.open('cart.php#cartSection', '_self')</script>";
    }
}
function updateQTY(){
    global $con;
    $pageName = basename($_SERVER['PHP_SELF']);
    $ip_add = getUserIpAddr();

   if(isset($_GET['add_qty'])){

        $p_id = $_GET['add_qty'];
        $qty = $_POST['qty'];
        $cart_id = $_POST['itemID'];

        if($qty <= 0){
            $qty = 1;
        }

        $update_qty = "UPDATE cart SET QTY=$qty WHERE IP_ADD='$ip_add' AND P_ID=$p_id AND CART_ID='$cart_id'";
        $run_query = mysqli_query($con, $update_qty);

        echo "<script>window.open('cart.php#cartSection', '_self')</script>";
    }
}



?>