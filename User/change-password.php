<?php
$title = "Edit Profile";
$pg = 'Edit Profile';
include('header.php');
include('nav.php');
?>
<!-- Banner -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <img src="images/inner-banner.png" alt="" class="img-fluid">
                <div class="inner-banner-text">
                    <h3>Profile</h3>
                    <h2>Edit Profile</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->
<section class="position-relative">
    <img src="images/flower-3.png" alt="" class="img-fluid flower-3">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-lg-5 mt-3">
                <a href="profile.php">
                    <img src="images/back.png" alt="">
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-3">
                <div class="white-div py-lg-5 py-3 px-lg-5 px-3">
                    <h3 class="main-heading">Change Password</h3>
                    <div class="row">
                        <div class="col-12 mt-5">
                            <label for="" class="all-lbl-2">Password<span>*</span></label>
                            <input type="password" class="all-input-2 right-icon-input enter-input" placeholder="Enter Password">
                            <i class="fa fa-eye-slash enter-icon right-icon-2"></i>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="" class="all-lbl-2">New Password<span>*</span></label>
                            <input type="password" class="all-input-2 right-icon-input enter-input-2" placeholder="Enter New Password">
                            <i class="fa fa-eye-slash enter-icon-2 right-icon-2"></i>
                        </div>
                        <div class="col-12 mt-3">
                            <label for="" class="all-lbl-2">Confirm Password<span>*</span></label>
                            <input type="password" class="all-input-2 right-icon-input enter-input-3" placeholder="Confirm Password">
                            <i class="fa fa-eye-slash enter-icon-3 right-icon-2"></i>
                        </div>
                    </div>
                    <div class="text-center mt-sm-5 mt-4">
                        <button type="button" data-toggle="modal" data-target="#profile-updated" class="orange-btn d-inline-block px-5">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade " id="profile-updated" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/check.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Successfully</h3>
                <p class="modal-text">Password Updated Successfully!</p>
                <button class="orange-btn mt-2 px-5" data-dismiss="modal" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<?php include('footer.php') ?>