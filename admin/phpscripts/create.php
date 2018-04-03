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


?>