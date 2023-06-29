<?php

include_once('db_connect.php');

if (isset($_POST['submit_education'])) {
    $userid = $_GET['empid'];
    $degree = $_POST['degree'];
    $subject = $_POST['subject'];
    $institute = $_POST['institute'];
    $pass_year = $_POST['pass_year'];
    $duration = $_POST['duration'];
    $remark = $_POST['remark1'];
}

$sql = "UPDATE education set degree = '" . $degree . "', subject = '" . $subject . "' , institute = '" . $institute . "', pass_year = '" . $pass_year . "', duration = '" . $duration . "', remark = '" . $remark . "' where emp_id = '".$userid."';";

if (mysqli_query($conn, $sql)) {
    header("location:/cwc2/employee.php");
}
