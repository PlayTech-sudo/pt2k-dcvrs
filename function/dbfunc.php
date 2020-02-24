<?php
// session_start();
	require "dbconn.php";

	?>

<?php

	// function getid($conn, $uid, $table)
	// {
	// 	$query = "SELECT max($uid) FROM $table";
	// 	$result=mysqli_query($conn,$query);
	// 	$row=mysqli_fetch_array($result);
	// 	$uid=$row[0];
	// 	if(!$uid)
	// 	{
	// 		$uid=1;
	// 		return $uid;
	// 	}
	// 	else
	// 	{
	// 		$uid=$uid+1;
	// 		return $uid;

	// 	}

	// }

	// function inserttb($conn, $uname, $password, $vname, $vnumber, $vtype)
	// {
	// 	$id = getid($conn, "uid","user");
	// 	$sql = "INSERT INTO `user`(`uid`, `uname`, `password`, `vname`, `vnumber`, `vtype`)
	// 	VALUES ('".$uname"', '".$password"', '".$vname"', '".$vnumber"', '".$vtype"', )";
	// 	$result = mysqli_query($conn, $sql);
	// 	if(!$result)
	// 	{
	// 		echo "Error".mysqli_error($conn);
	// 		exit();
	// 	}
	// 	return $result;
	// }

	function readtb($conn, $table)
	{
		$sql = "SELECT * FROM $table";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			echo "Error";
			exit();
		}
		return $result;
	}

	function deletetb($conn, $table,$id)
	{
		$sql = "";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			echo "Error";
			exit();
		}
		return $result;
	}

	// check status query
	$result= mysqli_query($conn, "SELECT * FROM user;");

	//image print
	$sqlimage =  mysqli_query($conn, "SELECT * FROM user ORDER BY upload_date DESC");
	//$imageresult1 = mysql_query($sqlimage);
	//police
	$police = mysqli_query($conn, "SELECT * FROM police");

	// Count
	$tr = mysqli_num_rows($result);
	
	$doc= mysqli_query($conn, "SELECT * FROM document;");
	$docc = mysqli_num_rows($doc);

	// APPROVED
	$ap = mysqli_query($conn, "SELECT `status` FROM document");
	$ap1 = mysqli_num_rows($doc);

	// $rcapp = mysql_query($conn, "SELECT `approved_date`, `upload_date` FROM `user` WHERE id = '$_SESSION['user_id']'");
?>
