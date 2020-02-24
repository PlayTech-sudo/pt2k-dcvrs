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
                    <span>WEL-COME</span><?php echo  $_SESSION['adname'];  ?>
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
                    <!-- <li class="header">Main</li>? -->
                    <li><a href="admindash.php"><i class="icon-home"></i><span>Home</span></a></li>
                    <li><a href="view.php"><i class="icon-speedometer"></i><span>view</span></a></li>
                    <li><a href="#"><i class="fa fa-qrcode"></i><span>QR Code</span></a></li>
                    <li><a href="police.php"><i class="icon-users"></i><span>police</span></a></li>
                    <!-- <li><a href="#"><i class="icon-bar-chart"></i><span>Report</span></a></li> -->
                </ul>
            </nav>
        </div>
    </div>
