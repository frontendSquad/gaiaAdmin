<?php
$title = "Forum";
$pg = 'Forum';
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
                    <h3>Forum</h3>
                    <h2>Forum</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 text-right mt-lg-5 mt-3">
                <button type="button" data-toggle="modal" data-target="#add-post" class="orange-btn d-inline-block">Add A Post</button>
            </div>
            <div class="offset-lg-8 col-lg-4 text-right mt-3">
                <div class="d-flex align-items-center justify-content-between">
                    <label for="">Filter By:</label>
                    <select name="" id="" class="all-input-2 w-75">
                        <option value="">My Post</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-lg-5 mt-3">
                <div class="white-div">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="images/blog-profile.png" alt="" class="blog-profile mr-1">
                            <div>
                                <p class="blog-name">David Goria</p>
                                <p class="blog-time">22 min ago</p>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="transparent-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v m-grey-text"></i>
                            </button>
                            <div class="dropdown-menu report-drp" aria-labelledby="dropdownMenuButton">
                                <button type="button" class="dropdown-item d-flex align-items-center justify-content-start" data-toggle="modal" data-target="#report"><i class="fas fa-info-circle mr-2"></i>Report</button>
                            </div>
                        </div>
                    </div>
                    <p class="blog-des mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia consequatur, voluptates illo perferendis corrupti odio, minima ullam sunt adipisci rerum molestiae rem dolores repellendus iure necessitatibus earum. Voluptatem, consequatur.</p>
                    <a data-fancybox="" href="images/blog-33.png">
                        <img src="images/blog-33.png" alt="" class="img-fluid blog-33 mt-2">
                    </a>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="white-div">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="images/blog-profile.png" alt="" class="blog-profile mr-1">
                            <div>
                                <p class="blog-name">David Goria</p>
                                <p class="blog-time">22 min ago</p>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="transparent-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v m-grey-text"></i>
                            </button>
                            <div class="dropdown-menu report-drp" aria-labelledby="dropdownMenuButton">
                                <button type="button" class="dropdown-item d-flex align-items-center justify-content-start" data-toggle="modal" data-target="#report"><i class="fas fa-info-circle mr-2"></i>Report</button>
                            </div>
                        </div>
                    </div>
                    <p class="blog-des mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia consequatur, voluptates illo perferendis corrupti odio, minima ullam sunt adipisci rerum molestiae rem dolores repellendus iure necessitatibus earum. Voluptatem, consequatur.</p>
                    <div class="row">
                        <div class="col-lg-8">
                            <a href="images/blog-44.png" data-fancybox="gallery">

                                <img src="images/blog-44.png" alt="" class="img-fluid blog-33 mt-2">
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="images/blog-55.png" data-fancybox="gallery">
                                <img src="images/blog-55.png" alt="" class="img-fluid blog-33 mt-2">
                            </a>
                            <a href="images/blog-66.png" data-fancybox="gallery">
                                <img src="images/blog-66.png" alt="" class="img-fluid blog-33 mt-2">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-lg-5 mt-3">
                <div class="white-div">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <img src="images/blog-profile.png" alt="" class="blog-profile mr-1">
                            <div>
                                <p class="blog-name">David Goria</p>
                                <p class="blog-time">22 min ago</p>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="transparent-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-ellipsis-v m-grey-text"></i>
                            </button>
                            <div class="dropdown-menu report-drp" aria-labelledby="dropdownMenuButton">
                                <button data-toggle="modal" data-target="#update-post" class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas fa-edit mr-2"></i>Edit</button>
                                <button class="dropdown-item d-flex align-items-center justify-content-start"><i class="fas fa-trash mr-2"></i>Remove</button>

                            </div>
                        </div>
                    </div>
                    <p class="blog-des mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quia consequatur, voluptates illo perferendis corrupti odio, minima ullam sunt adipisci rerum molestiae rem dolores repellendus iure necessitatibus earum. Voluptatem, consequatur.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade " id="add-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="pb-5 px-3">
                <h4 class="create-post text-center">Create Post</h4>
                <hr>
                <div class="d-flex align-items-center">
                    <img src="images/blog-profile.png" alt="" class="blog-profile mr-1">
                    <div>
                        <p class="blog-name">David Goria</p>
                        <p class="blog-time">22 min ago</p>
                    </div>
                </div>
                <textarea name="" rows="5" class="mind" placeholder="What's on your mind?"></textarea>
                <span class="d-inline-block position-relative">
                    <img src="images/post.png" alt="" class="img-fluid w-100 post-img">
                    <button class="remove-post">&times;</button>
                </span>
                <div class="mt-2 position-relative">
                    <input type="text" class="all-input-2 right-icon-input" placeholder="Add To Your Post">
                    <label for="picture" class="d-block">
                        <img src="images/gallery.png" alt="" class="gallery-icon">
                    </label>
                    <div class="d-none">
                        <input type="file" name="pic" accept=".gif,.jpg,.png,.tif|image/*" id="picture">
                        <input type="submit">
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button class="orange-btn mt-2 px-5" type="button" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#post-added">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<!-- Modal -->
<div class="modal fade " id="post-added" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/check.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Successfully</h3>
                <p class="modal-text">Post Added Successfully!</p>
                <button class="orange-btn mt-2 px-5" data-dismiss="modal" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<!-- Modal -->
<div class="modal fade " id="update-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="pb-5 px-3">
                <h4 class="create-post text-center">Edit Post</h4>
                <hr>
                <div class="d-flex align-items-center">
                    <img src="images/blog-profile.png" alt="" class="blog-profile mr-1">
                    <div>
                        <p class="blog-name">David Goria</p>
                        <p class="blog-time">22 min ago</p>
                    </div>
                </div>
                <p class="post-p my-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam delectus qui aspernatur dolores dicta tempora expedita fugit possimus id doloribus, quibusdam architecto magnam quo neque rerum inventore aut ab eaque.</p>
                <span class="d-inline-block position-relative">
                    <img src="images/post.png" alt="" class="img-fluid w-100 post-img">
                    <button class="remove-post">&times;</button>
                </span>
                <div class="mt-2 position-relative">
                    <input type="text" class="all-input-2 right-icon-input" placeholder="Add To Your Post">
                    <label for="picture" class="d-block">
                        <img src="images/gallery.png" alt="" class="gallery-icon">
                    </label>
                    <div class="d-none">
                        <input type="file" name="pic" accept=".gif,.jpg,.png,.tif|image/*" id="picture">
                        <input type="submit">
                    </div>
                </div>
                <div class="text-center mt-2">
                    <button class="orange-btn mt-2 px-5" type="button" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#post-updated">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<!-- Modal -->
<div class="modal fade " id="post-updated" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/check.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Successfully</h3>
                <p class="modal-text">Post Updated Successfully!</p>
                <button class="orange-btn mt-2 px-5" data-dismiss="modal" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<!-- Modal -->
<div class="modal fade " id="report" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="pb-5 px-3">
                <h4 class="report-post">Report a Post</h4>

                <textarea name="" rows="8" class="all-input-2 mt-2" placeholder="Enter Reason"></textarea>
                <div class="text-center mt-2">
                    <button class="orange-btn mt-2 px-5" type="button" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#report-added">Report</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<!-- Modal -->
<div class="modal fade " id="report-added" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <button type="button" class="close text-right mr-2 mt-2" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            <div class="text-center pb-5 px-lg-5 px-3">
                <img src="images/check.png" alt="" class="img-fluid">
                <h3 class="modal-heading my-3">Successfully</h3>
                <p class="modal-text">This Post has been Reported Successfully!</p>
                <button class="orange-btn mt-2 px-5" data-dismiss="modal" aria-label="Close">Ok</button>
            </div>
        </div>
    </div>
</div>
<!--modal -->
<?php include('footer.php') ?>