<?php

include("includes/db.php");


//Getting the income of this year,this month, and this week

function yearIncome(){
    global $con;
                                            //NEEDS WORK
    $yearlyIncome = 0;
    $year = date("Y");
    $select_order = "SELECT * FROM orders";
    $run_query = mysqli_query($con, $select_order);

    while($row_order = mysqli_fetch_array($run_query)){

        $total = $row_order['ORDER_AMOUNT'];
        $date = $row_order['ORDER_DATE'];

        if(date("Y", strtotime($date))){
            $yearlyIncome += $total;
        }

    }

    return number_format($yearlyIncome, 2);

}

function monthIncome(){
    global $con;
                                                //NEEDS WORK
    $monthlyIncome = 0;
    $month = date("m/Y");
    $select_order = "SELECT * FROM orders";
    $run_query = mysqli_query($con, $select_order);

    while($row_order = mysqli_fetch_array($run_query)){

        $total = $row_order['ORDER_AMOUNT'];
        $date = $row_order['ORDER_DATE'];

        if(date("m/Y", strtotime($date))){
            $monthlyIncome += $total;
        }

    }

    return number_format($monthlyIncome, 2);

}

//Total Sales

function totalSales(){

    global $con;

    $totalSales = 0;

    $get = "SELECT * FROM orders";
    $run = mysqli_query($con, $get);

    while($row = mysqli_fetch_row($run)){
        $totalSales++;
    }

    return $totalSales;
}

//Unfinished Orders

function unfinishedOrder(){

    global $con;

    $unfinished = 0;

    $get = "SELECT * FROM orders WHERE ORDER_COMPLETE = 0";
    $run = mysqli_query($con, $get);

    while($row = mysqli_fetch_row($run)){
        $unfinished++;
    }

    return $unfinished;
}

//Recent Orders

function recentOrders(){

    global $con;

    

}

?>