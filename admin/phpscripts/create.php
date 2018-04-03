<?php
    function createStory($story) {
        include('connect.php');
        
        $addString = "INSERT INTO tbl_story VALUES(NULL, '{$story}', 'Pending')";
			$addQuery = mysqli_query($link, $addString);
			if($addQuery) {
				$qdrive = "SELECT * FROM tbl_story ORDER BY story_id DESC LIMIT 1";
				$laststory = mysqli_query($link, $qdrive);
				$row = mysqli_fetch_array($laststory);
				$lastID = $row['story_id'];
				$user = $_SESSION['user_id'];
				$userstoryString = "INSERT INTO tbl_story_user VALUES(NULL, {$lastID}, {$user})";
				$userstoryResult = mysqli_query($link, $userstoryString);
				if($userstoryResult) {
					redirect_to("stories.php");
				} else{
					$message = "There was a problem inputting this story.";
					return $message;
				}
			}else{
				$message = "There was a problem inputting this story.";
				return $message;
			}
		mysqli_close($link);
	}

	function createDrive($title, $location, $goal, $desc, $type, $code) {
        include('connect.php');
		date_default_timezone_set("America/Toronto");
        	$addString = "INSERT INTO tbl_drive VALUES(NULL, '{$title}', CURRENT_TIMESTAMP, '{$goal}', '0', '0', NULL, '{$desc}', '{$type}', 'Pending')";
			$addQuery = mysqli_query($link, $addString);
			if($addQuery) {
				$qdrive = "SELECT * FROM tbl_drive ORDER BY drive_id DESC LIMIT 1";
				$lastdrive = mysqli_query($link, $qdrive);
				$row = mysqli_fetch_array($lastdrive);
				$lastID = $row['drive_id'];
				$code = "'".$code."'";
				$qloc = "SELECT * FROM tbl_location WHERE location_code = {$code}";
				$locinfo = mysqli_query($link, $qloc);
				if (!$locinfo) {
					printf("Error: %s\n", mysqli_error($link));
					exit();
				}
				$loccode = mysqli_fetch_array($locinfo);
				$locID = $loccode['location_id'];
				$user = $_SESSION['user_id'];
				$userdriveString = "INSERT INTO tbl_drive_user_loc VALUES(NULL, {$lastID}, {$user}, {$locID})";
				$userdriveResult = mysqli_query($link, $userdriveString);
				if($userdriveResult) {
					redirect_to("drives.php");
				} else{
					$message = "There was a problem inputting this story.";
					return $message;
				}
			}else{
				$message = "There was a problem inputting this story.";
				return $message;
			}
		mysqli_close($link);
	}


?>