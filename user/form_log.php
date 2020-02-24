<?php
session_start();
include_once("./function/dbconn.php");


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $uname = mysqli_real_escape_string($conn,$_POST['uname']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT uid FROM  `user` WHERE uname = '$uname' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         $_SESSION['login_user'] = $uname;
         echo "<script>alert('logged successfully'); window.location.href='index.php'; </script>";
      }else {
           echo "<script>alert('logged unsuccessfully'); window.location.href='login.php'; </script>";
      }
   }
?>
