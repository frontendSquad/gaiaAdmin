<?php
include('../layout/topBar.php');
?>

<div class="ediTprofile">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="#" class="text-dark text-decoration-none"><i class="bi bi-chevron-left"></i>Edit About</a></h3>
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
                    <div class="form-group py-2">
                        <input type="text" name="videoTitle" class="form-control border-0 rounded-pill shadow" placeholder="Enter Title" value="First Video">
                    </div>
                    <div class="form-group py-2">
                        <textarea placeholder="Description" rows="5" class="form-control border-0 rounded-15 shadow">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Aenean Euismod Bibendum Laoreet. Proin Gravida Dolor Sit Amet Lacus Accumsan Et Viverra Justo Commodo.
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="editBtn py-4">
                <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill py-2" data-toggle="modal" data-target="#homeUpdated">Update</button>
            </div>
        </form>
    </div>
</div>

<?php
include('./edit-popup.php');
include('../layout/footer.php');
?>