<!-- Create post -->
<div class="modal fade" id="addPost" tabindex="-1" aria-labelledby="addPostLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom flex-column">
                <div class="align-self-end closeBtn">
                    <button type="button" class="bi bi-x close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modalTitle">
                    <h3 class="mb-0">Post Something</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="contentModal">
                    <div class="postTitle d-flex flex-wrap align-items-center gap-15">
                        <div class="postImage">
                            <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill">
                        </div>
                        <div class="postmeta">
                            <h6 class="text-dark mb-1 achivpFont">David Goria</h6>
                            <p class="mb-0 text-secondary">22 min ago</p>
                        </div>

                    </div>
                    <div class="commentBox py-3">
                        <textarea name="comment" rows="2" placeholder="What's on your mind?" class="w-100 border-0"></textarea>
                    </div>
                    <div class="d-flex flex-wrap" id="output"></div>
                    <p><input type="file" accept="image/*" name="upload_file[]" id="file" multiple onchange="loadFile(event)" style="display: none;"></p>
                    <label for="file" style="cursor: pointer;" class="d-block">
                        <div class="d-flex justify-content-between align-items-center border rounded-3 px-3">
                            <div class="addpostTitle">
                                <h4 class="h6 mb-0">Add To Your Post</h4>
                            </div>
                            <div class="postIcon">
                                <i class="bi bi-images"></i>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="reset-footer d-flex flex-wrap gap-15 justify-content-center align-items-center">
                    <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill" data-dismiss="modal" data-toggle="modal" data-target="#posdAdded"> Post</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- successfull create post -->
<div class="modal fade" id="posdAdded" tabindex="-1" aria-labelledby="posdAddedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bi bi-x close" data-dismiss="modal" aria-label="Close"></button>
                <div class="contentModal text-center px-md-5">
                    <i class="bi bi-check-circle text-success"></i>
                    <h3>Successully</h3>
                    <p>Post Added Successfully!</p>
                </div>
                <div class="reset-footer text-center">
                    <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- edit post -->
<div class="modal fade" id="editPost" tabindex="-1" aria-labelledby="editPostLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom flex-column">
                <div class="align-self-end closeBtn">
                    <button type="button" class="bi bi-x close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modalTitle">
                    <h3 class="mb-0">Edit Post</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="contentModal">
                    <div class="postTitle d-flex flex-wrap align-items-center gap-15">
                        <div class="postImage">
                            <img src="../images/postimage.png" alt="postImage" class="mw-100 rounded-pill">
                        </div>
                        <div class="postmeta">
                            <h6 class="text-dark mb-1 achivpFont">David Goria</h6>
                            <p class="mb-0 text-secondary">22 min ago</p>
                        </div>

                    </div>
                    <div class="commentBox py-3">
                        <textarea name="comment" rows="2" cols="auto" placeholder="What's on your mind?" class="w-100 border-0">Contrary to popular belief, Lorem Ipsum is not simply random text It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</textarea>
                    </div>
                    <div class="d-flex flex-wrap" id="output">
                        <img src="../images/secondPost.png" alt="">
                    </div>
                    <p><input type="file" accept="image/*" name="upload_file[]" id="file" multiple onchange="loadFile(event)" style="display: none;"></p>
                    <label for="file" style="cursor: pointer;" class="d-block">
                        <div class="d-flex justify-content-between align-items-center border rounded-3 px-3">
                            <div class="addpostTitle">
                                <h4 class="h6 mb-0">Add To Your Post</h4>
                            </div>
                            <div class="postIcon">
                                <i class="bi bi-images"></i>
                            </div>
                        </div>
                    </label>
                </div>
                <div class="reset-footer d-flex flex-wrap gap-15 justify-content-center align-items-center">
                    <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill" data-dismiss="modal" data-toggle="modal" data-target="#posdAdded"> Update</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- successfull updated post -->
<div class="modal fade" id="posdAddedEdit" tabindex="-1" aria-labelledby="posdAddedEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bi bi-x close" data-dismiss="modal" aria-label="Close"></button>
                <div class="contentModal text-center px-md-5">
                    <i class="bi bi-check-circle text-success"></i>
                    <h3>Successully</h3>
                    <p>Post Updated Successfully!</p>
                </div>
                <div class="reset-footer text-center">
                    <button type="button" class="btn bg-theme-primary text-white px-5 rounded-pill" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>