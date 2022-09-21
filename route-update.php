<?php
include 'header.php';
?>

<?php
include './inc/database.php';
$id = $_REQUEST['id'];
$db = new Database();
$route_data = $db->select('route', "*", ['route_id' => $id])[0];
?>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">
    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Update Route</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="card-body">
                            <form method="POST" action="route-update-save.php" enctype="multipart/form-data">
                                 <input type ="text" name="uid" hidden value="<?php echo $id; ?>"><br>
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">

                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="route_name">
                                            <div class="field-placeholder">Route Name<span class="text-danger">*</span></div>
                                            <div class="form-text">
                                                Enter Route Name
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <button type="submit" name="submit" class="btn btn-info">
                                                <i class="la la-thumbs-o-up"></i> Update
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>

<?php
  include 'footer.php';
?>