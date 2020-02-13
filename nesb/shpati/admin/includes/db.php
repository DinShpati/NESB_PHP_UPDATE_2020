<?php

global $con;

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "nesb";
$con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);

?>