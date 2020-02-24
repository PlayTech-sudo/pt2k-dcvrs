<?php
session_start();
$title = "home";
require "./template/header.php";
//require "./function/dbconn.php";
//require "./function/dbfunc.php";
//require "./process/operations.php";
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
            <div class="col-md-7">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-car"></i></div>
                    <div class="ml-4">
                      <span><b>ADD YOUR RC-BOOK</b></span><br><br>
                      <form method="POST" action="doc_save.php" enctype="multipart/form-data">
                        <input type="file" name="files[]">
                        <input type="submit" value="submit"  name="rcsubmit" class="btn btn-success btn-round">
                      </form>
                      <!-- <form method="POST" action="doc_save.php" enctype="multipart/form-data">
                        <input type="file" name="files[]">
                        <input type="submit" value="submit"  name="rcsubmit" class="btn btn-success btn-round">
                      </form> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-md-7">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-blue text-white rounded-circle"><i class="fa fa-cloud"></i></div>
                    <div class="ml-4">
                      <span><b>ADD EMMISSSION TEST</b></span><br><br>
                      <form method="POST" action="doc_save.php" enctype="multipart/form-data">
                        <input type="file" name="files[]">
                        <input type="submit" value="submit"  name="pucsubmit" class="btn btn-success btn-round">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="row clearfix">
            <div class="col-md-7">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-user"></i></div>
                    <div class="ml-4">
                      <span><b>ADD ADHAR CARD</b></span><br><br>
                      <form method="POST" action="doc_save.php" enctype="multipart/form-data">
                        <input type="file" name="files[]">
                        <input type="submit" value="submit"  name="adharsubmit" class="btn btn-success btn-round">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-md-7">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-check"></i></div>
                    <div class="ml-4">
                      <span><b>Adding all the Documents Please click here</b></span><br><br>
                      <a onclick="alert('your all documents is added successfully wait for verification!!')" href="dashboard.php" class="btn btn-primary btn-round"><b>Click me</b></a>
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
