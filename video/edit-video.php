<?php
include('../layout/topBar.php');
?>

<div class="ediTprofile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="#" class="text-dark text-decoration-none">Add New Video</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow px-5 py-4 rounded-15 my-4">
        <form action="">
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group py-2">
                        <div class="d-flex">
                            <div class="videoContainer">
                                <div class="videoTitle">
                                    <p class="mb-0">Video:</p>
                                </div>
                                <div class="videoBox d-flex align-items-end gap-15">
                                    <div class="videoPlay d-flex flex-wrap gap-15">
                                        <video src="../images/dummyVideo.mp4" width="200" height="180" controls></video>
                                    </div>
                                    <div class="iconBox">
                                        <label for="uploadVideo" class="mb-0">
                                            <h5 class="mb-0"><i class="bi bi-upload"></i></h5>
                                            <input type="file" id="uploadVideo" class="d-none">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Video Title <span class="text-danger">*</span>:
                        </label>
                        <input type="text" name="videoTitle" class="form-control border-0 rounded-pill shadow" placeholder="Enter Title" value="First Video">
                    </div>
                    <div class="form-group py-2">
                        <label for="lastName">
                            Description:
                        </label>
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aenean Euismod Bibendum Laoreet. Proin Gravida Dolor Sit Amet Lacus Accumsan Et Viverra Justo Commodo.
                        </textarea>
                    </div>
                    <div class="form-group py-2">
                        <div class="d-flex">
                            <div class="videoContainer">
                                <div class="videoTitle">
                                    <p class="mb-0">Thumbnail <span class="text-danger">*</span> :</p>
                                </div>
                                <div class="videoBox d-flex align-items-end gap-15">
                                    <div class="videoPlay d-flex flex-wrap gap-15">
                                        <div class="imageuploader position-relative">
                                            <img src="../images/uploadimage.png" width="200" height="200">
                                            <button type="button" class="border-0 bg-transparent"><i class="bi bi-x h3"></i></button>
                                        </div>
                                    </div>
                                    <div class="iconBox">
                                        <label for="uploadimages" class="mb-0">
                                            <h5 class="mb-0"><i class="bi bi-upload"></i></h5>
                                            <input type="file" id="uploadimages" class="d-none">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="editBtn py-4">
                <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2" data-toggle="modal" data-target="#videoUpdated">Update</button>
            </div>
        </form>
    </div>
</div>

<?php
include('./video-popup.php');
include('../layout/footer.php');
?>