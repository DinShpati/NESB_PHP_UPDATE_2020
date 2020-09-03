<?php

session_start();

$product_ids = array();

//check if add to cart has been submited
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){

        //keep track of how many prodcts are in the shopping cart
        $count = count($_SESSION['shopping_cart']);

        //cretae sequantial array for matching array keys to product id's
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');

        if(!in_array(filter_input(INPUT_GET, 'id'), $product_ids)){

            $variation = "";
            if(filter_input(INPUT_POST, 'var_opt')){
                $variation .= '' . filter_input(INPUT_POST, 'var_opt');
                if(filter_input(INPUT_POST, 'var_opt2')){
                    $variation .= '~' . filter_input(INPUT_POST, 'var_opt2');
                    if(filter_input(INPUT_POST, 'var_opt3')){
                        $variation .= '~' . filter_input(INPUT_POST, 'var_opt3');
                    }
                }
            }


            $_SESSION['shopping_cart'][$count] = array(
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => mysqli_fetch_assoc(mysqli_query($con, 'SELECT PRODUCT_PRICE FROM products WHERE PRODUCT_ID = ' . filter_input(INPUT_GET, 'id') . ' LIMIT 1')),
                'quantity' => '1',
                'variation' => $variation
            );

            echo "<script>window.open('cart.php#cartSection', '_self')</script>";

        }else{//product already exists increase quanitity
            //match array ket to the product being adde to the cart
            for($i = 0; $i < count($product_ids); $i++){
                if($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quanitity to the existing product in the array

                    $variation = "";
                    if(filter_input(INPUT_POST, 'var_opt')){
                        $variation .= '' . filter_input(INPUT_POST, 'var_opt');
                        if(filter_input(INPUT_POST, 'var_opt2')){
                            $variation .= '~' . filter_input(INPUT_POST, 'var_opt2');
                            if(filter_input(INPUT_POST, 'var_opt3')){
                                $variation .= '~' . filter_input(INPUT_POST, 'var_opt3');
                            }
                        }
                    }

                    if($_SESSION['shopping_cart'][$i]['variation'] == $variation){
                        $_SESSION['shopping_cart'][$i]['quantity'] += 1;
                    }else{
                        $_SESSION['shopping_cart'][$count] = array(
                            'id' => filter_input(INPUT_GET, 'id'),
                            'name' => filter_input(INPUT_POST, 'name'),
                            'price' => mysqli_fetch_assoc(mysqli_query($con, 'SELECT PRODUCT_PRICE FROM products WHERE PRODUCT_ID = ' . filter_input(INPUT_GET, 'id') . ' LIMIT 1')),
                            'quantity' => '1',
                            'variation' => $variation
                        );
                    }
                }
            }
            echo "<script>window.open('cart.php#cartSection', '_self')</script>";
        }

    }else{
        //if shopping doesmt exist create first peodict with array key 0
        //creating arrray using submited form data starting from key 0 and fillign with values

            $variation = "";
            if(filter_input(INPUT_POST, 'var_opt')){
                $variation .= '~' . filter_input(INPUT_POST, 'var_opt');
                if(filter_input(INPUT_POST, 'var_opt2')){
                    $variation .= '~' . filter_input(INPUT_POST, 'var_opt2');
                    if(filter_input(INPUT_POST, 'var_opt3')){
                        $variation .= '~' . filter_input(INPUT_POST, 'var_opt3');
                    }
                }
            }

        $_SESSION['shopping_cart'][0] = array(
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => mysqli_fetch_assoc(mysqli_query($con, 'SELECT PRODUCT_PRICE FROM products WHERE PRODUCT_ID = ' . filter_input(INPUT_GET, 'id') . ' LIMIT 1')),
            'quantity' => '1',
            'variation' => $variation
        );
        echo "<script>window.open('cart.php#cartSection', '_self')</script>";
    }
}

if(isset($_SESSION['finish'])){
    unset($_SESSION['finish']);
}

?>