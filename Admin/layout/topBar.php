<?php
include('header.php');
?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <?php include('sidebar.php'); ?>

    <!-- Page content wrapper-->
    <div id="page-content-wrapper" class="flex-shrink-0">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg bg-theme-secondary border-bottom-radius">
            <div class="container-fluid">
                <button class="navbar-toggler text-white" id="sidebarToggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list"></i></button>
                <div class="input-group col-xl-4 col-md-6 col-9 headr-search-btn">
                    <input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary border-left-0 border bg-white" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                </div>
                <div class="collapse navbar-collapse col-xl-3 col-md-5 col-9 profile-dropdown" id="navbarSupportedContent">
                    <div class="d-flex align-items-center flex-wrap justify-content-end gap-15">
                        <div class="avatarImage d-flex align-items-center gap-15">
                            <a class="text-dark notification position-relative" id="notification"><i class="bi bi-bell-fill"></i><span class="count">3</span></a>
                            <img src="../images/user-icon.png" alt="User Avatar" class="flex-shrink-0">
                        </div>
                        <div class="avatarInfo">
                            <a id="navbarDropdown">
                                <h3 class="text-white achivpFont h5 mb-0 mt-2">Sammy Aiden<i class="bi bi-chevron-down"></i></h3>
                            </a>
                            <p class="mb-0 text-white">Admin</p>
                            <div class="dropdown-menu p-3">
                                <p class="mb-2"><a href="#" class="text-dark achivpFont text-decoration-none"><i class="bi bi-person pr-2"></i>Profile</a></p>
                                <p class="mb-2"><a href="#" class="text-dark achivpFont text-decoration-none"><i class="bi bi-people pr-2"></i>Community</a></p>
                                <p class="mb-2"><button data-toggle="modal" data-target="#logiutPopup" class="text-dark achivpFont bg-transparent border-0 p-0"><i class="bi bi-box-arrow-left pr-2"></i>Logout</button></p>
                            </div>
                            <!-- notification -->

                            <div class="dropdown-notifcation p-3">
                                <h3 class="mb-0 achivpFont py-2 border-bottom font-weight-bold h5">Notifications</h3>
                                <div class="d-flex gap-15 py-3">
                                    <div class="notificationIcon flex-shrink-0">
                                        <i class="bi bi-bell-fill"></i>
                                    </div>
                                    <div class="notificationContent">
                                        <p class="text-secondary achivpFont">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
                                        </p>
                                        <p class="theme-primary-text mb-0"><span class="pr-3">May 25, 2021</span><span>10:30 PM</span></p>
                                    </div>
                                </div>
                                <div class="d-flex gap-15 py-3">
                                    <div class="notificationIcon flex-shrink-0">
                                        <i class="bi bi-bell-fill"></i>
                                    </div>
                                    <div class="notificationContent">
                                        <p class="text-secondary achivpFont">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
                                        </p>
                                        <p class="theme-primary-text mb-0"><span class="pr-3">May 25, 2021</span><span>10:30 PM</span></p>
                                    </div>
                                </div>
                                <div class="viewAll text-center py-3">
                                    <a href="#" class="text-dark font-weight-bold">VIEW ALL NOTIFICATIONS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <!-- Page content-->