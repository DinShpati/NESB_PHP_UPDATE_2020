<?php
    include("includes/db.php");
    include("includes/functions.php");

    session_start();

    if(!isset($_SESSION['username'])){
        
       echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
    }
    else {
    
?>
<?php
    global $con;

    $get_admin_info = "SELECT * FROM admin";

    $run_admin_info = mysqli_query($con, $get_admin_info);

    while($row_admin_info = mysqli_fetch_array($run_admin_info)){

        $admin_e = $row_admin_info['ADMIN_EMAIL'];
        $admin_user = $row_admin_info['ADMIN_USERNAME'];
        $admin_img = $row_admin_info['ADMIN_IMG'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/products.css">
    <link rel="stylesheet" href="css/mobileMain.css">
    <main><link rel="stylesheet" href="css/mainPage.css"></main>

    <!--Font aawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion|Happy+Monkey|Pacifico" rel="stylesheet">
</head>
<body>
    <div id="sideNav" >
        <div class="profileContainer" align="center">
            <img src="img/<?php echo "$admin_img"; ?>" alt="" class="profilePic">
            <h5 class="profileName"><?php echo "$admin_user"; ?></h5>
            <h5 class="profileName"><?php echo "$admin_e"; ?></h5>
            <a href="" class="btn btn-md">Sign Out</a>
        </div>
        <br>
        <hr>
        <br>
        <div class="sideLinkContainer">
            <a href="index.php" class="sideNavLink simpleLink"><i class="fas fa-home"></i> &nbsp;Home</a><br><br>
            <a href="index.php?products" class="sideNavLink simpleLink"><i class="fas fa-th"></i> &nbsp;Products</a><br><br>
            <a href="index.php?categories" class="sideNavLink simpleLink"><i class="fas fa-list-alt"></i> &nbsp;Categories</a><br><br>
            <a href="index.php?orders" class="sideNavLink simpleLink"><i class="fas fa-list-ol"></i> &nbsp;Orders</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-envelope-open-text"></i> &nbsp;Newsletter</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fab fa-paypal"></i> &nbsp;Paypal Order Finder</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-signal"></i> &nbsp;Stats</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-users"></i> &nbsp;Users</a><br><br>
        </div>
    </div>
    <main id="main">
        <nav id="navbar">
            <ul>
                <li>
                    <button class="btn btn-sm" style="max-height: 38px;"><i class="fas fa-cog"></i></button>
                    <form action="" method="get">
                        <input class="input" type="text" name="orderSearch" id="orderSearch" placeholder="Search for orders by email: " style="width: 200px;">
                        <button type="submit" class="btn btn-sm">Search</button>
                    </form>
                </li>
                <li>
                    <span style="text-align:center; font-size: 11px;font-weight: 600;color: white;background-color: rgb(236, 51, 51);padding: 1px;max-height: 12px;width: 12px;border-radius: 50%;
                    left: 40px;top:2px; position: relative;">3</span>
                    <button class="notification"><i class="fas fa-bell"></i></button>
                    <img src="img/<?php echo "$admin_img"; ?>" alt="" class="profilePic">
                    <h5 class="profileName"><?php echo "$admin_user"; ?></h5>
                </li>
            </ul>
        </nav>
        <div class="dashboard" style="text-align: center">
            <div style="display: flex;justify-content: space-between;">
                <div><h4 id="todaysDate" style="color: #546e1f; text-decoration: underline;">Todays Date: 12/30/2019</h4></div>
                <div><h4 id="currentTime" style="color: #546e1f; text-decoration: underline;">12:30pm</h4></div>
            </div>

            <h2>Welcome to your dashboard <?php echo "$admin_user"; ?></h2>
            <hr>
            <div style="margin-bottom: 40px;">
                    <label for="productSearch">Search Products: </label>
                    <h6>(You can use the product id, product name, or anything related to the product to find it)</h6>
                    <form action="productIDSearch.php" method="get" style="display: flex; justify-content: space-between;">
                        <input type="text" placeholder="Enter ID: " name="results" id="productSearch" class="input" style="width: 80%; margin-right: 10px;">
                        <button name="IdSearch" class="btn btn-md" type="submit" style="width: 20%;">Enter</button>
                    </form>
                </div>
            <?php

            global $con;

            if(isset($_GET['results'])){

                $search_query = $_GET['results'];

                $get_q = "SELECT * from products where (PRODUCT_ID='$search_query') || (PRODUCT_NAME='$search_query') || (PRODUCT_KEYWORDS='$search_query')";

                $run_pro = mysqli_query($con, $get_q);

                while($row_pro=mysqli_fetch_array($run_pro)){

                    $pro_id = $row_pro['PRODUCT_ID'];
                    $pro_cat = $row_pro['PRODUCT_CAT'];
                    $pro_name = $row_pro['PRODUCT_NAME'];
                    $pro_price = $row_pro['PRODUCT_PRICE'];
                    $pro_var = $row_pro['PRODUCT_VARIETY'];
                    $pro_var2 = $row_pro['PRODUCT_VARIETY2'];
                    $pro_var3 = $row_pro['PRODUCT_VARIETY3'];
                    $pro_image = $row_pro['PRODUCT_IMG'];

                    $amnt_sold = $row_pro["AMOUNT_SOLD"];

                                if(!$amnt_sold || $amnt_sold < 1){
                                    $amnt_sold = 0;
                                }

                    echo "
                    <div style='border: 1px solid #607f24;max-width:300px;'>
                    <h5 class='product_title'>ID: $pro_id</h5>
                    <img src='../../../$pro_image' class='product_img' width='200px'>
                    <h4 class='product_title'>$pro_name</h4>
                    <h5 class='price_title'>$$pro_price</h5><hr>
                    <h5 class='price'>Amount Sold: $amnt_sold</h5><hr>
                    <h5 class='price_title'>$pro_var</h5><hr>
                    <h5 class='price_title'>$pro_var2</h5><hr>
                    <h5 class='price_title'>$pro_var3</h5>
                    <div style='display: flex; justify-content: space-around;'>
                    <a href='index.php?edit_pro=$pro_id' class='edit createBtn'><i class='far fa-edit'></i></a>
                    <a href='./includes/deleteProducts.php?delete_pro=$pro_id' class='delete createBtn' onclick='return  confirm('Are you sure you want to delete this order? Y/N')'><i class='fas fa-trash-alt'></i></a>
                    </div>
                    </div>
                    ";


                        }
                if(!$row_pro=mysqli_fetch_array($run_pro)){
                    echo "No Products Found!";
                }
                    
                    
                    }

            ?>

            <?php

                if(isset($_GET['products'])){
                    include("products.php");
                }
                if(isset($_GET['categories'])){
                    include("categories.php");
                }

            ?>

        </div>
    </main>
    
    <script src="js/main.js"></script>
</body>
</html>

<?php } 



$con -> close();
?>