<?php

// echo "register.php";
session_start();
include 'db_connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // $password = md5($password);
    $password = hash('sha256', $password);

    $sql = "INSERT INTO login (username, password) values ('$username', '$password');";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        $lastindex = mysqli_insert_id($conn);
    }

    $sql1 = "INSERT INTO personal (emp_id) values ('$lastindex');";
    $sql1 .= "INSERT INTO education (emp_id) values ('$lastindex');";
    $sql1 .= "INSERT INTO professional (emp_id) values ('$lastindex');";

    if(mysqli_multi_query($conn, $sql1)){
        echo "registration successful";
        
        $_SESSION['userid'] = $lastindex;
        header("location:/cwc2/employee.php");
    }
}