<?php

// echo "personal 123";
session_start();
include_once 'db_connect.php';


$userid = $_GET["editid"];

$_SESSION['editid'] = $userid;
header("location:/cwc2/edittraining.php");

mysqli_close($conn);
