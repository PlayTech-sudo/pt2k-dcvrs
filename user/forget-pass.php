

<?php
$title = "home";
require "./template/header.php";
//require "./function/dbconn.php";
//require "./function/dbfunc.php";
//require "./process/operations.php";
?>
<body class="theme-cyan font-montserrat">

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
<div class="auth-main particles_js">
    <div class="auth_div vivify popIn">
        <div class="auth_brand">
            <a class="navbar-brand" href="javascript:void(0);"><img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Oculux</a>                                                
        </div>
        <div class="card forgot-pass">
            <div class="body">
                <p class="lead mb-3"><strong>Oops</strong>,<br> forgot something?</p>
                <p>Type email to recover password.</p>
                <form class="form-auth-small" action="index.html">
                    <div class="form-group">                                    
                        <input type="email" class="form-control round" id="signup-password" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-round btn-primary btn-lg btn-block">RESET PASSWORD</button>
                    <div class="bottom">
                        <span class="helper-text">Know your password? <a href="login.php">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<?php
  require "./template/footer.php";
?>