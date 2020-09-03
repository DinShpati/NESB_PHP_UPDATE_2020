<?php

    if(!isset($_SESSION['username'])){
        
       echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
    }
?>
<h2>Categories</h2>
<a href="index.php?insertCat" class="createBtn">Add a New Category &nbsp;<i class="fas fa-plus-circle"></i></a>
<br>
<br>
            <hr>
            <br>
<div class="categoriesRow">
            <?php

//getting all the categories -----
    global $con;

    $get_products = "SELECT * FROM categories";

    $run_products_query = $con -> query($get_products);

    $count = 0;

    while($rows_products = mysqli_fetch_array($run_products_query)){

        $catID = $rows_products["CAT_ID"];
        $catTitle = $rows_products["CAT_TITLE"];


        ?>

        <div class="categoryItem">
            <h5 class="name"><?php echo $catTitle ?></h5>
            <h5 class="id">I.D: #<?php echo $catID ?></h5>
                <div style="display: flex; justify-content: space-around;">
                    <a href="./includes/deleteCat.php?delete_pro=<?php echo $catID; ?>" class="delete createBtn" onclick="return  confirm('Are you sure you want to delete this order? Y/N')"><i class="fas fa-trash-alt"></i></a>
                </div>
            </div>

            <?php   }  ?>
        </div>
    </div>