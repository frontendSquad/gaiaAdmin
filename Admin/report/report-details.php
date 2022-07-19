<?php
include('../layout/topBar.php');
?>
<div class="userSection">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox border-bottom py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="./report.php" class="text-dark text-decoration-none"><i class="bi bi-chevron-left"></i>Report Details</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-2 rounded-15 my-4">
        <div class="row justify-content-end">
            <div class="col-md-2">
                <a href="#" class="text-purple">View User Details</a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">Report ID:</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">001</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">Reported on:</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">mm/dd/yyyy</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">Reported By:</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">abc xyz</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">Report Description:</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aenean euismod bibendum laoreet. Proin gravida dolor sit amet
                    lacus accumsan et viverra</p>
            </div>
        </div>
    </div>
</div>
<!-- post  box -->
<div class="post-box shadow rounded-15 my-4 p-3">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-4">
            <div class="postTitle d-flex flex-wrap align-items-center gap-15">
                <div class="postImage">
                    <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill">
                </div>
                <div class="postmeta">
                    <h6 class="text-dark mb-1 achivpFont">David Goria</h6>
                    <p class="mb-0 text-secondary">22 min ago</p>
                </div>

            </div>
        </div>
        <div class="col-md-1">
            <div class="btn-group justify-content-end d-flex flex-column align-items-end">
                <button type="button" class="btn border-0" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right rounded-pill">
                    <button class="dropdown-item" type="button"><i class="bi bi-exclamation-octagon pr-2"></i>Report</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="postContent py-3">
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aenean Euismod Bibendum Laoreet. Proin Gravida Dolor Sit Amet Lacus Accumsan Et Viverra Justo Commodo. Proin Sodales Pulvinar Sic Tempor.
                </p>
            </div>
            <div class="postFeaturedImge">
                <img src="../images/postImge.png" alt="Featured Image" class="mw-100">
            </div>
        </div>
    </div>
</div>

<!-- decline and approve btn -->

<div class="d-flex flex-wrap align-items-center gap-15 py-4">
    <a href="#" class="btn bg-theme-primary text-white px-5 rounded-pill border-color-primary">Decline</a>
    <a href="#" class="btn bg-transparent theme-primary-text border-color-primary px-5 rounded-pill border">Approve and Delete</a>
</div>


<?php include('../layout/footer.php'); ?>