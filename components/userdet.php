<?php
// session_start();

include_once 'php/db_connect.php';
if (isset($_GET['empid'])) {
    $userid = $_GET['empid'];
} else {
    $userid = $_SESSION['userid'];
    // echo $userid;
}

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


<div id="page-wrapper" class="gray-bg tab-pane active" aria-labelledby="wrapper-tab">
    <!-- form section -->
    <div class="wrapper-white">
        <div class=" dashboard-top w-100">
            <!-- top section -->
            <ul class="breadcum nav" role="tablist">
                <li class="dashboard-heading"><i class="fa fa-bars" aria-hidden="true"></i> Bio-Data Management
                </li>
            </ul>
        </div>
        <div class="registration-form">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="nav nav-tabs registration-form-head" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Educational Qualification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Work Experience</a>
                    </li>
                </ul>
                <div class="registration-form-body">
                    <div class="tab-content" id="myTabContent">

                        <form name="personal" action="php/personalupdate.php?empid=<?php echo $userid ?>" method="POST" class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" value="<?php echo $fname ?>" id="" name="firstname" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" value="<?php echo $lastname ?>" id="" name="lastname" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Employee Code</label>
                                        <input type="text" value="<?php echo $emp_code ?>" id="" name="emp_code" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Present Designation</label>
                                        <input type="text" value="<?php echo $designation ?>" id="" name="designation" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Present Department</label>
                                        <input type="text" value="<?php echo $department ?>" id="" name="department" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Organisation</label>
                                        <input type="text" value="<?php echo $organisation ?>" id="" name="organisation" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input type="text" value="<?php echo $phone ?>" id="" name="phone" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Present Address</label>
                                        <input type="text" value="<?php echo $address ?>" id="" name="address" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" value="<?php echo $state ?>" name="state" class="form-control icon-inside" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>District</label>
                                        <input type="text" value="<?php echo $district ?>" id="" name="district" class="form-control icon-inside" />
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input type="tel" value="<?php echo $pincode ?>" id="" name="pincode" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="email" value="<?php echo $email ?>" id="" name="email" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>FAX</label>
                                        <input type="number" value="<?php echo $fax ?>" id="" name="fax" class="form-control icon-inside" />
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <!-- <button type="button" class="custombtn blue-br-btn w-100" name="submit"
                                                    type="submit" value="submit">Save</button> -->
                                        <input type="submit" name="submit_personal" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <!-- <a href="#"><button type="button"
                                                        class="custombtn bluebtn w-100">Next</button></a> -->

                                    </div>
                                </div>
                            </div>
                        </form>

                        <form name="education" action="/cwc2/php/educationupdate.php?empid=<?php echo $userid ?>" method="POST" class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Degree</label>
                                        <input type="text" value="<?php echo $degree ?>" id="" name="degree" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" value="<?php echo $subject ?>" id="" name="subject" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Institute</label>
                                        <input type="text" value="<?php echo $institute ?>" id="" name="institute" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Year of Passing</label>
                                        <input type="text" value="<?php echo $pass_year ?>" id="" name="pass_year" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <input type="text" value="<?php echo $duration ?>" id="" name="duration" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Remark</label>
                                        <input type="text" value="<?php echo $remark ?>" id="" name="remark1" class="form-control icon-inside" />
                                    </div>
                                </div>


                                <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <!-- <button type="button" class="custombtn blue-br-btn w-100"
                                                    data-toggle="modal" data-target="#myModal">Save</button> -->
                                        <input type="submit" name="submit_education" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <!-- <button type="button" class="custombtn bluebtn w-100"
                                                    data-toggle="modal" data-target="#myModal">Next</button> -->
                                    </div>
                                </div>
                            </div>
                            <!-- </form> -->
                        </form>
                        <form name="professional" action="/cwc2/php/workexpupdate.php?empid=<?php echo $userid ?>" method="POST" class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Post</label>
                                        <input type="text" value="<?php echo $post ?>" id="" name="post" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Office</label>
                                        <input type="text" value="<?php echo $office ?>" id="" name="office" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" value="<?php echo $city ?>" id="" name="city" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>From</label>
                                        <input type="date" value="<?php echo $start_date ?>" id="" name="start_date" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>To</label>
                                        <input type="date" value="<?php echo $end_date ?>" id="" name="end_date" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Type of Charge</label>
                                        <input type="text" value="<?php echo $type_of_charge ?>" id="" name="type_of_charge" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Work Handled</label>
                                        <input type="text" value="<?php echo $work_handled ?>" id="" name="work_handled" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Contribution</label>
                                        <input type="text" value="<?php echo $contri ?>" id="" name="contribution" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label>Remark</label>
                                        <input type="text" value="<?php echo $remark ?>" id="" name="remark2" class="form-control icon-inside" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                    <div class="form-group">
                                        <!-- <button type="button" class="custombtn blue-br-btn w-100"
                                                    data-toggle="modal" data-target="#myModal">Save</button> -->
                                        <input type="submit" name="submit_workexp" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>