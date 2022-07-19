<?php
$title = "Signup";
$pg = 'Signup';
include('header.php');
?>
<!-- SignUp -->
<section class="signup-back">
    <div class="container-fluid">
        <div class="offset-xl-1 col-xl-5 col-lg-6 px-0">
            <div class="signup-div">
                <div class="text-center">
                    <img src="images/logo.png" alt="" class="img-fluid">
                    <h2 class="signup-heading">Sign Up</h2>
                    <p class="signup-p">If you are new here, we are glad to have you as our member.</p>
                </div>
                <form action="" class="mt-3">
                    <div class="mt-lg-4 mt-3">
                        <label for="" class="all-lbl">First Name<span>*</span></label>
                        <input type="text" class="all-input" placeholder="Enter First Name">
                    </div>
                    <div class="mt-lg-4 mt-3">
                        <label for="" class="all-lbl">Last Name<span>*</span></label>
                        <input type="text" class="all-input" placeholder="Enter Last Name">
                    </div>
                    <div class="mt-lg-4 mt-3">
                        <label for="" class="all-lbl">Email<span>*</span></label>
                        <input type="email" class="all-input" placeholder="Enter Email">
                    </div>
                    <div class="mt-lg-4 mt-3 position-relative">
                        <label for="" class="all-lbl">Password<span>*</span></label>
                        <input type="password" class="all-input right-icon-input enter-input" placeholder="Enter password">
                        <i class="fa fa-eye-slash enter-icon right-icon"></i>
                    </div>
                    <div class="mt-lg-4 mt-3 position-relative">
                        <label for="" class="all-lbl">Confirm Password<span>*</span></label>
                        <input type="password" class="all-input right-icon-input enter-input-2" placeholder="Confirm password">
                        <i class="fa fa-eye-slash enter-icon-2 right-icon"></i>
                    </div>
                    <button class="orange-btn w-100 mt-lg-5 mt-3">Sign Up</button>
                    <p class="already-account text-center mt-3">Already have an account ?<a href="login.php"> Sign In</a></p>
                </form>

            </div>
        </div>
    </div>

</section>
<!-- SignUp -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
</body>

</html>