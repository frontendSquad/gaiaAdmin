<?php
include('../layout/topBar.php');
?>
<div class="userSection">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="./events.php" class="text-dark text-decoration-none"><i class="bi bi-chevron-left"></i>Events Details</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow p-5 rounded-15 my-4">
        <div class="row justify-content-between align-items-center">
            <div class="d-flex justify-content-center flex-wrap align-items-center">
                <div class="titleHead text-center">
                    <figure class="mb-0">
                        <img src="../images/white-beach.png" alt="" class="mw-100">
                    </figure>
                    <h3 class="h5 font-weight-bold">White Beach</h3>
                    <p class="mb-0">Dubai</p>
                </div>
            </div>
            <div class="col-md-7 m-auto my-3 pt-3">
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">Name :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">Mark</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">User Name :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">Mark01</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">Email :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">mark@email.com</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">Date of Birth :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">02.02.2021</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">Mobile Number :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">232435456</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">No. of Followers :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">212</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">No. of Follows :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">666</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">Registration Date :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">02 . 02 . 2021</p>
                    </div>
                </div>
                <div class="d-flex mb-3 flex-wrap align-items-center">
                    <div class="labelTitle col-md-6">
                        <p class="mb-0 font-weight-600">Current Location :</p>
                    </div>
                    <div class="fieldData col-md-6">
                        <p class="mb-0 text-black-50">FGGGHHJ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tabs -->
    <div class="row packages py-4">
        <div class="col-md-12">
            <ul class="nav nav-tabs d-flex flex-wrap justify-content-center align-items-center gap-15 border-0 text-center" id="myTab" role="tablist">
                <li class="nav-item flex-grow-1 shadow border-0">
                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="false">Attendend</a>
                </li>
                <li class="nav-item flex-grow-1 shadow border-0">
                    <a class="nav-link" id="purchase-tab" data-toggle="tab" href="#purchase" role="tab" aria-controls="purchase" aria-selected="true">Saved</a>
                </li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row py-5">
                        <div class="col-md-6">
                            <div class="attendentContent">
                                <div class="main-card card-item mb-4">
                                    <div class="d-flex align-items-end p-3 flex-wrap">
                                        <div class="dotted-border-shadow w-100">
                                            <h4 class="poppins text-capitalize">Happy Hour</h4>
                                            <p class="cart-title font-14">Pay 1 drink, get 2 Live Dj &amp; unique Sunset Views</p>
                                            <div class="from-date d-inline-block mx-1">
                                                <p class="font-13"><strong>From</strong><span class="d-block">5pm</span> </p>
                                            </div>
                                            <div class="from-date d-inline-block mx-1">
                                                <p class="font-13"><strong>Until</strong><span class="d-block">5pm</span> </p>
                                            </div>
                                        </div>
                                        <div class="dotted-border-shadow w-100">
                                            <h5 class="poppins font-weight-bold text-right">DAILY</h5>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="poppins text-center mb-3">Insights</h2>
                                <p class="text-center m-auto">Only users that collected your Badge during the Event time are taken in consideration in these Insight</p>
                                <div class="d-flex align-items-center justify-content-center border-dotted flex-column py-5 border-top mt-4">
                                    <h2 class="poppins">6 attended</h2>
                                </div>
                                <div class="d-flex align-items-center justify-content-center border-dotted flex-column py-5 border-top">
                                    <h2 class="poppins">100% attendance rate </h2>
                                </div>
                                <div class="d-flex align-items-center justify-content-center border-dotted py-5 border-top gap-15 flex-column">
                                    <div class="progression-bar text-center w-100">
                                        <div class="progress-range mb-4">
                                            <div class="progress-fill"></div>
                                        </div>
                                        <p class="poppins mb-0">3</p>
                                        <p class="poppins text-dark mb-0">Visited for the 1st time during the Event</p>
                                    </div>
                                    <div class="progression-bar text-center w-100">
                                        <div class="progress-range mb-4">
                                            <div class="progress-fill"></div>
                                        </div>
                                        <p class="poppins mb-0">1</p>
                                        <p class="poppins text-dark mb-0">Attended another of your events</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="attendeRight">
                                <div class="shadow round p-3 w-100 d-flex align-items-center justify-content-center flex-column">
                                    <div class="d-flex justify-content-center align-items-end">
                                        <div class="g-men">
                                            <p class="text-dark">47% <span class="text-secondary">Men</span></p>
                                        </div>
                                        <div class="gender text-center">
                                            <h4 class="poppins">GENDER</h4>
                                            <figure>
                                                <img class="mw-100" src="../images/round-chart.png" alt="">
                                            </figure>
                                        </div>
                                        <div class="g-women">
                                            <p class="text-dark">42% <span class="text-secondary">Women</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shadow round p-3 w-100 d-flex align-items-strat justify-content-start flex-column my-4">
                                    <div class="d-flex align-items-center jusitfy-content-between w-100">
                                        <h4 class="poppins w-75 mb-0">AGE RANGE</h4>
                                        <select name="filter" id="" class="site-input bg-white w-25 form-select">
                                            <option value="All">All</option>
                                            <option value="All">All</option>
                                        </select>
                                    </div>
                                    <figure>
                                        <img class="mw-100" src="../images/numb-chart.png" alt="">
                                    </figure>
                                </div>
                                <div class="shadow round p-3 w-100 d-flex align-items-strat justify-content-start flex-column">
                                    <div class="d-flex align-items-center jusitfy-content-between w-100">
                                        <h4 class="poppins w-75 mb-0">NATIONALITIES</h4>
                                        <select name="filter" id="" class="site-input bg-white w-25 form-select">
                                            <option value="All">All</option>
                                            <option value="All">All</option>
                                        </select>
                                    </div>
                                    <figure>
                                        <img class="mw-100" src="../images/lang-chart.png" alt="">
                                    </figure>
                                </div>
                                <div class="shadow round p-3 d-flex align-items-end justify-content-center flex-column mt-5">
                                    <div class="d-flex align-items-center jusitfy-content-between w-100">
                                        <h4 class="poppins w-75 mb-0">RESIDENCY</h4>
                                        <select name="filter" id="" class="site-input bg-white w-25 form-select">
                                            <option value="All">All</option>
                                            <option value="All">All</option>
                                        </select>
                                    </div>
                                    <figure>
                                        <img class="mw-100" src="../images/lang-chart.png" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('../layout/footer.php'); ?>