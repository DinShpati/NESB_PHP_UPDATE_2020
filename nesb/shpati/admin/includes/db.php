<?php

global $con;

$dbhost = "localhost";
$dbuser = "u729631644_dinshpati";
$dbpass = "Z3tT57cW_$_!_*";
$db = "nesb";
$con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $con -> error);

?>