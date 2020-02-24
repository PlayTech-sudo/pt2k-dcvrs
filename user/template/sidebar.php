<?php
// session_start();
?>
<div id="left-sidebar" class="sidebar">
        <div class="navbar-brand">
            <a href="index.html"><img src="./assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span><b>RTO</b></span></a>
            <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
        </div>
        <div class="sidebar-scroll">
            <div class="user-account">
                <div class="user_div">
                    <img src="./assets/images/user.png" class="user-photo" alt="User Profile Picture">
                </div>
                <div class="dropdown">
                    <span>WEL-COME</span><?php echo  $_SESSION['uname'];  ?>
                    <!-- <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"> -->
                   <!--  <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                        <li><a href="profile.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul> -->
                </div>
            </div>
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul id="main-menu" class="metismenu">
                    <!-- <li class="header">Main</li> -->
                    <li><a href="dashboard.php"><i class="icon-home"></i><span>Home</span></a></li>
                    <li><a href="adddoc.php"><i class="fa fa-cloud-upload"></i><span>Add Your Documents</span></a></li>
                    <li><a href="viewdoc.php"><i class="fa fa-file"></i><span>View Your Documents</span></a></li>
                    <li><a href="downqr.php"><i class="fa fa-qrcode"></i><span>Download QR Code</span></a></li>
                    <!-- <li><a href=""><i class="icon-users"></i><span>police</span></a></li> -->
                    <!-- <li><a href="policy.php"><i class="icon-bar-chart"></i><span>policy</span></a></li> -->
                </ul>
            </nav>
        </div>
    </div>
