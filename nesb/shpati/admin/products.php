
 <?php 
if(!isset($_SESSION['username'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>  
   <h2>Products</h2>
            <hr>
            <br>
            <div class="section1 col-2">
                <div>
                    <a href="index.php?insertProduct" class="createBtn">Create a New Product &nbsp;<i class="fas fa-plus-circle"></i></a>
                </div>
                <div>
                    <label for="productSearch">Search Products: </label>
                    <h6>(You can use the product id, product name, or anything related to the product to find it)</h6>
                    <form action="productIDSearch.php" method="get" style="display: flex; justify-content: space-between;">
                        <input type="text" placeholder="Enter ID: " name="results" id="productSearch" class="input" style="width: 50%; margin-right: 10px;">
                        <button name="IdSearch" class="btn btn-md" type="submit" style="width: 50%;">Enter</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="section2">
                <h2>All Products</h2>

                <div class="productTable">

                    <?php

                        //getting all the products -----

                            global $con;

                            $get_products = "SELECT * FROM products";

                            $run_products_query = $con -> query($get_products);

                            $count = 0;

                            while($rows_products = mysqli_fetch_array($run_products_query)){

                                $pro_id = $rows_products["PRODUCT_ID"];
                                $pro_name = $rows_products["PRODUCT_NAME"];
                                $pro_price = $rows_products["PRODUCT_PRICE"];
                                $pro_cat = $rows_products["PRODUCT_CAT"];
                                $pro_desc = $rows_products["PRODUCT_DESC"];
                                $pro_image = $rows_products["PRODUCT_IMG"];
                                $pro_keywords = $rows_products["PRODUCT_KEYWORDS"];
                                $pro_PayPal = $rows_products["PRODUCT_PP"];
                                $pro_variety = $rows_products["PRODUCT_VARIETY"];
                                $pro_var_bool = $rows_products["PRODUCT_VAR_BOOL"];
                                $pro_var_bool = $rows_products["PRODUCT_VAR_BOOL"];
                                $amnt_sold = $rows_products["AMOUNT_SOLD"];

                                if(!$amnt_sold || $amnt_sold < 1){
                                    $amnt_sold = 0;
                                }


                                ?>

                    <div class="productRow">
                        <img src="../../../<?php echo $pro_image ?>" alt="<?php echo $pro_name ?>" class="productImage">
                        <h5 class="name"><?php echo $pro_name ?></h5>
                        <h5 class="id">I.D: #<?php echo $pro_id ?></h5>
                        <h5 class="price">$<?php echo $pro_price ?></h5>
                        <h5 class="price">Amount Sold: <?php echo $amnt_sold ?></h5>
                        <div style="display: flex; justify-content: space-around;">
                            <a href="index.php?edit_pro=<?php echo $pro_id; ?>" class="edit createBtn"><i class="far fa-edit"></i></a>
                            <a href="./includes/deleteProducts.php?delete_pro=<?php echo $pro_id; ?>" class="delete createBtn" onclick="return  confirm('Are you sure you want to delete this order? Y/N')"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>

                            <?php   }  ?>
                </div>
                <?php } ?>