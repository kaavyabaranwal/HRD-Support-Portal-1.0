<?php

include_once('db_connect.php');

if (isset($_POST['submit_workexp'])) {
    $userid = $_GET['empid'];
    $post = $_POST["post"];
    $office = $_POST["office"];
    $city = $_POST["city"];
    $start_date = $_POST["start_date"];
    $end_date = $_POST["end_date"];
    $type_of_charge = $_POST["type_of_charge"];
    $work_handled = $_POST["work_handled"];
    $contribution = $_POST["contribution"];
    $remark = $_POST["remark2"];
}

$sql = "UPDATE professional set contri = '".$contribution."',post = '" . $post . "' , office  = '" . $office . "' ,city = '" . $city . "' ,start_date = '" . $start_date . "' ,end_date = '" . $end_date . "' ,type_of_charge = '" . $type_of_charge . "', work_handled = '" . $work_handled . "', remark = '" . $remark . "' WHERE emp_id = '" . $userid . "';";

if (mysqli_query($conn, $sql)) {
    echo '<script>
    alert(" PROFESSIONAL details updated successfully");
    </script>';
    header("location:/cwc2/employee.php");
}
