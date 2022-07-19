<?php
$title = "Event";
$pg = 'Event';
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
                    <h3>Events</h3>
                    <h2>Events</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->
<!-- Videos -->
<section class="position-relative">
    <img src="images/flower-3.png" alt="" class="img-fluid flower-3">
    <div class="container">
        <div class="row">
            <div class="offset-lg-8 col-lg-4 mt-lg-5 mt-3">
                <input type="text" class="all-input-2 right-icon-input w-100" placeholder="Search">
                <button class="search-btn"><i class="fas fa-search"></i></button>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="video-div">
                    <img src="images/event-1.png" alt="" class="img-fluid event-img w-100 mb-2">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <span class="video-date">ABC Address, City Country</span>
                    <h2 class="video-heading my-2">Lorem ipsum dolor</h2>
                    <div class="d-flex justify-content-between align-items-center mt-1">
                        <div>
                            <i class="far fa-calendar video-icon"></i>
                            <span class="video-date">Mm/Dd/Yyyy</span>
                        </div>
                        <div>
                            <i class="far fa-clock video-icon"></i>
                            <span class="video-date">5 min</span>
                        </div>
                    </div>
                    <p class="video-para my-2">Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                    <a href="event-details.php" class="orange-btn d-inline-block">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-5 mt-2">
                <div class="video-div">
                    <img src="images/event-2.png" alt="" class="img-fluid event-img w-100 mb-2">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <span class="video-date">ABC Address, City Country</span>
                    <h2 class="video-heading my-2">Lorem ipsum dolor </h2>
                    <div class="d-flex justify-content-between align-items-center mt-1">
                        <div>
                            <i class="far fa-calendar video-icon"></i>
                            <span class="video-date">Mm/Dd/Yyyy</span>
                        </div>
                        <div>
                            <i class="far fa-clock video-icon"></i>
                            <span class="video-date">5 min</span>
                        </div>
                    </div>
                    <p class="video-para my-2">Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                    <a href="event-details.php" class="orange-btn d-inline-block">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="video-div">
                    <img src="images/event-3.png" alt="" class="img-fluid event-img w-100 mb-2">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <span class="video-date">ABC Address, City Country</span>
                    <h2 class="video-heading my-2">Lorem ipsum dolor</h2>
                    <div class="d-flex justify-content-between align-items-center mt-1">
                        <div>
                            <i class="far fa-calendar video-icon"></i>
                            <span class="video-date">Mm/Dd/Yyyy</span>
                        </div>
                        <div>
                            <i class="far fa-clock video-icon"></i>
                            <span class="video-date">5 min</span>
                        </div>
                    </div>
                    <p class="video-para my-2">Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                    <a href="event-details.php" class="orange-btn d-inline-block">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-5 mt-2">
                <div class="video-div">
                    <img src="images/event-4.png" alt="" class="img-fluid event-img w-100 mb-2">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    <span class="video-date">ABC Address, City Country</span>
                    <h2 class="video-heading my-2">Lorem ipsum dolor </h2>
                    <div class="d-flex justify-content-between align-items-center mt-1">
                        <div>
                            <i class="far fa-calendar video-icon"></i>
                            <span class="video-date">Mm/Dd/Yyyy</span>
                        </div>
                        <div>
                            <i class="far fa-clock video-icon"></i>
                            <span class="video-date">5 min</span>
                        </div>
                    </div>
                    <p class="video-para my-2">Lorem ipsum, dolor sit amet consectetur adipisicing</p>
                    <a href="event-details.php" class="orange-btn d-inline-block">View Details</a>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-6 my-lg-auto mt-2">
                <p class="showing">Showing 9 Out Of 32 Entries</p>
            </div>
            <div class="col-lg-6 mt-2 text-right">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Videos -->

<?php include('footer.php') ?>