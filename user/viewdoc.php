<?php
session_start();
$title = "home";
require "./template/header.php";
include_once("./function/dbconn.php");
$p1 = $_SESSION['user_id'];
include_once("./function/dbfunc.php");
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
            <div class="col-md-6">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-car"></i></div>
                    <div class="ml-4">
                      <span><b> RC-BOOK</b></span><br><br>
                     <?php
                    //  echo $_SESSION['user_id'];
                     $rcresult = "SELECT url FROM document WHERE uid = '$p1' and doc_type = 'rcbook' ";
                     $res4 = mysqli_query($conn, $rcresult);
                     while($res = mysqli_fetch_assoc($res4))
                     {
                      //  echo "<a window.open=\"javascript: href =\"'".$res['rcbook']."' height='100' width='300'\" \">APPROVE</a>";
                        echo "<img src='".$res['url']."' height='200' width='350'/>";
                     }

                     ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-file"></i></div>
                    <div class="ml-4">
                    <?php
                    $rcresult = "SELECT status FROM document WHERE uid = '$p1' and doc_type = 'rcbook' ";
                     $res4 = mysqli_query($conn, $rcresult);
                     while($res = mysqli_fetch_row($res4))
                     {
                      echo"<span><b>".$res[0]."</b></span>";
                     }

                     ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-md-6">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-blue text-white rounded-circle"><i class="fa fa-cloud"></i></div>
                    <div class="ml-4">
                      <span><b> EMMISSSION TEST</b></span><br><br>
                      <?php
                    //  echo $_SESSION['user_id'];
                    $rcresult = "SELECT url FROM document WHERE uid = '$p1' and doc_type = 'puc' ";
                     $res4 = mysqli_query($conn, $rcresult);
                     while($res = mysqli_fetch_assoc($res4))
                     {
                        echo "<img src='".$res['url']."' height='200' width='350'/>";
                     }

                     ?>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="body">
                    <div class="d-flex align-items-center">
                      <div class="icon-in-bg bg-blue text-white rounded-circle"><i class="fa fa-file"></i></div>
                        <div class="ml-4">
                        <?php
                    $rcresult = "SELECT status FROM document WHERE uid = '$p1' and doc_type = 'puc' ";
                     $res4 = mysqli_query($conn, $rcresult);
                     while($res = mysqli_fetch_row($res4))
                     {
                      echo"<span><b>".$res[0]."</b></span>";
                     }

                     ?>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="row clearfix">
            <div class="col-md-6">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-user"></i></div>
                    <div class="ml-4">
                      <span><b>ADHAR CARD</b></span><br><br>
                      <?php
                    //  echo $_SESSION['user_id'];
                    $rcresult = "SELECT url FROM document WHERE uid = '$p1' and doc_type = 'adhar' ";
                     $res4 = mysqli_query($conn, $rcresult);
                     while($res = mysqli_fetch_assoc($res4))
                     {
                        echo "<img src='".$res['url']."' height='200' width='350'/>";
                     }

                     ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                  <div class="body">
                    <div class="d-flex align-items-center">
                      <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-file"></i></div>
                        <div class="ml-4">
                        <?php
                    $rcresult = "SELECT status FROM document WHERE uid = '$p1' and doc_type = 'adhar' ";
                     $res4 = mysqli_query($conn, $rcresult);
                     while($res = mysqli_fetch_row($res4))
                     {
                      echo"<span><b>".$res[0]."</b></span>";
                     }

                     ?>
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

<?php
  require "./template/footer.php";
?>
