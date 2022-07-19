<?php
$title = "Subscription Plans";
$pg = 'Subscription Plans';
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
                    <h3>Packages Plan</h3>
                    <h2>Subscriptions</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->
<!-- Packages -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <a href="subscription-plans.php">
                    <img src="images/back.png" alt="">
                </a>
            </div>
        </div>
        <div class="package-div-2">
            <div class="row">
                <div class="col-lg-6 mt-2 px-lg-5">
                    <h3 class="package-heading">Basic</h3>
                    <h2 class="package-price"><span><sup>$</sup></span>100<span>/Monthly</span></h2>
                    <p class="package-point mt-3">Modo Yoga Online</p>
                    <p class="package-point">Corepower Yoga</p>
                    <p class="package-point">Power Yoga</p>
                    <p class="package-point">Yoga Lift </p>
                    <p class="package-point">Modo Yoga</p>
                    <a href="subscription-payment.php" class="banner-a-2">Purchase Plan</a>
                </div>
                <div class="col-lg-6 mt-2 px-lg-5">
                    <h3 class="sub-heading">Payment</h3>
                    <h2 class="main-heading">Payment Details</h2>
                    <form action="" class="text-left mb-xl-5">
                        <div class="mt-lg-4 mt-3">
                            <label for="" class="all-lbl-2">Cardholder's Name<span>*</span></label>
                            <input type="text" class="all-input-2" placeholder="Enter Cardholder's Name">
                        </div>
                        <div class="mt-lg-4 mt-3">
                            <label for="" class="all-lbl-2">Card Number<span>*</span></label>
                            <input type="number" class="all-input-2" placeholder="Enter Card Number">
                        </div>
                        <div class="mt-lg-4 mt-3">
                            <label for="" class="all-lbl-2">CVV<span>*</span></label>
                            <input type="number" class="all-input-2" placeholder="Enter CVV">
                        </div>
                        <div class="mt-lg-4 mt-3">
                            <label for="" class="all-lbl-2">Expiration Date<span>*</span></label>
                            <input type="text" class="all-input-2" placeholder="Enter Expiration Date">
                        </div>
                        <button class="orange-btn mt-lg-4 mt-3 mb-xl-5" type="button" data-toggle="modal" data-target="#payment-successful">Pay Now</button>
                    </form>
                    <img src="images/flower-2.png" alt="" class="img-fluid flower-2">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Packages -->
<!-- Modal -->
<div class="modal fade " id="payment-successful" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/check.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Successfully</h3>
                <p class="modal-text">Payment has been made Successfully!</p>
                <button class="orange-btn mt-2 px-5" data-dismiss="modal" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<?php include('footer.php') ?>