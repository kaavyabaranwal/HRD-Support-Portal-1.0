<?php

session_start();
include 'db_connect.php';

function func_alert($message)
{
    echo "<script>alert('$message');
    window.location.href = '/cwc2/index.html';
    </script>";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // $password = md5($password);
    $password = hash('sha256', $password);


    $sql = "SELECT id FROM login WHERE username='$username' AND password='$password';";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $lastindex = $row['id'];

    if (mysqli_query($conn, $sql) && isset($lastindex)) {
        $_SESSION['userid'] = $lastindex;
        header("location:/cwc2/employee.php");
    } else
        // echo '<script>alert("user not found please sign up")</script>';
        // header("location:/cwc2/index.html");
        func_alert('USER NOT FOUND. Please sign up');
}
