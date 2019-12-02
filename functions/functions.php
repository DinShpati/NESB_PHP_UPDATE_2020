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


//displaying products according to their category
function getPro($catID){

    global $con;
    $pageName = basename($_SERVER['PHP_SELF']);

    $get_pro = "SELECT * from products where PRODUCT_CAT='1' order by PRODUCT_ID";

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
        <!-- Product 1-->
        <div class='col-sm-3 product'align='center'>
            <div style='background-color:white;max-width:190px;'>
                <img src='$pro_image' alt='Shea Butter' class='product-image'/>
            </div><br>
            <h3 class='product-header'>$pro_name</h3>
            <p class='product-price'align='center'>$$pro_price &nbsp;&nbsp;</p>
            <form method='post' action='$pageName?add_cart=<?php echo $pro_id ?>'>";

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

                    echo "<select name='var_opt' class='productDropdown' required>";
        
                    $parts = explode(', ', $pro_var2);
                
                    $counter = 0;
                
                    while($counter < count($parts) ){
                                                
                        echo "<option value='$parts[$counter]'>$parts[$counter]</option>";
                            ++$counter;
                        }
                    echo"</select>";
        
                }
                if($pro_var_bool3){

                    echo "<select name='var_opt' class='productDropdown' required>";
        
                    $parts = explode(', ', $pro_var3);
                
                    $counter = 0;
                
                    while($counter < count($parts) ){
                                                
                        echo "<option value='$parts[$counter]'>$parts[$counter]</option>";
                            ++$counter;
                        }
                    echo"</select>";
        
                }
    
            }

            echo"<!-- Add to cart button-->
            <button type='submit' name='add_to_cart' class='btn btn-success product-btn'>Add To Cart <i class='fas fa-shopping-cart'></i></button>
            </form>
            </div>";

    }

 }




?>