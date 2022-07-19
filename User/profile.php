<?php
$title = "Profile";
$pg = 'Profile';
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
                    <h2>My Profile</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->
<section class="position-relative">
    <img src="images/flower-3.png" alt="" class="img-fluid flower-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 mt-lg-5 mt-3">
                <div class="white-div py-lg-5 py-3 px-lg-5 px-3">
                    <div class="text-center">
                        <img src="images/profile-picture.png" alt="" class="img-fluid profile-pic d-block mx-auto mb-2">
                        <a href="change-password.php" class="change-pwd">Change Password</a>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 mt-5">
                            <label for="" class="profile-lbl">First Name</label>
                        </div>
                        <div class="col-sm-5 mt-sm-5 mt-3">
                            <p class="profile-value">Mark</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 mt-5">
                            <label for="" class="profile-lbl">Last Name</label>
                        </div>
                        <div class="col-sm-5 mt-sm-5 mt-3">
                            <p class="profile-value">Carson</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 mt-5">
                            <label for="" class="profile-lbl">Email</label>
                        </div>
                        <div class="col-sm-5 mt-sm-5 mt-3">
                            <p class="profile-value">abc@xyz.com</p>
                        </div>
                    </div>
                    <div class="text-center mt-sm-5 mt-4">
                        <a href="edit-profile.php" class="orange-btn d-inline-block px-5">Edit</a>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>
<?php include('footer.php') ?>