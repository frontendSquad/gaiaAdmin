<?php
$title = "Contact";
$pg = 'Contact';
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
                    <h3>Get In Touch</h3>
                    <h2>Contact Us</h2>
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
            <div class="white-div py-5">
                <h3 class="text-center main-heading">Contact Us</h3>
                <form action="" class="px-lg-5">
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <label for="" class="all-lbl-2">First Name<span>*</span></label>
                            <input type="text" class="all-input-2" placeholder="Enter First Name">
                        </div>
                        <div class="col-lg-6 mt-4">
                            <label for="" class="all-lbl-2">Last Name<span>*</span></label>
                            <input type="text" class="all-input-2" placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mt-4">
                            <label for="" class="all-lbl-2">Email<span>*</span></label>
                            <input type="text" class="all-input-2" placeholder="Enter Email">
                        </div>
                        <div class="col-lg-6 mt-4">
                            <label for="" class="all-lbl-2">Subject<span>*</span></label>
                            <input type="text" class="all-input-2" placeholder="Enter Subject">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4">
                            <label for="" class="all-lbl-2">Message<span>*</span></label>
                            <textarea name="" rows="8" class="all-input-2" placeholder="Enter Message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center mt-4">
                            <button class="orange-btn" type="button" data-toggle="modal" data-target="#signup">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade " id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/check.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Successfully</h3>
                <p class="modal-text">This Post has been Reported Successfully!</p>
                <button class="orange-btn mt-2 px-5" data-dismiss="modal" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--modal -->   
<?php include('footer.php') ?>