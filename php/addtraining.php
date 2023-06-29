<?php

include_once 'db_connect.php';


if (isset($_POST['submit_training'])) {
    $userid = $_GET['empid'];
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

$sql = "insert into training (title , t_start, t_end, circular, department, organiser, t_desc, t_type, t_place, speaker) values ('$title', '$t_start', '$t_end', '$circular', '$department', '$organiser', '$t_desc', '$t_type', '$t_place', '$speaker')";

if (mysqli_query($conn, $sql)) {
    header("location:/cwc2/viewtraining.php");
}
