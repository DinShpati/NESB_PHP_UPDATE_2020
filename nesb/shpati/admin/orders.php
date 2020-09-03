<?php 
if(!isset($_SESSION['username'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}

?>
<h2>Orders</h2>
<br>
<hr>
<br>
<div class="orderSearch">

</div>
<div class="orderContainer">
    <div class="orderHeader">
        <h4>ID#</h4>
        <h4>Date</h4>
        <h4>Email</h4>
        <h4 style="font-size: 13px;">Order Complete</h4>
        <h4>Total</h4>
        <h4>Details</h4>

    </div>
    <?php

    global $con;

    $getOrders = "SELECT * FROM orders ORDER BY ORDER_DATE DESC";
    $runGetOrders = $con -> query($getOrders);

    $count = 0;

    while($rowsOrders = mysqli_fetch_array($runGetOrders)){

        $orderID = $rowsOrders['ORDER_ID'];
        $orderAmount = $rowsOrders['ORDER_AMOUNT'];
        $orderComplete = $rowsOrders['ORDER_COMPLETE'];
        $orderDate = $rowsOrders['ORDER_DATE'];
        $orderTotal = $rowsOrders['ORDER_TOTAL'];
        $orderInfo = $rowsOrders['ORDER_INFO'];
        $orderEmail = $rowsOrders['ORDER_EMAIL'];

        $orderCompleteString = "Yes";

        if($orderComplete == 0){
            $orderCompleteString = 'No';
        }

    ?>
        <div class="order">
            <h4>#<?php echo $orderID; ?></h4>
            <h4><?php echo $orderDate; ?></h4>
            <h4><?php echo $orderEmail; ?></h4>
            <h4><?php echo $orderCompleteString; ?></h4>
            <h4>$<?php echo number_format($orderAmount, 2); ?></h4>
            <h4><a href="index.php?orderDetail=<?php echo $orderID; ?>">View</a></h4>
        </div>
    <?php
    }

    ?>
</div>

