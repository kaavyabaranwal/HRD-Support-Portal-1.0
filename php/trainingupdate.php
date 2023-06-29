<?php
session_start();

include_once('db_connect.php');
$userid = $_SESSION['editid'];

if (isset($_POST['submit_training'])) {
    $title = $_POST['title'];
    $t_start = $_POST['t_start'];
    $t_end = $_POST['t_end'];
    $circular = $_POST['circular'];
    $department = $_POST['department2'];
    $organiser = $_POST['organiser'];
    $t_desc = $_POST['t_desc'];
    $t_type = $_POST['t_type'];
    $t_place = $_POST['t_place'];
    $speaker = $_POST['speaker'];
}

$sql = "UPDATE training set title = '" . $title . "', t_start = '" . $t_start . "', t_end = '" . $t_end . "', circular = '" . $circular . "', department = '" . $department . "', organiser = '" . $organiser . "', t_desc = '" . $t_desc . "', t_type = '" . $t_type . "', t_place = '" . $t_place . "', speaker = '" . $speaker . "' where id = '" . $userid . "';";

if (mysqli_query($conn, $sql)) {
    header("location:/cwc2/viewtraining.php");
}
