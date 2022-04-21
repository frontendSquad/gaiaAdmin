<?php
include('../layout/topBar.php');
?>
<div class="packages">
    <div class="row align-items-center justify-content-between">
        <div class="col-md-4">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold">User</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="titleBox py-4">
                <div class="addPackages text-md-right">
                    <a href="addPackages.php" class="btn rounded-pill px-4">Add User</a>
                </div>
            </div>
        </div>
    </div>
    <div class="notification-section shadow px-5 py-2 rounded-15 my-4">
        <div class="row">
            <div class="col-md-12 table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th class="table-site-headings">S.No.</th>
                            <th class="table-site-headings">First Name</th>
                            <th class="table-site-headings">Last Name</th>
                            <th class="table-site-headings">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Product Name</td>
                            <td>£70</td>
                            <td>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item mb-1"><i class="bi bi-pencil pr-2"></i>Edit</button>
                                    </div>
                                </div>
                            </td>
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
</div>



<?php include('../layout/footer.php'); ?>