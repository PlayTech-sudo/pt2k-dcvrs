<?php
session_start();
$title = "home";
require "./template/header.php";
// include("ath.php"); 
//require "./function/dbconn.php";
//require "./function/dbfunc.php";
//require "./process/operations.php";
?>
<?php
	require('./function/dbconn.php');
	// session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['uname'])){

		$uname = stripslashes($_REQUEST['uname']);
		$uname = mysqli_real_escape_string($conn,$uname);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);

        $query = "SELECT * FROM `user` WHERE uname='$uname' and password='".($password)."'";
        $result = mysqli_query($conn,$query) or die(mysql_error());

		$rows = mysqli_num_rows($result);
        if($rows==1){
            $user_data = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $user_data['id'];
            $_SESSION['uname'] = $uname;
            // echo $_SESSION['user_id'];
			header("location: dashboard.php");
            }else{
				echo "<script>alert('wrong password and user name !!  please enter correct password and user name '); window.location.href='login.php'; </script>";
				}
    }else{
      
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
                <form class="form-auth-small" method="POST">
                    <div class="mb-3">
                        <p class="lead">Login to your account</p>
                    </div>
                    <div class="form-group">
                        <!-- <label for="signin-email" class="control-label sr-only">Email/User Name</label> -->
                        <input type="text" class="form-control round" name="uname" placeholder="Email/User name">
                    </div>
                    <div class="form-group">
                        <!-- <label for="signin-password" class="control-label sr-only">Password</label> -->
                        <input type="password" class="form-control round" name="password" placeholder="Password">
                    </div>
                   <!--  <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox">
                            <span>Remember me</span>
                        </label>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                    <div class="mt-4">
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="forget-pass.php">Forgot password?</a></span>
                        <span>Don't have an account? <a href="registration.php">Register</a></span>
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
}
  require "./template/footer.php";
?>
