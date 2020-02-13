<?php

session_start();

if(!isset($_SESSION['username'])){
	
	echo "<script>window.open('../login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {


include("db.php");

global $con;

if(isset($_GET['delete_pro'])){
	
	$delete_id = $_GET['delete_pro'];
	
	$delete_pro = "DELETE from products where PRODUCT_ID='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_pro); 
	
	if($run_delete){
	
		echo "<script>alert('A product has been deleted!')</script>";
		echo "<script>window.open('../index.php?products','_self')</script>";
	}else{
        // echo "<script>alert('Failed to delete the product!')</script>";
	    // echo "<script>window.open('../index.php?products','_self')</script>";
    }
	
    }
}
?>