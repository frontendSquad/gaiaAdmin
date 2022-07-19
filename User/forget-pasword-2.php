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
                    <h2 class="signup-heading">Password Recovery</h2>
                    <p class="signup-p">Lorem Ipsum is simply dummy text of the printing </p>
                </div>
                <form action="forget-pasword-3.php" class="mt-3">
                    <div class="mt-lg-4 mt-3">
                        <label for="" class="all-lbl">Verification Code<span>*</span></label>
                        <input type="email" class="all-input" placeholder="Enter Verification Code">
                    </div>
                    <div class="text-right mt-2">
                        <button class="resend-code"> Resend Code</button>
                    </div>
                    <button class="orange-btn w-100 mt-lg-5 mt-3">Continue</button>
                    <a href="login.php" class="forget-password text-center mt-3 d-block"> Back To Login</a>
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