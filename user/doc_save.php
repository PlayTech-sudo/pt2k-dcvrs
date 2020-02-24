<?php
session_start();
include_once("./function/dbconn.php"); 

if(isset($_POST['rcsubmit']) || isset($_POST['pucsubmit']) || isset($_POST['adharsubmit']) ) { 

	// Configure upload directory and allowed file types 
	$upload_dir = 'upload'.DIRECTORY_SEPARATOR; 
	$allowed_types = array('jpg', 'png', 'jpeg', 'gif'); 
	if(!empty(array_filter($_FILES['files']['name']))) { 

		// Loop through each file in files[] array 
		foreach ($_FILES['files']['tmp_name'] as $key => $value) { 
			
			$file_tmpname = $_FILES['files']['tmp_name'][$key]; 
			$file_name = $_FILES['files']['name'][$key]; 
			$file_size = $_FILES['files']['size'][$key]; 
			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
			$p1 = $_SESSION['user_id'];
			$filepath = $upload_dir.$file_name;
			$today=date('20y-m-d');

			if(in_array(strtolower($file_ext), $allowed_types)) { 
				if(file_exists($filepath)) { 
					$filepath = $upload_dir.time().$file_name; 
					if( move_uploaded_file($file_tmpname, $filepath)) { 
						// inerst query
						if(isset($_POST['rcsubmit'])){
							// $rc1 ="UPDATE `document` SET `uid` = '".$p1."', `doc_type`= 'rcbook' ,`url` = '".$filepath."', `upload_date` = '".$today."' WHERE `uid`= '".$p1."' ";

							$rc1 = "INSERT INTO document (`uid`, `doc_type`, `url`, `upload_date`) VALUES ('$p1', 'rcbook', '$filepath', '$today' ) ";
							if(mysqli_query($conn, $rc1)){
								header("location:adddoc.php");
							} 
						}
						elseif(isset($_POST['pucsubmit'])){
							
							$puc1 = "INSERT INTO document (`uid`, `doc_type`, `url`, `upload_date`) VALUES ('$p1', 'puc', '$filepath', '$today' )";
							if(mysqli_query($conn, $puc1)){
								header("location:adddoc.php");
							}
						}
						elseif(isset($_POST['adharsubmit'])){
							
							$adh1 =  "INSERT INTO `document` (`uid`, `doc_type`, `url`, `upload_date`) VALUES ('$p1', 'adhar', '$filepath', '$today' )";
							if(mysqli_query($conn, $adh1)){
								header("location:adddoc.php");
								
							}
						}
						
					} 
					else {					 
						echo "Error uploading {$file_name} <br />"; 
					} 
				} 
				else { 
				
					if( move_uploaded_file($file_tmpname, $filepath)) { 
						
						echo "<script>window.location.href='adddoc.php'; </script>";
					} 
					else {					 
						
						echo "<script>alert('Uploading Failed '); window.location.href='adddoc.php'; </script>";
					} 
				} 
			} 
			else { 
				
				// If file extention not valid 
				echo "<script>alert('FILE TYPE IS NOT ALLOWED'); window.location.href='adddoc.php'; </script>";
			
			} 
		} 
	} 
	else { 
		
		// If no files selected 
		echo "<script>alert('NO FILE SELECTED! PLEASE SELECT FILE!!'); window.location.href='adddoc.php'; </script>";
	} 
} 

?>

