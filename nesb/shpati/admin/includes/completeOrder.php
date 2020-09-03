<?php


include("db.php");

global $con;

if(isset($_GET['id'])){
	
	$orderID = $_GET['id'];
	
	$completeOrder = "UPDATE orders set ORDER_COMPLETE=1 WHERE ORDER_ID = $orderID"; 
	
	$run_order = mysqli_query($con, $completeOrder); 
	
	if($run_order){
	
		echo "<script>alert('Order has beeen completed!')</script>";
		echo "<script>window.open('../index.php?orderDetail=$orderID','_self')</script>";
	}else{
        echo "<script>alert('Failed to delete the product!')</script>";
	    echo "<script>window.open('../index.php?orderDetail=$orderID','_self')</script>";
    }
	
    }
?>