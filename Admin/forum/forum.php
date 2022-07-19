<?php
include('../layout/topBar.php');
?>
<div class="row justify-content-between py-4">
    <div class="col-md-4">
        <div class="titleBox">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Forum Page</h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="btnBox d-flex justify-content-end">
            <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill" data-toggle="modal" data-target="#addPost">Add Post</button>
        </div>
        <div class=" d-flex align-items-center gap-15 my-3">
                <div class="title flex-shrink-0">
                    <p class="achivpFont mb-0">Filter By:</p>
                </div>
                <div class="filterField flex-grow-1">
                    <select class="form-select form-select-sm pr-5 py-2 w-100" aria-label=".form-select-sm example">
                        <option>Select Status</option>
                        <option value="active">Ongoing</option>
                        <option value="inactive">Completed</option>
                    </select>
                </div>
        </div>
        <div class="reportLog d-flex justify-content-end flex-wrap">
            <a href="#">View Report Logs</a>
        </div>
    </div>
</div>
<!-- post boxs -->
<div class="post-box shadow rounded-15 my-4 p-3">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-4">
            <div class="postTitle d-flex flex-wrap align-items-center gap-15">
                <div class="postImage">
                    <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill">
                </div>
                <div class="postmeta">
                    <h6 class="text-dark mb-1 achivpFont">David Goria</h6>
                    <p class="mb-0 text-secondary">22 min ago</p>
                </div>

            </div>
        </div>
        <div class="col-md-1">
            <div class="btn-group justify-content-end d-flex flex-column align-items-end">
                <button type="button" class="btn border-0" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right rounded-pill">
                    <button class="dropdown-item" type="button"><i class="bi bi-exclamation-octagon pr-2"></i>Report</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="postContent py-3">
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aenean Euismod Bibendum Laoreet. Proin Gravida Dolor Sit Amet Lacus Accumsan Et Viverra Justo Commodo. Proin Sodales Pulvinar Sic Tempor.
                </p>
            </div>
            <div class="postFeaturedImge">
                <img src="../images/postImge.png" alt="Featured Image" class="mw-100">
            </div>
        </div>
    </div>
</div>
<!-- post boxs -->
<div class="post-box shadow rounded-15 my-4 p-3">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-4">
            <div class="postTitle d-flex flex-wrap align-items-center gap-15">
                <div class="postImage">
                    <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill">
                </div>
                <div class="postmeta">
                    <h6 class="text-dark mb-1 achivpFont">David Goria</h6>
                    <p class="mb-0 text-secondary">22 min ago</p>
                </div>

            </div>
        </div>
        <div class="col-md-1">
            <div class="btn-group justify-content-end d-flex flex-column align-items-end">
                <button type="button" class="btn border-0" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right rounded-pill">
                    <button class="dropdown-item" type="button"><i class="bi bi-exclamation-octagon pr-2"></i>Report</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="postContent py-3">
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aenean Euismod Bibendum Laoreet. Proin Gravida Dolor Sit Amet Lacus Accumsan Et Viverra Justo Commodo. Proin Sodales Pulvinar Sic Tempor.
                </p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="postFeaturedImge h-100">
                <img src="../images/postImge.png" alt="Featured Image" class="mw-100 h-100">
            </div>
        </div>
        <div class="col-md-4">
            <div class="postFeaturedImge">
                <img src="../images/secondPost.png" alt="Featured Image" class="mw-100 mb-4">
                <img src="../images/secondPost.png" alt="Featured Image" class="mw-100">
            </div>
        </div>
    </div>
</div>
<!-- without image -->
<div class="post-box shadow rounded-15 my-4 p-3">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-4">
            <div class="postTitle d-flex flex-wrap align-items-center gap-15">
                <div class="postImage">
                    <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill">
                </div>
                <div class="postmeta">
                    <h6 class="text-dark mb-1 achivpFont">David Goria</h6>
                    <p class="mb-0 text-secondary">22 min ago</p>
                </div>

            </div>
        </div>
        <div class="col-md-1">
            <div class="btn-group justify-content-end d-flex flex-column align-items-end">
                <button type="button" class="btn border-0" data-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-three-dots-vertical"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#editPost"><i class="bi bi-pencil pr-2"></i>Edit</button>
                    <button class="dropdown-item" type="button"><i class="bi bi-trash2 pr-2"></i>Remove</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="postContent py-3">
                <p>Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aenean Euismod Bibendum Laoreet. Proin Gravida Dolor Sit Amet Lacus Accumsan Et Viverra Justo Commodo. Proin Sodales Pulvinar Sic Tempor. Sociis Natoque Penatibus Et Magnis Dis Parturient Montes Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aenean Euismod Bibendum Laoreet. Proin Gravida Dolor Sit Amet Lacus Accumsan Et Viverra Justo Commodo. Proin Sodales Pulvinar Sic Tempor. Sociis Natoque Penatibus Et Magnis Dis Parturient Montes
                </p>
            </div>
        </div>
    </div>
</div>


<?php
include('./postModal.php');
include('../layout/footer.php');
?>