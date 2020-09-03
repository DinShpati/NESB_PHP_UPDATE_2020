<?php 
if(!isset($_SESSION['username'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>  

    <form action="" method="post" enctype="multipart/form-data" class="insertEditForm">
        <h1>Create a Category</h1>
        <h3>Category Name: <span class="highlightedWords"></span></h3>
        <input type="text" name="cat_name" placeholder="Enter product name" required>
        <br>
        <br>
        <!-- Submit Button -->
        <button type="submit" name="insert_cat">Submit</button>

    </form>

<?php

if(isset($_POST['insert_cat'])){
    
    //Getting the inputs
    $cat_name = $_POST['cat_name'];

    $insert_product = "INSERT into categories (CAT_TITLE) values ('$cat_name')";

    $insert_pro = mysqli_query($con, $insert_product);

    if($insert_pro){
        echo "<script>alert('The Category Has Been Added')</script>";
        echo "<script>window.open('./index.php?categories', '_self');</script>";
    }else{
        echo "<script>alert('Error')</script>";
    }

}
}
 ?>