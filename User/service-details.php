<?php
$title = "Service Details";
$pg = 'Services';
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
                    <h3>Service</h3>
                    <h2>Service Details</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-lg-5 mt-2">
                <a href="services.php">
                    <img src="images/back.png" alt="">
                </a>
                <h3 class="main-heading-2 d-inline-block">Kundalini Yoga & Meditation</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <img src="images/blogs-img.png" alt="" class="img-fluid blog-2 w-100">
                <div class="d-lg-flex justify-content-between align-items-center mt-1">
                    <div class="d-flex align-items-center">
                        <img src="images/blog-profile.png" alt="" class="blog-profile mr-1">
                        <p class="video-date">By Trainer: John Doe</p>
                    </div>
                    <div class="mt-3">
                        <span class="video-date">$20 For 60Mins Session</span>
                    </div>
                </div>
                <h3 class="privacy-heading mt-2">7 Days A Week For Kundalini Yoga & Meditation, Gong And Breathwork Classes.</h3>
                <p class="blogs-pp-2 mt-lg-3 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit animi asperiores ea pariatur obcaecati assumenda culpa ullam molestiae corporis beatae fuga aspernatur cumque tenetur, error, omnis, eos quo maiores iste!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit animi asperiores ea pariatur obcaecati assumenda culpa ullam molestiae corporis beatae fuga aspernatur cumque tenetur, error, omnis, eos quo maiores iste!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit animi asperiores ea pariatur obcaecati assumenda culpa ullam molestiae corporis beatae fuga aspernatur cumque tenetur, error, omnis, eos quo maiores iste!</p>
                <p class="blogs-pp-2 mt-lg-3 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit animi asperiores ea pariatur obcaecati assumenda culpa ullam molestiae corporis beatae fuga aspernatur cumque tenetur, error, omnis, eos quo maiores iste!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit animi asperiores ea pariatur obcaecati assumenda culpa ullam molestiae corporis beatae fuga aspernatur cumque tenetur, error, omnis, eos quo maiores iste!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit animi asperiores ea pariatur obcaecati assumenda culpa ullam molestiae corporis beatae fuga aspernatur cumque tenetur, error, omnis, eos quo maiores iste!</p>
                <button class="orange-btn mt-3" type="button" data-toggle="modal" data-target="#book-session">Book Session</button>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade " id="book-session" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="pb-5 px-3">
                <h3 class="report-post my-3">Select Time</h3>
                <img src="images/calender.png" alt="" class="img-fluid w-100">
                <div class="text-center">
                    <button class="orange-btn" data-toggle="modal" data-target="#payment" data-dismiss="modal" aria-label="Close">Next</button>

                </div>

            </div>
        </div>
    </div>
</div>
<!--modal -->
<!-- Modal -->
<div class="modal fade " id="payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body">
                <div class="pb-5 px-lg-5 px-3">
                    <h4 class="report-post">Payment Details</h4>
                    <h5 class="f-40">Kundalini Yoga</h5>
                    <div class="d-flex align-items-center">
                        <img src="images/blog-profile.png" alt="" class="blog-profile mr-1">
                        <p class="video-date">By Trainer: John Doe</p>
                    </div>
                    <div class="d-xl-flex align-items-center mt-2">
                        <div class="mt-2">
                            <i class="far fa-calendar video-icon mr-2"></i>
                            <span class="video-date">Mm/Dd/Yyyy</span>
                        </div>
                        <div class="ml-xl-3 mt-2">
                            <i class="far fa-clock video-icon mr-2"></i>
                            <span class="video-date">5 min</span>
                        </div>
                    </div>
                    <h6 class="price-heading my-2">$10.00</h6>
                    <form action="">
                        <div class="mt-3">
                            <label for="" class="all-lbl-2">Cardholder's Name <span>*</span></label>
                            <input type="text" class="all-input-2 w-100" placeholder="Enter  Cardholder's Name">
                        </div>
                        <div class="mt-3">
                            <label for="" class="all-lbl-2">Card Number <span>*</span></label>
                            <input type="number" class="all-input-2 w-100" placeholder="Enter  Card Number">
                        </div>
                        <div class="mt-3">
                            <label for="" class="all-lbl-2">CVV <span>*</span></label>
                            <input type="text" class="all-input-2 w-100" placeholder="Enter  CVV">
                        </div>
                        <div class="mt-3">
                            <label for="" class="all-lbl-2">Expiration Date <span>*</span></label>
                            <input type="text" class="all-input-2 w-100" placeholder="Enter  Expiration Date">
                        </div>
                    </form>
                    <div class="mt-3">
                        <button class="orange-btn mt-2 px-5" type="button" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#payment-successfull">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<!-- Modal -->
<div class="modal fade " id="payment-successfull" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<!-- Modal -->
<div class="modal fade " id="payment-unsuccessfull" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/cancel.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Payment Error</h3>
                <p class="modal-text">Your card has expired / Insufficient Account Balance / Invalid Card Details</p>
                <button class="orange-btn mt-2 px-5" data-dismiss="modal" aria-label="Close">Try Again</button>
            </div>
        </div>
    </div>
</div>
<!--modal -->

<?php include('footer.php') ?>