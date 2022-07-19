<?php
$title = "Blogs Details";
$pg = 'Blogs';
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
                    <h3>Event</h3>
                    <h2>Event Details</h2>
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
                <a href="events.php">
                    <img src="images/back.png" alt="">
                </a>
                <h3 class="main-heading-2 d-inline-block">Event Details</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <img src="images/blogs-img.png" alt="" class="img-fluid blog-2 w-100">
                <div class="d-lg-flex justify-content-between align-items-center mt-1">
                    <div class="mt-3">
                        <i class="far fa-calendar video-icon"></i>
                        <span class="video-date">Mm/Dd/Yyyy</span>

                        <i class="far fa-clock video-icon ml-5"></i>
                        <span class="video-date">5 min</span>
                    </div>
                    <div class="mt-3">
                        <i class="fas fa-map-marker-alt location-icon"></i>
                        <span class="video-date">ABC Address, City Country</span>
                    </div>
                </div>
                <p class="blogs-pp-2 mt-lg-3 mt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit animi asperiores ea pariatur obcaecati assumenda culpa ullam molestiae corporis beatae fuga aspernatur cumque tenetur, error, omnis, eos quo maiores iste!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-lg-5 mt-2">
                <img src="images/blog-2.png" alt="" class="img-fluid w-100 blog-2">
            </div>
            <div class="col-lg-6 my-lg-auto mt-2">
                <h3 class="main-heading-2">Sound Meditation</h3>
                <p class="blogs-pp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora delectus culpa, corporis, nulla id provident, perspiciatis nostrum similique minus numquam eum minima alias nam doloribus quos fugit aut sit cupiditate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora delectus culpa, corporis, nulla id provident, perspiciatis nostrum similique minus numquam eum minima alias nam doloribus quos fugit aut sit cupiditate.</p>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>