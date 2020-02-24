<?php
session_start();
$title = "home";
require "./template/header.php";
?>
<?php
	require('./function/dbconn.php');
    if (isset($_POST['adname'])){

		$adname = stripslashes($_REQUEST['adname']);
		$adname = mysqli_real_escape_string($conn,$adname);
		$apassword = stripslashes($_REQUEST['apassword']);
		$apassword = mysqli_real_escape_string($conn,$apassword);

        $query = "SELECT * FROM `admin` WHERE adname='$adname' and apassword='$apassword'";
        $result = mysqli_query($conn,$query) or die(mysql_error());

		$rows = mysqli_num_rows($result);
        if($rows==1){
            $user_data = mysqli_fetch_array($result);
            $_SESSION['admin_id'] = $user_data['aid'];
            $_SESSION['adname'] = $adname;
			header("location: ./admindash.php");
            }else{
				echo "<script>alert('wrong password and user name !!  please enter correct password and user name '); window.location.href='index.php'; </script>";
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
                    <img class="img-fluid" width="300px" height="300px" src="./assets/images/KSRTC_logo.png" />
                </div>
                <form class="form-auth-small" method="POST">
                    <div class="mb-3">
                        <p class="lead">ADMIN LOGIN PAGE</p>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control round" name="adname" placeholder="User name" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control round" name="apassword" placeholder="Password" required>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<?php
}
  require "./template/footer.php";
?>
