<?php

	function createUser($fname, $lname, $username, $password, $email, $phone, $shortCode, $code) {
		include('connect.php');
		$password = password_hash($password, PASSWORD_DEFAULT);
		if(empty($phone)){
			$userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$lname}', '{$username}', '{$password}', NULL, '{$email}', NULL, '{$code}', CURRENT_TIMESTAMP, 'Member', 'yes')";
		}else{
			$userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$lname}', '{$username}', '{$password}', NULL, '{$email}', '{$phone}', '{$code}', CURRENT_TIMESTAMP, 'Member', 'yes')";
		}
		$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			$quser = "SELECT * FROM tbl_user ORDER BY user_id DESC LIMIT 1";
			$lastuser = mysqli_query($link, $quser);
			$row = mysqli_fetch_array($lastuser);
			$lastID = $row['user_id'];			
			$shortCode = "'".$shortCode."'";
			$qloc = "SELECT * FROM tbl_location WHERE location_code = {$shortCode}";
			$locinfo = mysqli_query($link, $qloc);
			if (!$locinfo) {
				printf("Error: %s\n", mysqli_error($link));
				exit();
			}
			$loccode = mysqli_fetch_array($locinfo);
			$locID = $loccode['location_id'];
			$locString = "INSERT INTO tbl_user_loc VALUES(NULL, {$lastID}, {$locID})";
			$locResult = mysqli_query($link, $locString);
			if($locResult) {
				redirect_to("index.php");
			} else{
				$message = "There was a problem setting up this user.";
				return $message;
			}
		}else{
			$message = "There was a problem setting up this user.";
			return $message;
		}
		mysqli_close($link);
	}

	function editUser($fname, $lname, $username, $email, $phone, $shortCode, $code) {
		include('connect.php');
		$id = $_SESSION['user_id'];
		if(empty($phone)){
			$updateString = "UPDATE tbl_user t SET user_fname = '{$fname}', user_lname = '{$lname}', user_name = '{$username}', user_email = '{$email}', user_phone = NULL, user_code = '{$code}', user_new = 'no' WHERE t.user_id = '{$id}'";
		}else{
			$updateString = "UPDATE tbl_user t SET user_fname = '{$fname}', user_lname = '{$lname}', user_name = '{$username}', user_email = '{$email}', user_phone = '{$phone}', user_code = '{$code}', user_new = 'no' WHERE t.user_id = '{$id}'";
		}
		
		$updateQuery = mysqli_query($link, $updateString);
		if($updateQuery) {			
			$shortCode = "'".$shortCode."'";
			$qloc = "SELECT * FROM tbl_location WHERE location_code = {$shortCode}";
			$locinfo = mysqli_query($link, $qloc);
			if (!$locinfo) {
				printf("Error: %s\n", mysqli_error($link));
				exit();
			}
			$loccode = mysqli_fetch_array($locinfo);
			$locID = $loccode['location_id'];
			$locString = "UPDATE tbl_user_loc ul SET location_id = {$locID} WHERE ul.user_id = {$id}";
			$locResult = mysqli_query($link, $locString);
			if($locResult) {
				redirect_to("profile.php");
			} else{
				$message = "There was a problem updating up this user.";
				return $message;
			}
		}else{
			$message = "There was a problem updating up this user.";
			return $message;
		}
		mysqli_close($link);
	}

	function deleteUser($id) {
		//echo $id;
		include('connect.php');
		$delString = "DELETE FROM tbl_user WHERE user_id = '{$id}'";
		$delQuery = mysqli_query($link, $delString);
		if($delQuery) {
			redirect_to("index.php");
		}else{
			$message = "Call security...";
			return $message;
		}
		mysqli_close($link);
	}
?>