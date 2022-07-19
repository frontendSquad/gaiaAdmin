<?php
$title = "Login";
$pg = 'Login';
include('header.php');
?>
<!-- SignUp -->
<section class="login-back">
    <div class="container-fluid">
        <div class="offset-xl-1 col-xl-5 col-lg-6 px-0">
            <div class="signup-div">
                <div class="text-center">
                    <img src="images/logo.png" alt="" class="img-fluid">
                    <h2 class="signup-heading">Login</h2>
                    <p class="signup-p">If you have an account, sign in with your email address.</p>
                </div>
                <form action="" class="mt-3">
                    <div class="mt-lg-4 mt-3">
                        <label for="" class="all-lbl">Name<span>*</span></label>
                        <input type="text" class="all-input" placeholder="Enter First Name">
                    </div>
                    <div class="mt-lg-4 mt-3 position-relative">
                        <label for="" class="all-lbl">Password<span>*</span></label>
                        <input type="password" class="all-input right-icon-input enter-input" placeholder="Enter password">
                        <i class="fa fa-eye-slash enter-icon right-icon"></i>
                    </div>
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <p class="checkbx mt-2">
                            <input type="checkbox" id="c1" name="cb">
                            <label for="c1">Remember Me</label>
                        </p>
                        <a href="forget-password.php" class="forget-password mt-2 d-inline-block">Forgot Password</a>

                    </div>
                    <button class="orange-btn w-100 mt-lg-5 mt-3" type="button" data-toggle="modal" data-target="#deleteOrder">Login</button>
                    <p class="already-account text-center mt-3">Don't have an account ? <a href="signup.php"> Sign Up</a></p>
                </form>

            </div>
        </div>
    </div>

</section>
<!-- SignUp -->
<!-- Modal -->
<div class="modal fade " id="deleteOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/cancel.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Alert</h3>
                <p class="modal-text">Your profile has been inactivated.Please Contact Admin for more details</p>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
</body>

</html>