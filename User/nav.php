<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn " onclick="closeNav()">&times;</a>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 text-lg-left text-center">
        <a href="index.php" class="<?php if ($pg == "Home") {
                              echo "active";
                            } else {
                              echo "";
                            } ?>">Home</a>
        <a href="about.php" class="<?php if ($pg == "About Us") {
                              echo "active";
                            } else {
                              echo "";
                            } ?>">About Us</a>
        <a href="video.php" class="<?php if ($pg == "Video") {
                              echo "active";
                            } else {
                              echo "";
                            } ?>">Video</a>
        <a href="blogs.php" class="<?php if ($pg == "Blogs") {
                              echo "active";
                            } else {
                              echo "";
                            } ?>">Blogs</a>
        <a href="forum.php" class="<?php if ($pg == "Forum") {
                              echo "active";
                            } else {
                              echo "";
                            } ?>">Forum</a>
        <a href="events.php" class="<?php if ($pg == "Event") {
                              echo "active";
                            } else {
                              echo "";
                            } ?>">Event</a>
        <a href="services.php" class="<?php if ($pg == "Services") {
                              echo "active";
                            } else {
                              echo "";
                            } ?>">Services</a>
      </div>
      <div class="col-lg-8 d-lg-block d-none px-0">
        <img src="images/menu-inner.png" alt="" class="img-fluid w-100">
      </div>
    </div>
  </div>
</div>
<div class="d-flex justify-content-between align-items-center nav-pos">
  <a href="index.php">
    <img src="images/logo.png" alt="" class="img-fluid logo-brand">
  </a>
  <div>
    <a href="profile.php" class="nav-user">
      <i class="far fa-user"></i>
    </a>
    <a href="notification.php" class="nav-noti">
      <i class="far fa-bell"></i>
    </a>
    <span onclick="openNav()" class="top-nav-icon"><img src="images/menu.png" class="d-xl-inline-block d-none"><i class="fas fa-bars d-xl-none d-inline-block"></i>
    </span>

  </div>
</div>