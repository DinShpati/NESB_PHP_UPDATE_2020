<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mobileMain.css">
    <link rel="stylesheet" href="css/products.css">

    <!--Font aawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Damion|Happy+Monkey|Pacifico" rel="stylesheet">
</head>
<body>
    <div id="sideNav" >
        <div class="profileContainer" align="center">
            <img src="img/profile.png" alt="" class="profilePic">
            <h5 class="profileName">User Name</h5>
            <h5 class="profileName">UserN@example.com</h5>
            <a href="" class="btn btn-md">Sign Out</a>
        </div>
        <br>
        <hr>
        <br>
        <div class="sideLinkContainer">
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-th"></i> &nbsp;Products</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-list-alt"></i> &nbsp;Categories</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-search"></i> &nbsp;Product Finder</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-list-ol"></i> &nbsp;Orders</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fas fa-envelope-open-text"></i> &nbsp;Newsletter</a><br><br>
            <a href="" class="sideNavLink simpleLink"><i class="fab fa-paypal"></i> &nbsp;Paypal Order Finder</a><br><br>
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
                    <img src="img/profile.png" alt="" class="profilePic">
                    <h5 class="profileName">User Name</h5>
                </li>
            </ul>
        </nav>

        <div class="dashboard">
            <div style="display: flex;justify-content: space-between;">
                <div><h4 id="todaysDate" style="color: #546e1f; text-decoration: underline;">Todays Date: 12/30/2019</h4></div>
                <div><h4 id="currentTime" style="color: #546e1f; text-decoration: underline;">12:30pm</h4></div>
            </div>
            <h2>Products</h2>
            <hr>
            <br>
            <div class="section1 col-2">
                <div>
                    <a href="#" class="createBtn">Create a New Product &nbsp;<i class="fas fa-plus-circle"></i></a>
                </div>
                <div>
                    <label for="productSearch">Enter the Product ID below: </label>
                    <h6>(You can use the product finder if you want to use keywords)</h6>
                    <form action="" method="post" style="display: flex; justify-content: space-between;">
                        <input type="number" placeholder="Enter ID: " name="productSearch" id="productSearch" class="input" style="width: 50%; margin-right: 10px;">
                        <button class="btn btn-md" type="submit" style="width: 50%;">Enter</button>
                    </form>
                </div>
            </div>
            <hr>
            <div class="section2">
                <h2>All Products</h2>

                <div class="productTable">

                    <div class="productRow">
                        <img src="https://nesheabutter.com/img/Afterbath.jpg" alt="After Bath" class="productImage">
                        <h5 class="name">NE Shea Butter After Bath Oil</h5>
                        <h5 class="id">I.D: #1</h5>
                        <h5 class="price">$15.99</h5>
                        <div style="display: flex; justify-content: space-around;">
                            <a href="" class="edit createBtn"><i class="far fa-edit"></i></a>
                            <a href="" class="delete createBtn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>

                    <div class="productRow">
                        <img src="https://nesheabutter.com/img/Afterbath.jpg" alt="After Bath" class="productImage">
                        <h5 class="name">NE Shea Butter After Bath Oil</h5>
                        <h5 class="id">I.D: #1</h5>
                        <h5 class="price">$15.99</h5>
                        <div style="display: flex; justify-content: space-around;">
                            <a href="" class="edit createBtn"><i class="far fa-edit"></i></a>
                            <a href="" class="delete createBtn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>

                    <div class="productRow">
                        <img src="https://nesheabutter.com/img/Afterbath.jpg" alt="After Bath" class="productImage">
                        <h5 class="name">NE Shea Butter After Bath Oil</h5>
                        <h5 class="id">I.D: #1</h5>
                        <h5 class="price">$15.99</h5>
                        <div style="display: flex; justify-content: space-around;">
                            <a href="" class="edit createBtn"><i class="far fa-edit"></i></a>
                            <a href="" class="delete createBtn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>

                    <div class="productRow">
                        <img src="https://nesheabutter.com/img/Afterbath.jpg" alt="After Bath" class="productImage">
                        <h5 class="name">NE Shea Butter After Bath Oil</h5>
                        <h5 class="id">I.D: #1</h5>
                        <h5 class="price">$15.99</h5>
                        <div style="display: flex; justify-content: space-around;">
                            <a href="" class="edit createBtn"><i class="far fa-edit"></i></a>
                            <a href="" class="delete createBtn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>

                    <div class="productRow">
                        <img src="https://nesheabutter.com/img/Afterbath.jpg" alt="After Bath" class="productImage">
                        <h5 class="name">NE Shea Butter After Bath Oil</h5>
                        <h5 class="id">I.D: #1</h5>
                        <h5 class="price">$15.99</h5>
                        <div style="display: flex; justify-content: space-around;">
                            <a href="" class="edit createBtn"><i class="far fa-edit"></i></a>
                            <a href="" class="delete createBtn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>

                    <div class="productRow">
                        <img src="https://nesheabutter.com/img/Afterbath.jpg" alt="After Bath" class="productImage">
                        <h5 class="name">NE Shea Butter After Bath Oil</h5>
                        <h5 class="id">I.D: #1</h5>
                        <h5 class="price">$15.99</h5>
                        <div style="display: flex; justify-content: space-around;">
                            <a href="" class="edit createBtn"><i class="far fa-edit"></i></a>
                            <a href="" class="delete createBtn"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/main.js"></script>
</body>
</html>