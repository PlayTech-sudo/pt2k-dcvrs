<?php
session_start();
include_once("./function/dbconn.php"); 

if(isset($_POST["adharsubmit"])){
    $check = getimagesize($_FILES["adhar"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['adhar']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        //Insert image content into database
       
        $adhar1 = "UPDATE `user` SET adhar = '$imgContent' WHERE id = '".$_SESSION['user_id']."' ";
			if(mysqli_query($conn, $adhar1)){
			    echo "<script>alert('Upload successfully'); window.location.href='adddoc.php'; </script>";
				}
        else{
            echo "<script>alert('Uploading Failed '); window.location.href='adddoc.php'; </script>";
        } 
    }else{
        echo "<script>alert('NO FILE SELECTED! PLEASE SELECT FILE!!'); window.location.href='adddoc.php'; </script>";
    }
}
?>