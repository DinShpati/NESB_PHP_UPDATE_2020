<?php

session_start();

if(!isset($_SESSION['username'])){
	
	echo "<script>window.open('../login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {


include("db.php");

global $con;

if(isset($_GET['edit_pro'])){

	$get_id = $_GET['edit_pro']; 
	
	$get_pro = "SELECT * from products where PRODUCT_ID='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);
		
        $pro_id = $row_pro["PRODUCT_ID"];
        $pro_name = $row_pro["PRODUCT_NAME"];
        $pro_price = $row_pro["PRODUCT_PRICE"];
        $pro_cat = $row_pro["PRODUCT_CAT"];
        $pro_qty = $row_pro["PRODUCT_QTY"];
        $pro_desc = $row_pro["PRODUCT_DESC"];
        $pro_image = $row_pro["PRODUCT_IMG"];
        $pro_keywords = $row_pro["PRODUCT_KEYWORDS"];
        $pro_pp = $row_pro["PRODUCT_PP"];
        $pro_variety = $row_pro["PRODUCT_VARIETY"];
        $pro_var_bool = $row_pro["PRODUCT_VAR_BOOL"];
        $pro_variety2 = $row_pro["PRODUCT_VARIETY2"];
        $pro_var_bool2 = $row_pro["PRODUCT_VAR_BOOL2"];
        $pro_variety3 = $row_pro["PRODUCT_VARIETY3"];
        $pro_var_bool3 = $row_pro["PRODUCT_VAR_BOOL3"];

		
		$get_cat = "SELECT * from categories where CAT_ID='$pro_cat'";
		
		$run_cat=mysqli_query($con, $get_cat); 
		
		$row_cat=mysqli_fetch_array($run_cat); 
		
        $category_title = $row_cat['CAT_TITLE'];
        
}

//everything goes in here

?>


<html>
    <head>
        <title>Edit Product</title>
        <link rel="stylesheet" href="editAndInsert.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Damion|Happy+Monkey|Pacifico" rel="stylesheet">
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </head>
    <body>

        <form action="" method="post" enctype="multipart/form-data" class="insertEditForm">
        <h1>Edit Product</h1>

            <h3>Product Name: <span class="highlightedWords"><?php echo $pro_name ?></span></h3>
            <input type="text" name="pro_name" placeholder="Enter product name">
            <br>
            <h3>Product QTY: <span class="highlightedWords"><?php echo $pro_qty ?></span></h3>
            <input type="number" name="pro_qty" placeholder="Enter product qty">
            <br>
            <h3>Product Price: <span class="highlightedWords"><?php echo $pro_price ?></span></h3>
            <input type="text" name="pro_price" placeholder="Enter product price">
            <br>
            <h3>Product Category: <span class="highlightedWords"><?php echo $category_title ?></span></h3>
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
            <h3>Product Description: <span class="highlightedWords"><?php echo $pro_desc ?></span></h3>
            <textarea name="pro_desc" cols="70" rows="5" placeholder="Enter the product description"></textarea>
            <br>
            <h3>Product Image: <span class="highlightedWords"><?php echo $pro_image ?></span></h3>
            <input type="file" name="pro_image" placeholder="Enter product price">
            <br><br>
            <img src="<?php echo "../../../../$pro_image"; ?>" width="200px" />
            <br>
            <h3>Product Keywords: <span class="highlightedWords"><?php echo $pro_keywords ?></span></h3>
            <input type="text" name="pro_keywords" placeholder="Please seperate each keyword with a comma, for example ( key , word )">
            <br>
            <h3>Product Paypal: <span class="highlightedWords"><?php echo $pro_pp ?></span></h3>
            <input type="text" name="pro_pp" placeholder="You can leave this empty">
            <br>
            <h3>Product Variety 1: <span class="highlightedWords"><?php echo $pro_variety ?></span></h3>
            <h5>Please seperate each variety with a comma, for example ( cocomango , cucumber melon )</h5>
            <h6>Please leave this empty if there is nothing after "Product Variety 1:"</h6>
            <input type="text" name="pro_variety" placeholder="Enter varieties">
            <br>
            <h3>Product Variety 2: <span class="highlightedWords"><?php echo $pro_variety2 ?></span></h3>
            <h5>Please seperate each variety with a comma, for example ( cocomango , cucumber melon )</h5>
            <h6>Please leave this empty if there is nothing after "Product Variety 2:"</h6>
            <input type="text" name="pro_variety2" placeholder="Enter varieties">
            <br>
            <h3>Product Variety 3: <span class="highlightedWords"><?php echo $pro_variety3 ?></span></h3>
            <h5>Please seperate each variety with a comma, for example ( cocomango , cucumber melon )</h5>
            <h6>Please leave this empty if there is nothing after "Product Variety 3:"</h6>
            <input type="text" name="pro_variety3" placeholder="Enter varieties">
                    <br><br>
            <!-- Submit Button -->
            <button type="submit" name="update_product">Submit</button>

        </form>

    </body>
</html>

<?php

	if(isset($_POST['update_product'])){
	
		//getting the text data from the fields
		
		$update_id = $pro_id;
        
		$product_name = $_POST['pro_name'];
		$product_cat= $_POST['pro_cat'];
		$product_price = $_POST['pro_price'];
		$product_desc = $_POST['pro_desc'];
        $product_keywords = $_POST['pro_keywords'];
        $product_var = $_POST['pro_variety'];
        $product_var2 = $_POST['pro_variety2'];
        $product_var3 = $_POST['pro_variety3'];
		$product_pp = $_POST['pro_pp'];
	
		//getting the image from the field
        $product_image = $_FILES['pro_image']['name'];
        $product_image_tmp = $_FILES['pro_image']['tmp_name'];
		move_uploaded_file($product_image_tmp,"../product_images/$product_image");

        if(empty($product_name)){
            $product_name = $pro_name;
        }
        if(empty($product_cat)){
            $product_cat = $pro_cat;
        }
        if(empty($product_price)){
            $product_price = $pro_price;
        }
        if(empty($product_desc)){
            $product_desc = $pro_desc;
        }
        if(empty($product_keywords)){
            $product_keywords = $pro_keywords;
        }
        if(empty($product_var)){
            $product_var = $pro_variety;
        }
        if(empty($product_var2)){
            $product_var2 = $pro_variety2;
        }
        if(empty($product_var3)){
            $product_var3 = $pro_variety3;
        }
        if(empty($product_pp)){
            $product_pp = $pro_pp;
        }

        //Product images
        if(empty($product_image)){
            $product_image = $pro_image;
        }

	
		 $update_product = "UPDATE products set PRODUCT_PP='$product_pp',PRODUCT_VARIETY='$product_var',PRODUCT_VARIETY2='$product_var2',PRODUCT_VARIETY3='$product_var3',PRODUCT_CAT='$product_cat',PRODUCT_NAME='$product_name',PRODUCT_PRICE='$product_price',PRODUCT_DESC='$product_desc',PRODUCT_IMG='product_images/$product_image', PRODUCT_KEYWORDS='$product_keywords' where PRODUCT_ID='$update_id'";
		 
		 $run_product = mysqli_query($con, $update_product);
		 
		 if($run_product){
		 
		 echo "<script>alert('Product has been updated!')</script>";
		 
		 echo "<script>window.open('../index.php?products','_self')</script>";
		 
		 }
    }
    






}
?>