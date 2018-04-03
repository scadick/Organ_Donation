<?php
    // Turn on error reporting
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	//Connect to database
	include('connect.php');
    include('read.php');
	if(isset($_GET['story'])){
        $tbl = "tbl_user";
        $tbl2 = "tbl_story";
        $tbl3 = "tbl_story_user";
        $col = "user_id";
        $col2 = "story_id";
        $col3 = "story_approval";
        $filter = "\"yes\"";
        $getFiles = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
    }else if(isset($_GET['read'])){
        $tbl = "tbl_story";
        $col = "story_id";
        $id = $_GET['read'];

        $getFiles = getSingle($tbl, $col, $id);
    }else if(isset($_GET['page'])) {
        $tbl = "tbl_drive";
        $col = "drive_approval";
        $id = "\"yes\"";
        $getFiles = getSingle($tbl, $col, $id);
    }else if(isset($_GET['details'])){
        $tbl = "tbl_drive";
        $getFiles = getAll($tbl);
    }else if(isset($_GET['reg'])){
        GOTO('Location: https://www.ontario.ca/page/organ-and-tissue-donor-registration');
        $tbl = "tbl_drive";
        $col = "drive_title";
        $id = $_GET['reg'];
        $getFile = getSingle($tbl, $col, $id);
        $grpResultR = "[";

        while($fileResultR = mysqli_fetch_assoc($getFile)) {
            $jsonResultR = json_encode($fileResultR);
            $grpResultR .= $jsonResultR.",";
        }

        $grpResultR = substr($grpResultR, 0, -1);

        $grpResultR .= "]";
    }

    /*if(isset($_GET['reg']) {
        $grpResultR = "[";

        while($fileResultR = mysqli_fetch_assoc($getFile)) {
            $jsonResultR = json_encode($fileResultR);
            $grpResultR .= $jsonResultR.",";
        }

        $grpResultR = substr($grpResultR, 0, -1);

        $grpResultR .= "]";
    } else {*/
        $grpResult = "";

        echo "[";

        while($fileResult = mysqli_fetch_assoc($getFiles)) {
            $jsonResult = json_encode($fileResult);
            $grpResult .= $jsonResult.",";
        }

        echo substr($grpResult, 0, -1);

        echo "]";
    
    //}
	mysqli_close($link);

?>