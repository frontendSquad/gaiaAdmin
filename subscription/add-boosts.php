<?php
include('../layout/topBar.php');
?>
<div class="userSection">
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold"><a href="./boosts.php" class="text-dark text-decoration-none"><i class="bi bi-chevron-left"></i>Add Boosts</a></h3>
            </div>
        </div>
    </div>
    <div class="report-section shadow p-5 rounded-15 my-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-7 m-auto my-3 pt-3">
                <form action="#" method="POST">
                    <div class="d-flex mb-3 flex-wrap align-items-center">
                        <div class="labelTitle col-md-6">
                            <p class="mb-0 font-weight-bold">Boost Name :</p>
                        </div>
                        <div class="fieldData col-md-6">
                            <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                                <option selected>Select Boost Name</option>
                                <option value="1">January</option>
                                <option value="2">Febuary</option>
                                <option value="3">March</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mb-3 flex-wrap align-items-center">
                        <div class="labelTitle col-md-6">
                            <p class="mb-0 font-weight-bold">Business Name :</p>
                        </div>
                        <div class="fieldData col-md-6">
                            <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                                <option selected>Select Business Name</option>
                                <option value="1">January</option>
                                <option value="2">Febuary</option>
                                <option value="3">March</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex mb-3 flex-wrap align-items-center">
                        <div class="labelTitle col-md-6">
                            <p class="mb-0 font-weight-bold">No of Clicks :</p>
                        </div>
                        <div class="fieldData col-md-6">
                            <input type="text" placeholder="No of Clicks" name="click" class="form-control pr-5 py-2 h-auto">
                        </div>
                    </div>
                    <div class="d-flex mb-3 flex-wrap align-items-center">
                        <div class="labelTitle col-md-6">
                            <p class="mb-0 font-weight-bold">No of Reaches :</p>
                        </div>
                        <div class="fieldData col-md-6">
                            <input type="text" placeholder="No of Reaches" name="No of Reaches" class="form-control pr-5 py-2 h-auto">
                        </div>
                    </div>
                    <div class="submitBtn text-center pt-5">
                        <input type="submit" value="ADD" class="submitStyle border-0 rounded-15 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php include('../layout/footer.php'); ?>