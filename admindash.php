<?php
session_start();
$title = "home";
require "./template/header.php";

// require "./function/dbconn.php";
//require "./function/dbfunc.php";
//require "./process/operations.php";
include_once("./function/dbfunc.php");
?>
<body class="theme-cyan font-montserrat light_version">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">
  <?php
  require "./template/nav.php";
  require "./template/sidebar.php";
  // echo $_SESSION['adname'];
  ?>
  <div id="main-content">
    <div class="container-fluid" style="min-height: calc(100vh - 150px);">
      <div class="block-header">
        <div class="row clearfix">
            <div class="col-md-4">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i></div>
                    <div class="ml-4">
                      <span>TOTAL REGISTER:</span>
                      <?php echo"<b>".$tr."</b>" ?>
                      <!-- <h4 class="mb-0 font-weight-medium">$7,805</h4> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-green text-white rounded-circle"><i class="fa fa-check"></i></div>
                    <div class="ml-4">
                      <span>TOTAL APPROVED</span>
                      <?php echo $ap1; ?>
                      <!-- <h4 class="mb-0 font-weight-medium">$7,805</h4> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-times"></i></div>
                    <div class="ml-4">
                      <span>TOTAL NOT APPROVED</span>
                      <?php echo "0" ?>
                      <!-- <h4 class="mb-0 font-weight-medium">$7,805</h4> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-4">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-blue text-white rounded-circle"><i class="fa fa-spinner"></i></div>
                    <div class="ml-4">
                      <span>TOTAL PENDING</span>
                      <?php echo "0" ?>
                      <!-- <h4 class="mb-0 font-weight-medium">$7,805</h4> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-file"></i></div>
                    <div class="ml-4">
                      <span>TOTAL UPLOAD:</span>
                      <?php echo "<b>".$docc."</b>"; ?>
                      <!-- <h4 class="mb-0 font-weight-medium">$7,805</h4> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-qrcode"></i></div>
                    <div class="ml-4">
                      <span>TOTAL GENERATED</span>
                      <?php echo "0" ?>
                      <!-- <h4 class="mb-0 font-weight-medium">$7,805</h4> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
      <!-- //dashboard middl -->
  </div>
</div>

<?php
  require "./template/footer.php";
?>
