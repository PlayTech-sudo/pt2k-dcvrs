<?php
session_start();
$title = "home";
require "./template/header.php";
// include("ath.php"); 
require "./function/dbconn.php";
//require "./function/dbfunc.php";
//require "./process/operations.php";
$p1 = $_GET['id'];

?>

<div class="row clearfix">
<div class="col-md-12">
<div class="auth-main2 particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">
            <div class="body">
                <div class="login-img">
                <table class="table">
                                    <thead>
                                        <tr>
                                            <th><b>DOCUMENTS NAME</b></th>
                                            <th><b>UPLOAD DATE</b></th>
                                            <th><b>APPROVED DATE</b></th>
                                            <th><b>STATUS</b></th>
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
    <div id="particles-js"></div>
</div>
</div>
<?php
  require "./template/footer.php";
?>
