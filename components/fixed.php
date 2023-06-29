<?php
// include 'php/personalfetch.php'

include_once 'php/db_connect.php';
if (isset($_GET['empid'])) {
    $userid = $_GET['empid'];
}
// echo $userid;

$sql = "SELECT firstname, lastname, department, designation, emp_code, organisation, phone, address, district, pincode, email ,state , fax from personal where emp_id ='" . $userid . "'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    $fname = $row['firstname'];
    $lastname = $row['lastname'];
    $department = $row['department'];
    $designation = $row['designation'];
    $emp_code = $row['emp_code'];
    $organisation = $row['organisation'];
    $phone = $row['phone'];
    $address = $row['address'];
    $state = $row['state'];
    $district = $row['district'];
    $pincode = $row['pincode'];
    $email = $row['email'];
    $fax = $row['fax'];
}

$sql2 = "SELECT  degree, subject, institute, pass_year, duration, remark from education where emp_id ='" . $userid . "'";

$result2 = mysqli_query($conn, $sql2);
while ($row3 = mysqli_fetch_array($result2)) {
    $degree = $row3['degree'];
    $subject = $row3['subject'];
    $institute = $row3['institute'];
    $pass_year = $row3['pass_year'];
    $duration = $row3['duration'];
    $remark = $row3['remark'];
}


$sql3 = "SELECT  contri,post, office, city,start_date, end_date, type_of_charge, work_handled ,remark from professional where emp_id ='" . $userid . "'";

$result3 = mysqli_query($conn, $sql3);
while ($row4 = mysqli_fetch_array($result3)) {
    $post = $row4['post'];
    $office = $row4['office'];
    $city = $row4['city'];
    $start_date = $row4['start_date'];
    $end_date = $row4['end_date'];
    $type_of_charge = $row4['type_of_charge'];
    $work_handled = $row4['work_handled'];
    $remark = $row4['remark'];
    $contri = $row4['contri'];
}


?>


<div class="dashboard-content-sec">
    
</div>