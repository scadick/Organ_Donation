<?php

	function logIn($username, $password) {
		require_once('connect.php');
		$username = mysqli_real_escape_string($link, $username);
		$password = mysqli_real_escape_string($link, $password);
		$loginstring = "SELECT * FROM tbl_user WHERE user_name = '{$username}'";
		$user_set = mysqli_query($link, $loginstring);
		if(mysqli_num_rows($user_set)){
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
			if(password_verify($password, $found_user['user_pass'])) {
				$id = $found_user['user_id'];
				$_SESSION['user_id'] = $id;
				$_SESSION['user_name'] = $found_user['user_fname'];
				$new = $found_user['user_new'];
				$_SESSION['user_new'] = $new;
				date_default_timezone_set("America/Toronto");
				$date = strftime("%Y-%m-%d %X",strtotime("now"));
				if(mysqli_query($link, $loginstring)){
					if($new == "yes"){
						$updateStringFirst = "UPDATE tbl_user SET user_date = CURRENT_TIMESTAMP, user_new = 'no' WHERE user_id = {$id}";
						$updateQueryFirst = mysqli_query($link, $updateStringFirst);
						redirect_to("profile.php");
					} else {
						$updatestring = "UPDATE tbl_user SET user_date = CURRENT_TIMESTAMP WHERE user_id = {$id}";
						$updateQuery = mysqli_query($link, $updatestring);
						redirect_to("index.php");
					}
					
				}
			}
			else{
				$message = "Username and/or password is incorrect.<br>Please make sure your cap lock key is turned off.";
				return $message;
			}
			
		}else{
			$message = "Username and/or password is incorrect.<br>Please make sure your cap lock key is turned off.";
			return $message;
		}
		mysqli_close($link);
	}


?>