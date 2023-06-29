<?php
session_start();
include_once 'db_connect.php';

if (isset($_GET['delid'])) {
    $t_id = $_GET['delid'];
}

$sql = " delete from training where id='" . $t_id . "';";
$result = mysqli_query($conn, $sql);

$userid = $_SESSION['userid'];

if ($result) {
    header("location:/cwc2/viewtraining.php");
    exit;
}

?>