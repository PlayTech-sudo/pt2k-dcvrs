
<?php
session_start();
include_once("./function/dbconn.php");
$title = "home";
require "./template/header.php";
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
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-car"></i></div>
                      <div class="ml-4">
                        <span><b>VIEW RC-BOOK</b></span><br><br>
                        <form method="POST" action="approve.php">
                          <?php
                            $p2 = $_GET['id'];
                            $rcresult = "SELECT url FROM document WHERE `uid` = $p2  and doc_type = 'rcbook' ";
                            $res4 = mysqli_query($conn, $rcresult);
                            while($res = mysqli_fetch_assoc($res4))
                              {
                                echo "<img src='user/".$res['url']."' height='200' width='350'/>";
                              }
                          ?>
                        </form>
                      </div>
                      <div class="col-md-2">
                      <a  href="approve.php?id=<?php echo $p2; ?>&doc_type=rcbook&status=Approved"><input type="submit" value="approve" class="btn btn-success btn-round">
                      </a>
                        </div>
                        <div class="col-md-2">
                        <a  href="approve.php?id=<?php echo $p2; ?>&doc_type=rcbook&status=NotApproved"><input type="submit"  value="NOT APPROVE" class="btn btn-danger btn-round">
                      </a>
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-md-12">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-blue text-white rounded-circle"><i class="fa fa-cloud"></i></div>
                    <div class="ml-4">
                      <span><b>VIEW EMMISSSION TEST</b></span><br><br>
                      <form method="POST" action="">
                        <?php
                          $p2 = $_GET['id'];
                          $rcresult = "SELECT url FROM document WHERE `uid` = $p2  and doc_type = 'puc' ";
                          $res4 = mysqli_query($conn, $rcresult);
                            while($res = mysqli_fetch_assoc($res4))
                              {
                                echo "<img src='user/".$res['url']."' height='200' width='350'/>";
                              } 
                        ?>
                     </form>
                    </div>
                    <div class="col-md-2">
                      <a  href="approve.php?id=<?php echo $p2; ?>&doc_type=puc&status=Approved"><input type="submit" value="approve" class="btn btn-success btn-round">
                      </a>
                    </div>
                    <div class="col-md-2">
                      <a  href="approve.php?id=<?php echo $p2; ?>&doc_type=puc&status=NotApproved"><input type="submit"  value="NOT APPROVE" class="btn btn-danger btn-round">
                      </a>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-md-12">
              <div class="card">
                <div class="body">
                  <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-red text-white rounded-circle"><i class="fa fa-user"></i></div>
                    <div class="ml-4">
                      <span><b>VIEW ADHAR CARD</b></span><br><br>
                      <form method="POST" action="approve.php">
                      <?php
                    //  echo $_SESSION['user_id'];
                    $p2 = $_GET['id'];
                    $rcresult = "SELECT url FROM document WHERE `uid` = $p2  and doc_type = 'adhar' ";
                    $res4 = mysqli_query($conn, $rcresult);
                    while($res = mysqli_fetch_assoc($res4))
                    {
                     echo "<img src='user/".$res['url']."' height='200' width='350'/>";
                    }

                     ?>
                     </form>
                     </div>
                      <div class="col-md-2">
                      <a  href="approve.php?id=<?php echo $p2; ?>&doc_type=adhar&status=Approved"><input type="submit" value="approve" class="btn btn-success btn-round">
                      </a>
                        </div>
                        <div class="col-md-2">
                        <a  href="approve.php?id=<?php echo $p2; ?>&doc_type=adhar&status=NotApproved"><input type="submit"  value="NOT APPROVE" class="btn btn-danger btn-round">
                      </a>
                     </div>
                      
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  <!-- <div id="main-content">
    <div class="container-fluid">
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
                              <th style="font-size: 20px;font-weight: bold;">RC BOOK</th>
                              <th style="font-size: 20px;font-weight: bold;">EMISSION TEST</th>
                              <th style="font-size: 20px;font-weight: bold;">ADHAR CARD</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              while($result1 = mysqli_fetch_assoc($sqlimage))
                              {
                                echo "<tr>";
                                echo "<td>".$result1['uid']."</td>";
                                echo "<td>".$result1['rcbook']."</td>";
                                echo "<td>".$result1['puc']."</td>";
                                echo "<td>".$result1['adhar']."</td>";
                                echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to approve this Documents?')\" href=\"viewdoc.php?uid=$result1[uid]\" style='color:green'>DONE</a>
                                 | <a onClick=\"return confirm('Are you sure you want to not approve this Document?')\" href=\"viewdoc.php?uid=$result1[uid]\"  style='color:red'>NOT DONE</a>";
          //echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
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
             <!-- table end -->
          </div>
        </div>
      </div>
      <!-- //dashboard middl -->
    </div>
  </div> -->
</div>

<?php
  require "./template/footer.php";
?>
