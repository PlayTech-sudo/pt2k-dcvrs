<?php
// session_start();
	require "dbconn.php";
	
	function getid($conn, $id, $table)
	{
		$query = "SELECT max($id) FROM $table";
		$result=mysqli_query($conn,$query);
		$row=mysqli_fetch_array($result);
		$id=$row[0];
		if(!$id)
		{
			$id=1;
			return $id;
		}
		else
		{
			$id=$id+1;
			return $id;

		}

	}

	function inserttb($conn, $name, $dob, $mobile, $email, $address, $password)
	{
		$id = getid($conn, "id","tb");
		$sql = "INSERT INTO `tb` (`id`, `name`, `dob`, `mobile`, `email`, `address`, `password`) VALUES ( '".$id."','".$name."', '".$dob."', '".$mobile."', '".$email."', '".$address."', '".$password."')";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			echo "Error".mysqli_error($conn);
			exit();
		}
		return $result;
	}

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
	$result = mysqli_query($conn, "SELECT * FROM user ORDER BY upload_date DESC");
	
	// $appdoc = mysqli_query($conn, "SELECT `upload_date`, `approved_date`, `status` FROM document");
	//image print
	$sqlimage =  mysqli_query($conn, "SELECT * FROM user ORDER BY upload_date DESC");
	//$imageresult1 = mysql_query($sqlimage);
	//police
	$police = mysqli_query($conn, "SELECT * FROM police");

	// $eventid = $_GET['id'];
	// $field = $_GET['field'];
	// $rcdash = mysqli_query($conn, "SELECT rcbook FROM `user` ");
	// $x = "SELECT rcbook FROM `user` WHERE id = '".$_SESSION['user_id']."' ";
	// $rcdash =mysqli_fetch_row($x);
?>