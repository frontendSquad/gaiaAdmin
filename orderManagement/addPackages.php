<?php
include('../layout/topBar.php');
?>
<div class="addPackages">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="titleBox py-4">
                <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Add Business Plan</h3>
            </div>
        </div>
    </div>
    <div class="row shadow p-5 rounded-15 my-3">
        <div class="col-12">
            <form action="">
                <div class="form-group row align-items-baseline">
                    <label for="packageName" class="col-lg-4 col-form-label font-weight-bold">Package Name:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control border-0 shadow" id="packageName" value="" placeholder="Enter Package Name">
                    </div>
                </div>
                <div class="form-group row align-items-baseline">
                    <label for="customTags" class="col-lg-4 col-form-label font-weight-bold">Number of Custom Tags:</label>
                    <div class="col-lg-8">
                        <input type="number" class="form-control border-0 shadow" id="customTags" value="" placeholder="Enter Number of Custom Tags">
                    </div>
                </div>
                <div class="form-group row align-items-baseline">
                    <label for="smiles" class="col-lg-4 col-form-label font-weight-bold">Number of Smiles:</label>
                    <div class="col-lg-8">
                    <div class="d-flex align-items-baseline">
                        <input type="number" class="form-control border-0 shadow" id="smiles" value="" placeholder="Enter Number of Smiles">
                        <span class="mx-1">&#128515;</span>
                    </div>
                    </div>
                </div>
                <div class="form-group row align-items-baseline">
                    <label for="boots" class="col-lg-4 col-form-label font-weight-bold">Number Of Boots:</label>
                    <div class="col-lg-8">
                        <div class="d-lg-flex align-items-baseline">
                            <input type="number" class="form-control border-0 shadow" id="boots" value="" placeholder="Enter Number Of Boots">
                            <span class="font-weight-bold mx-lg-4">per</span>
                            <input type="number" class="form-control border-0 shadow" id="boots" value="" placeholder="Enter Number Of Boots">
                        </div>
                    </div>
                </div>
                <div class="form-group row align-items-baseline">
                    <label for="amount" class="col-lg-4 col-form-label font-weight-bold">Amount:</label>
                    <div class="col-lg-8">
                        <input type="number" class="form-control border-0 shadow" id="amount" value="" placeholder="Enter Amount">
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn bg-theme-primary text-white py-2 px-5">Add</button>
                </div>
            </form>
        </div>
    </div>

</div>



<?php include('../layout/footer.php'); ?>