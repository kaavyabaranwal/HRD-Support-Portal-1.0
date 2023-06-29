<?php

include_once('db_connect.php');

if(isset($_POST['submit_personal'])){
    $userid = $_GET['empid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST["lastname"];
    $department = $_POST["department"];
    $designation = $_POST["designation"];
    $emp_code = $_POST["emp_code"];
    $organisation = $_POST["organisation"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $district = $_POST["district"];
    $pincode = $_POST["pincode"];
    $email = $_POST["email"];
    $fax = $_POST["fax"];
}

$sql = "UPDATE personal set firstname = '".$firstname."', lastname = '".$lastname."', department = '".$department."', designation = '".$designation."', emp_code = '".$emp_code."', organisation = '".$organisation."', phone = '".$phone."', address = '".$address."', district = '".$district."', pincode = '".$pincode."', email = '".$email."' , state = '".$state."', fax = '".$fax."' where emp_id = '".$userid."';";

if(mysqli_query($conn, $sql)){
    header("location:/cwc2/employee.php");
}