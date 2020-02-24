<?php
include_once("./function/dbconn.php");
// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$vname = mysqli_real_escape_string($conn, $_REQUEST['vname']);
$vnumber = mysqli_real_escape_string($conn, $_REQUEST['vnumber']);
$vtype = mysqli_real_escape_string($conn, $_REQUEST['vtype']);

$trn_date = date("Y-m-d H:i:s");
// Attempt insert query execution
$sql = "INSERT INTO `user` (`uname`, `password`, `vname`, `vnumber`, `vtype`, `reg_date`) VALUES ('$first_name', '$password', '$vname','$vnumber','$vtype', '$trn_date ')";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('registered successfully'); window.location.href='index.php'; </script>";
} else{
    echo "<script>alert('registered unsuccessfully'); window.location.href='registration.php'; </script>";
}

// Close connection
mysqli_close($conn);
?>
