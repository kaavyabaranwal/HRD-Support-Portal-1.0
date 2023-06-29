<?php
session_start();
include_once 'db_connect.php';

if (isset($_GET['delid'])) {
    $u_id = $_GET['delid'];
}
$userid = $_SESSION['userid'];


$sql = " delete from login where id='" . $u_id . "';";
$result = mysqli_query($conn, $sql);



if ($result) {

    if ($userid == $u_id) {
        header("location:/cwc2/index.html");
    } else {
        header("location:/cwc2/employee.php");
        exit;
    }

}
