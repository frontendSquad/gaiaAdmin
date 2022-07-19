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
                <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-services-tab" data-toggle="pill" href="#pills-services" role="tab" aria-controls="pills-services" aria-selected="true">Services Log</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-subscription-tab" data-toggle="pill" href="#pills-subscription" role="tab" aria-controls="pills-subscription" aria-selected="false">Subscription Log</a>
                    </li>
                </ul>
            </div>
            <div class="col-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-services" role="tabpanel" aria-labelledby="pills-services-tab">
                        <div class="row">
                            <div class="col-12 mt-lg-5 mt-3">
                                <h3 class="main-heading">My Services Logs</h3>
                                <div class="d-sm-flex align-items-center mt-lg-5 mt-3">
                                    <label for="" class="sorting-lbl d-sm-inline-block d-block">Sort by Date:</label>
                                    <span class="mx-sm-2 mt-sm-0 mt-3 d-sm-inline-block d-block">
                                        <label for="" class="sorting-lbl ml-2 mb-2">From</label>
                                        <input type="date" class="all-input-2">
                                    </span>
                                    <span class="mt-sm-0 mt-3 d-sm-inline-block d-block">
                                        <label for="" class="sorting-lbl ml-2 mb-2">To</label>
                                        <input type="date" class="all-input-2">
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mt-lg-5 mt-3">
                                    <label for="" class="sorting-lbl d-sm-inline-block d-block">Show</label>
                                    <span class="mx-1">
                                        <input type="number" class="all-input-2 sorting-number">
                                    </span>
                                    <label for="" class="sorting-lbl">Entries</label>
                                </div>
                                <div class="table-responsive mt-lg-5 mt-3 px-2">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Service Title</th>
                                                <th>Date</th>
                                                <th>Amount Paid</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Abc Title</td>
                                                <td>MM/dddd/yyyy</td>
                                                <td>$123</td>
                                                <td>Upcoming</td>
                                                <td>
                                                    <div class="btn-group custom-dropdown ml-2 mb-1">
                                                        <button type="button" class="transparent-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu text-left custom-dropdown">
                                                            <a href="service-detail-2.php" class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas mr-1 fa-eye"></i>View</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abc Title</td>
                                                <td>MM/dddd/yyyy</td>
                                                <td>$123</td>
                                                <td>Upcoming</td>
                                                <td>
                                                    <div class="btn-group custom-dropdown ml-2 mb-1">
                                                        <button type="button" class="transparent-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu text-left custom-dropdown">
                                                            <a href="service-detail-2.php" class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas mr-1 fa-eye"></i>View</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-subscription" role="tabpanel" aria-labelledby="pills-subscription-tab">
                        <div class="row">
                            <div class="col-12 mt-lg-5 mt-3">
                                <h3 class="main-heading">Payment Logs</h3>
                                <div class="d-sm-flex align-items-center mt-lg-5 mt-3">
                                    <label for="" class="sorting-lbl d-sm-inline-block d-block">Sort by Date:</label>
                                    <span class="mx-sm-2 mt-sm-0 mt-3 d-sm-inline-block d-block">
                                        <label for="" class="sorting-lbl ml-2 mb-2">From</label>
                                        <input type="date" class="all-input-2">
                                    </span>
                                    <span class="mt-sm-0 mt-3 d-sm-inline-block d-block">
                                        <label for="" class="sorting-lbl ml-2 mb-2">To</label>
                                        <input type="date" class="all-input-2">
                                    </span>
                                </div>
                                <div class="d-flex align-items-center mt-lg-5 mt-3">
                                    <label for="" class="sorting-lbl d-sm-inline-block d-block">Show</label>
                                    <span class="mx-1">
                                        <input type="number" class="all-input-2 sorting-number">
                                    </span>
                                    <label for="" class="sorting-lbl">Entries</label>
                                </div>
                                <div class="table-responsive mt-lg-5 mt-3 px-2">
                                    <table class="table user-table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Program</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Cost</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Abc Program</td>
                                                <td>MM/dddd/yyyy</td>
                                                <td>Upcoming</td>
                                                <td>$123</td>
                                                <td>
                                                    <div class="btn-group custom-dropdown ml-2 mb-1">
                                                        <button type="button" class="transparent-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu text-left custom-dropdown">
                                                            <a href="payment-detail.php" class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas mr-1 fa-eye"></i>View</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>01</td>
                                                <td>Abc Program</td>
                                                <td>MM/dddd/yyyy</td>
                                                <td>Upcoming</td>
                                                <td>$123</td>
                                                <td>
                                                    <div class="btn-group custom-dropdown ml-2 mb-1">
                                                        <button type="button" class="transparent-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-v"></i></button>
                                                        <div class="dropdown-menu text-left custom-dropdown">
                                                            <a href="payment-detail.php" class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas mr-1 fa-eye"></i>View</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php') ?>