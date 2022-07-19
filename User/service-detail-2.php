<?php
$title = "Dashboard";
$pg = 'Dashboard';
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
                    <h3>My Services Logs</h3>
                    <h2>Dashboard</h2>
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
                <a href="dashboard.php">
                    <img src="images/back.png" alt="">
                </a>
                <h2 class="main-heading">Service Details</h2>
                <h4 class="order-heading">Service Order And Account</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="white-div mt-3">
                    <h5 class="order-info">Service - Order Information</h5>
                    <hr>
                    <div class="d-sm-flex justify-content-between">
                        <div class="mt-3">
                            <h5 class="order-date">Order Date</h5>
                            <p class="order-date-value mt-2">Mm/dd/yyyy</p>
                        </div>
                        <div class="mt-3">
                            <h5 class="order-date">Order Date</h5>
                            <p class="order-date-value mt-2">Mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
                <div class="white-div mt-lg-5 mt-3">
                    <h5 class="order-info">Account Information</h5>
                    <hr>
                    <div class="d-sm-flex justify-content-between">
                        <div class="mt-3">
                            <h5 class="order-date">Customer Name</h5>
                            <p class="order-date-value mt-2">abc</p>
                        </div>
                        <div class="mt-3">
                            <h5 class="order-date">Email</h5>
                            <p class="order-date-value mt-2">abc@xyz.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include('footer.php') ?>