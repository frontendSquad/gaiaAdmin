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
                    <h3>Payment Logs</h3>
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
                <h2 class="main-heading">Subscription/Payment Log Details</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 mt-2">
                <div class="package-div">
                    <h3 class="package-heading">Basic Package</h3>
                    <h2 class="package-price"><span><sup>$</sup></span>100<span>/Monthly</span></h2>
                    <p class="package-point mt-3">Modo Yoga Online</p>
                    <p class="package-point">Corepower Yoga</p>
                    <p class="package-point">Power Yoga</p>
                    <p class="package-point">Yoga Lift </p>
                    <p class="package-point">Modo Yoga</p>
                    <a href="subscription-payment.php" class="banner-a-2">Purchase Plan</a>
                    <img src="images/flower-2.png" alt="" class="img-fluid flower-2">
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>