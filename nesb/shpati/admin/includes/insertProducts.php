<?php

session_start();

if(!isset($_SESSION['username'])){
	
	echo "<script>window.open('../login.php?not_admin=You are not an Admin!','_self')</script>";
}
else{


include("db.php");

global $con;

?>

<html>
    <head>
        <title>Create a Product</title>
        <link rel="stylesheet" href="editAndInsert.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Damion|Happy+Monkey|Pacifico" rel="stylesheet">
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </head>
    <body>
    

    <form action="" method="post" enctype="multipart/form-data" class="insertEditForm">
    <h1>Create a Product</h1>
        <h3>Product Name: <span class="highlightedWords"></span></h3>
        <input type="text" name="pro_name" placeholder="Enter product name">
        <br>
        <h3>Product QTY: <span class="highlightedWords"></span></h3>
        <input type="number" name="pro_qty" placeholder="Enter product qty">
        <br>
        <h3>Product Price: <span class="highlightedWords"></span></h3>
        <input type="text" name="pro_price" placeholder="Enter product price">
        <br>
        <h3>Product Category: <span class="highlightedWords"></span></h3>
        <select name="pro_cat">
            <option>Select a Category</option>
            <?php
            
                $get_cats = "SELECT * from categories";
                $run_cats = mysqli_query($con, $get_cats);
            
                while($row_cats=mysqli_fetch_array($run_cats)){
            
                    $cat_id = $row_cats['CAT_ID'];
                    $cat_title = $row_cats['CAT_TITLE'];
            
                    echo "<option value='$cat_id'>$cat_title</option>";
            
                }
            ?>
        </select>
        <br>
        <h3>Product Description: <span class="highlightedWords"></span></h3>
        <textarea name="pro_desc" cols="70" rows="5" placeholder="Enter the product description"></textarea>
        <br>
        <h3>Enter the product Image path, for example(someFolder/sheabutter.jpg): <span class="highlightedWords"></span></h3>
        <input type="text" name="pro_image" placeholder="Enter product image file path">
        <br>
        <h3>Product Keywords: <span class="highlightedWords"></span></h3>
        <input type="text" name="pro_keywords" placeholder="Please seperate each keyword with a comma, for example ( key , word )">
        <br>
        <h3>Product Paypal: <span class="highlightedWords"></span></h3>
        <input type="text" name="pro_pp" placeholder="You can leave this empty">
        <br>

        <h3>Does this product have varieties? For example a dropdown menu?</h3>
        <label for="pro_var_bool">No</label>
        <input type="radio" name="pro_var_bool" value="0" class="enjoy-css">
        <label for="pro_featured">Yes</label>
        <input type="radio" name="pro_var_bool" value="1" class="enjoy-css"><br>

        <br>
        <h3>Enter Varieties for dropdown 1: <span class="highlightedWords"></span></h3>
        <h5>Please seperate each variety with a comma, for example ( cocomango , cucumber melon )</h5>
        <h6>Please leave this empty if you do not have any varieties</h6>
        <input type="text" name="pro_variety" placeholder="Enter varieties">
        <br>

        <h3>Does this product have a second groupd of varieties? For example a second dropdown menu?</h3>
        <label for="pro_var_bool">No</label>
        <input type="radio" name="pro_var_bool2" value="0" class="enjoy-css">
        <label for="pro_featured">Yes</label>
        <input type="radio" name="pro_var_bool2" value="1" class="enjoy-css"><br>

        <h3>Enter Varieties for dropdown 2: <span class="highlightedWords"></span></h3>
        <h5>Please seperate each variety with a comma, for example ( cocomango , cucumber melon )</h5>
        <h6>Please leave this empty if you do not have any varieties</h6>
        <input type="text" name="pro_variety2" placeholder="Enter varieties">
        <br>

        <h3>Does this product have a third group of varieties? For example a a third dropdown menu?</h3>
        <label for="pro_var_bool">No</label>
        <input type="radio" name="pro_var_bool3" value="0" class="enjoy-css">
        <label for="pro_featured">Yes</label>
        <input type="radio" name="pro_var_bool3" value="1" class="enjoy-css"><br>


        <h3>Enter Varieties for dropdown 3: <span class="highlightedWords"></span></h3>
        <h5>Please seperate each variety with a comma, for example ( cocomango , cucumber melon )</h5>
        <h6>Please leave this empty if you do not have any varieties</h6>
        <input type="text" name="pro_variety3" placeholder="Enter varieties">
                <br><br>
        <!-- Submit Button -->
        <button type="submit" name="insert_product">Submit</button>

        </form>
    </body>
</html>

<?php

if(isset($_POST['insert_product'])){
    
    //Getting the inputs
    $product_name = $_POST['pro_name'];
    $product_cat = $_POST['pro_cat'];
    $product_pp = $_POST['pro_pp'];
    $product_qty = $_POST['pro_qty'];
    $product_price = $_POST['pro_price'];
    $product_desc = $_POST['pro_desc'];
    $product_variety = $_POST['pro_variety'];
    $product_var_bool = $_POST['pro_var_bool'];
    $product_variety2 = $_POST['pro_variety2'];
    $product_var_bool2 = $_POST['pro_var_bool2'];
    $product_variety3 = $_POST['pro_variety3'];
    $product_var_bool3 = $_POST['pro_var_bool3'];
    $product_keywords = $_POST['pro_keywords'];
    $product_image = $_POST['pro_image'];

    $insert_product = "INSERT into products (PRODUCT_NAME,PRODUCT_CAT,PRODUCT_PP,PRODUCT_QTY,PRODUCT_PRICE,PRODUCT_DESC,PRODUCT_IMG,PRODUCT_KEYWORDS,PRODUCT_VARIETY,PRODUCT_VAR_BOOL,PRODUCT_VARIETY2,PRODUCT_VAR_BOOL2,PRODUCT_VARIETY3,PRODUCT_VAR_BOOL3) values ('$product_name','$product_cat','$product_pp','$product_qty','$product_price','$product_desc','product_images/$product_image','$product_keywords','$product_variety','$product_var_bool','$product_variety2','$product_var_bool2','$product_variety3','$product_var_bool3')";

    $insert_pro = mysqli_query($con, $insert_product);

    if($insert_pro){
        echo "<script>alert('The Product Has Been Inserted')</script>";
        echo "<script>window.open('../index.php?products', '_self');</script>";
    }

}

} 
 ?>