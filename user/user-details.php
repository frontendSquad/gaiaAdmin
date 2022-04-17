<?php
include('../layout/topBar.php');
?>
<div class="userSection">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox border-bottom py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="./user.php" class="text-dark text-decoration-none"><i class="bi bi-chevron-left"></i>User Details</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-2 rounded-15 my-4">
        <div class="row mb-4">
            <div class="col-md-2">
                <div class="postImage">
                    <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill" width="100">
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">First Name</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">Mark</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">Last Name</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">Jhon</p>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3">
                <p class="font-weight-600 text-dark mb-0">Email</p>
            </div>
            <div class="col-md-6">
                <p class="mb-0 text-secondary">mark@yahoo.com</p>
            </div>
        </div>
    </div>
</div>
<!-- subscription  box -->
<div class="notification-section shadow rounded-15 p-3 pt-5 my-4">
    <div class="row justify-content-between">
        <div class="col-md-12 mb-3">
            <h3 class="achivpFont">Subscription</h3>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-md-6">
            <div class="selectBox mb-4">
                <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                    <p class="mb-0 achivpFont">Show:</p>
                    <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                        <option selected="">Record Per Page</option>
                        <option value="1">10</option>
                        <option value="2">20</option>
                        <option value="3">30</option>
                    </select>
                    <p class="mb-0">Entries</p>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap mb-3">
                <div class="dateBox d-flex align-items-center gap-15 flex-wrap flex-md-nowrap">
                    <p class="mb-0 achivpFont flex-shrink-0">Sort By Date:</p>
                    <div class="flex-grow-1">
                        <div class="form-group">
                            <label class="mb-0">From</label>
                            <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker7">
                            </div>
                        </div>
                    </div>
                    -
                    <div class="flex-grow-1">
                        <div class="form-group">
                            <label for="">To</label>
                            <div class="input-group date" id="datetimepicker8" data-target-input="nearest">
                                <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center flex-wrap flex-md-nowrap selectBox gap-15 my-4">
                <div class="title flex-shrink-0">
                    <p class="achivpFont mb-0">Filter by Subscription Package:</p>
                </div>
                <div class="filterField flex-grow-1">
                    <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                        <option>Select Status</option>
                        <option value="active">Monthly</option>
                        <option value="inactive">Yearly</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex align-items-center flex-wrap selectBox gap-15 my-4 justify-content-md-end">
                <div class="title flex-shrink-0">
                    <p class="achivpFont mb-0">Filter By Status:</p>
                </div>
                <div class="filterField">
                    <select class="form-select form-select-sm pr-5 py-2 w-auto" aria-label=".form-select-sm example">
                        <option>Select Status</option>
                        <option value="active">Ongoing</option>
                        <option value="inactive">Completed</option>
                    </select>
                </div>
            </div>
            <div class="userSeach input-group w-auto">
                <input class="form-control w-50 py-2 border-right-0 border" type="search" placeholder="Search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary border-left-0 border bg-white" type="button">
                        <i class="bi bi-search"></i>
                    </button>
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-5 table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="table-site-headings">S.No.</th>
                        <th class="table-site-headings">Package</th>
                        <th class="table-site-headings">Start Date</th>
                        <th class="table-site-headings">End Date</th>
                        <th class="table-site-headings">Status</th>
                        <th class="table-site-headings">Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Yearly</td>
                        <td>02.02.2021</td>
                        <td>02.02.2022</td>
                        <td>Active</td>
                        <td>$123</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Yearly</td>
                        <td>02.02.2021</td>
                        <td>02.02.2022</td>
                        <td>Active</td>
                        <td>$123</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Yearly</td>
                        <td>02.02.2021</td>
                        <td>02.02.2022</td>
                        <td>Active</td>
                        <td>$123</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Yearly</td>
                        <td>02.02.2021</td>
                        <td>02.02.2022</td>
                        <td>Active</td>
                        <td>$123</td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Yearly</td>
                        <td>02.02.2021</td>
                        <td>02.02.2022</td>
                        <td>Active</td>
                        <td>$123</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between flex-wrap align-items-center">
            <p class="mb-0">Showing 10 of 50 Entries</p>
            <div class="viewAll d-flex justify-content-end flex-wrap py-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- decline and approve btn -->

<div class="d-flex flex-wrap align-items-center gap-15 py-4">
    <a href="#" class="btn bg-theme-primary text-white px-5 rounded-pill border-color-primary">Decline</a>
    <a href="#" class="btn bg-transparent theme-primary-text border-color-primary px-5 rounded-pill border">Approve and Delete</a>
</div>


<?php include('../layout/footer.php'); ?>