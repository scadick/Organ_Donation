<?php

	function password() {
		$characters = 'abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789';
		for($i = 0; $i < 12; $i++) {
			$j = rand(0, strlen($characters) - 1);
			$pass[$i] = substr($characters, $j, 1);
		}
		$password = implode("", $pass);
		return $password;
	}

	function submitMessage($email, $password, $id) {
		//echo "From submitmessage()";
		$to = $email;
		$subject = "Lost Password";
		$extra = "Reply to: accounts@BeADonor.ca";
		$url = "www.BeAHero.ca/profile.php";
		$msg = "Here is your new password. "."\n\n".$password."\n\nYou can login here. You will be prompted to remake your password: ".$url;
		mail($to,$subject,$msg,$extra);
	}

	function passwordLoss($password, $id) {
		include('connect.php');
		$hpass = password_hash($password, PASSWORD_DEFAULT);
		$updateString = "UPDATE tbl_user t SET user_pass = '{$hpass}', user_new = 'yes' WHERE t.user_id = '{$id}'";
		$updateQuery = mysqli_query($link, $updateString);
		if($updateQuery) {
			return $password;
		}else{
		  $message = "There was a problem with your new password, please contact your web admin.";
		  return $hpass;
		}
		mysqli_close($link);
	}
?>