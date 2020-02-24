<?php
session_start();
$title = "home";
require "./function/dbconn.php";
include_once("./function/dbfunc.php");
require "./template/header.php";
$p1 = $_SESSION['user_id'];
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
        <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <!-- <h2>#</h2>                             -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>DOCUMENTS NAME</th>
                                            <th>UPLOAD DATE</th>
                                            <th>APPROVED DATE</th>
                                            <th>STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                   
                                          <?php
                                          $rc5 = "SELECT `upload_date`, `approved_date`, `status` FROM document WHERE `uid`='".$p1."' AND `doc_type`='rcbook' ";
                                          $rc4 = mysqli_query($conn, $rc5);
                                          while($result1 = mysqli_fetch_array($rc4))
                                          {
                                            ?>
                                         <tr><th>RCBOOK</th> <?php echo"<td>".$result1['upload_date']."</>";echo "<td>".$result1['approved_date']."</td>";echo "<td>".$result1['status']."</td>";?><tr>
                                          <?php
                                          }
                                          ?>

                                          <?php
                                          $pu5 = "SELECT `upload_date`, `approved_date`, `status` FROM document WHERE `uid`='".$p1."' AND `doc_type`='puc' ";
                                          $pu4 = mysqli_query($conn, $pu5);
                                          while($result1 = mysqli_fetch_array($pu4))
                                          {
                                            ?>
                                         <tr><th>EMMISSION TEST</th> <?php echo"<td>".$result1['upload_date']."</>";echo "<td>".$result1['approved_date']."</td>";echo "<td>".$result1['status']."</td>";?><tr>                                         
                                         <!-- <th>AADHAR CARD</th><?php //echo $result1['status'];?></td></tr> -->
                                          <?php
                                          }
                                          ?>
                                          
                                          <?php
                                          $ad5 = "SELECT `upload_date`, `approved_date`, `status` FROM document WHERE `uid`='".$p1."' AND `doc_type`='adhar' ";
                                          $ad4 = mysqli_query($conn, $ad5);
                                          while($result1 = mysqli_fetch_array($ad4))
                                          {
                                            ?>
                                         <tr><th>ADHAR</th> <?php echo"<td>".$result1['upload_date']."</>";echo "<td>".$result1['approved_date']."</td>";echo "<td>".$result1['status']."</td>";?><tr>                                         
                                         <!-- <th>AADHAR CARD</th><?php //echo $result1['status'];?></td></tr> -->
                                          <?php
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
      <!-- //dashboard middl -->
  </div>
</div>

<?php
  require "./template/footer.php";
?>
