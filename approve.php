<?php
include_once("./function/dbconn.php");
 
$today=date('20y-m-d');
$ttime=date('h:i:A');

if(isset($_GET['id']))
{
$p2 = $_GET['id'];
$status = $_GET['status'];
$doc=$_GET['doc_type'];
// $sq1=" UPDATE document AS d, user AS u SET `d.status` = 'approved' where `d.uid` = '$p2' "  ;
$sql = " UPDATE `document`  SET `status` = '".$status."', `approved_date`='".$today."', `approved_time`='".$ttime."' WHERE `uid` = '".$p2."' AND doc_type='".$doc."'  ";
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
header("location:view.php");
}
?> 