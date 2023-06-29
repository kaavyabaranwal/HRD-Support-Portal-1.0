<?php

$conn  = mysqli_connect("localhost", "root", "", "cwc");
$t_edit = $_SESSION['editid'];

$query  = "SELECT id,title , t_start, t_end, circular, department, organiser, t_desc, t_type, t_place, speaker FROM training where id = '" . $t_edit . "';";
$result = mysqli_query($conn, $query);

while ($row  = mysqli_fetch_array($result)) {
    $title = $row['title'];
    $t_start = $row['t_start'];
    $t_end = $row['t_end'];
    $circular = $row['circular'];
    $department = $row['department'];
    $organiser = $row['organiser'];
    $t_desc = $row['t_desc'];
    $t_type = $row['t_type'];
    $t_place = $row['t_place'];
    $speaker = $row['speaker'];
}
?>


<div class="gray-bg tab-pane " id="training" aria-labelledby="training-tab">
    <div class="wrapper-white">
        <div class=" dashboard-top w-100">
            <!-- top section -->
            <ul class="breadcum nav" role="tablist">
                <li class="dashboard-heading"><i class="fa fa-bars" aria-hidden="true"></i> Add Trainings
                </li>
            </ul>
        </div>
        <div class="registration-form">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="registration-form-body">
                    <form name="training" action="php/trainingupdate.php" method="POST">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Title / Subject</label>
                                    <input type="text" value="<?php echo $title ?>" id="" name="title" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Training start date</label>
                                    <input type="date" value="<?php echo $t_start ?>" id="" name="t_start" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Training end date</label>
                                    <input type="date" value="<?php echo $t_end ?>" id="" name="t_end" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Training Circular</label>
                                    <input type="file" value="<?php echo $t_circular ?>" id="" name="circular" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" value="<?php echo $department ?>" id="" name="department2" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Organiser Name</label>
                                    <input type="text" value="<?php echo $organiser ?>" id="" name="organiser" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Training Type</label>
                                    <input type="text" value="<?php echo $t_type ?>" id="" name="t_type" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" value="<?php echo $t_desc ?>" id="" name="t_desc" class="form-control icon-inside" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Institute where attended</label>
                                    <input type="text" value="<?php echo $t_place ?>" name="t_place" class="form-control icon-inside" />
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label>Speaker Name</label>
                                    <input type="text" value="<?php echo $speaker ?>" id="" name="speaker" class="form-control icon-inside" />
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <input type="submit" name="submit_training" value="Submit" class="btn btn-primary">
                                </div>
                            </div>

                        </div>
                    </form>

                    </>
                </div>
            </div>
        </div>
    </div>
</div>