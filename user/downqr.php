<?php
session_start();
$title = "home";
require "./template/header.php";
//require "./function/dbconn.php";
//require "./function/dbfunc.php";
//require "./process/operations.php";
$p1 = $_SESSION['user_id'];
$p2 = $_SESSION['uname'];

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
  ?>
  <div id="main-content">
    <div class="container-fluid" style="min-height: calc(100vh - 150px);">
      <div class="block-header">
        <div class="row clearfix">
          <div class="col-md-6">
            <div class="card">
              <div class="body">
                <div class="d-flex align-items-center">
                  <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-qrcode"></i></div>
                  <div class="ml-4">
                    <span><b>DOWNLOAD YOUR QRCODE</b></span><br>
                   <a href="./pdf/qrpdf.php?id=<?php  echo $p1;?>&uname=<?php echo $p2; ?>"> <input type="button" value="downlad" id="dropify-event"></a>
                  </div>
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

