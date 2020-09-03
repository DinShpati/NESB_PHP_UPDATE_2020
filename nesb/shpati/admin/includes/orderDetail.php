<?php 
if(!isset($_SESSION['username'])){
        
    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
 }
 global $con;

$orderID;

if(isset($_GET['orderDetail'])){
    $orderID = $_GET['orderDetail'];
}

$getOrders = "SELECT * FROM orders where ORDER_ID = $orderID";
$runGetOrders = $con -> query($getOrders);
$row_order_info = mysqli_fetch_array($runGetOrders);

$orderDate = $row_order_info['ORDER_DATE'];
$orderEmail = $row_order_info['ORDER_EMAIL'];
$orderAmount = $row_order_info['ORDER_AMOUNT'];
$orderComplete = $row_order_info['ORDER_COMPLETE'];
$orderDetails = stripslashes(html_entity_decode($row_order_info['ORDER_INFO']));
$orderInfo = json_decode($orderDetails, true);
$orderCompleteString = "Yes";

    if($orderComplete == 0){
        $orderCompleteString = 'No';
    }

?>
<div class="orderContainer">
    <a href="index.php?orders"class="btn btn-md"><i class="fas fa-chevron-left"></i> Back to all Orders</a>
    <br>
    <div class="orderDetails">
        <h2>Order Details</h2>
        <hr>
        <br>
        <div class="orderDetailsHeader">
            <div>
                <h4>Date: <?php echo $orderDate; ?></h4>
                <h4>Customer Email: <?php echo $orderEmail; ?></h4>
            </div>
            <div>
                <h4>Order ID: #<?php echo $orderID; ?></h4>
                <h4>Order Complete: <?php echo $orderCompleteString; ?></h4>
            </div>
            <div>
                <h5>Gross amount</h5>
                <h3>$<?php echo number_format($orderAmount, 2); ?></h3>
                <form action="includes/completeOrder.php?id=<?php echo $orderID; ?>" method="post">
                    <button type="submit" class="completeOrderBTN">Complete Order</button>
                </form>
            </div>
        </div>
        <hr>
        <a href="https://www.paypal.com/activity/" target="_blank" style="color: black;"><h4>View More Info @ PayPal</h4></a>
        <br>
        <div class="orderInfo">
            <h3><?php print_r($orderInfo); ?></h3>
        </div>
    </div>
    
</div>
