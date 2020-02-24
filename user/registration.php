<?php
session_start();
$title = "home";
require "./template/header.php";
// include("ath.php"); 
//require "./function/dbconn.php";
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
                    <img class="img-fluid" width="300px" height="300px" src="../assets/images/KSRTC_logo.png" />
                </div>
                <form class="form-auth-small" method="POST" action="register_save.php">
                    <div class="mb-3">
                        <p class="lead">REGISTER YOUR SELF</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control round" name="uname" placeholder="User name" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control round" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control round" name="vname" placeholder="Vehical Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control round" name="vnumber" placeholder="Vehical Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control round" name="vtype" placeholder="Vehical Type" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">Click Here To Register</button>
                    <div class="mt-4">
                        <span>Already have an account? <a href="index.php">Login</a></span>
                    </div>
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
