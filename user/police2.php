<?php
session_start();
$title = "home";
require "./template/header.php";
// include("ath.php"); 
require "./function/dbconn.php";
//require "./function/dbfunc.php";
//require "./process/operations.php";
?>

<div class="row clearfix">
<div class="col-md-12">
<div class="auth-main2 particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">
            <div class="body">
                <div class="login-img">
                <?php
                        $pp = $_SESSION['pid'];
                        $result= mysqli_query($conn, "SELECT `pname`, `parea` FROM `police` where pid = $pp" );
                        while($result1 = mysqli_fetch_array($result))
                        {
                ?>
                       <p class="lead"><b>Police Name:&nbsp;&nbsp;&nbsp;<?php echo $result1['pname']?><br>
                        Area:&nbsp;&nbsp;&nbsp;<?php echo $result1['parea']?></b></p>
                        <?php
                        }
                        ?>
                </div>
                <form class="form-auth-small" action="police_view.php" method="POST">
                    <div class="mb-3">
                        <p class="lead">Enter User Id</p>
                    </div>
                    <div class="form-group">
                        <!-- <label for="signin-email" class="control-label sr-only">Email/User Name</label> -->
                        <input type="text" class="form-control round" name="use_id" placeholder="User ID">
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">view</button>
                    
                </form>
                <!-- <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div> -->
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<?php
  require "./template/footer.php";
?>
