<?php
session_start();
include_once("./function/dbconn.php");
include_once("./function/dbfunc.php");
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
          <div class="col-md-12">
            <h1>Dashboard</h1>
            <div class="row clearfix">
              <div class="col-lg-12">
                <div class="card">
                  <div class="header">
                    <h2>status table </h2>
                      <ul class="header-dropdown dropdown">
                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                        <li class="dropdown">
                          <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                          <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                          </ul>
                        </li>
                    </ul>
                  </div>
                    <div class="body">
                      <div class="table-responsive">
                        <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                          <thead>
                            <tr>
                              <th style="font-size: 20px;font-weight: bold;">Sl no</th>
                              <th style="font-size: 20px;font-weight: bold;">Name</th>
                              <th style="font-size: 20px;font-weight: bold;">Vehical Name</th>
                              <th style="font-size: 20px;font-weight: bold;">Vehical No.</th>
                              <th style="font-size: 20px;font-weight: bold;">Vehical Type</th>
                              <th style="font-size: 20px;font-weight: bold;">Status</th>
                              <th style="font-size: 20px;font-weight: bold;">Operations</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              while($result1 = mysqli_fetch_array($result))
                              {
                                echo "<tr>";
                                echo "<td>".$result1['id']."</td>";
                                echo "<td>".$result1['uname']."</td>";
                                echo "<td>".$result1['vname']."</td>";
                                echo "<td>".$result1['vnumber']."</td>";
                                echo "<td>".$result1['vtype']."</td>";
                                echo "<td>".$result1['status']."</td>";
                                // echo "<td>".$result1['']."</td>";
                                // echo "<td>".$result1['']."</td>";
                                echo "<td> <a href=\"viewdoc.php?id=$result1[id]\">VIEW DOCUMENTS</a></td>";
                                echo "</tr>";
                              }
                            ?>
                          </tbody>
                        </table>
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
</div>

<?php
  require "./template/footer.php";
?>
