<?php
	function addMovie($title, $cover, $year, $runtime, $story, $trailer, $release, $genre) {
		include('connect.php');
		if($_FILES['cover']['type'] == "image/jpeg" || $_FILES['cover']['type'] == "image/jpg"){
			$target = "../images/{$cover['name']}";
			if(move_uploaded_file($_FILES['cover']['tmp_name'], $target)) {
				$orig = $target;
				$th_copy = "../images/TH_{$cover['name']}";
				if(!copy($orig, $th_copy)){
					echo "Failed to copy";
				}
				$size = getimagesize($orig);
				//echo $size[1];
				$addString = "INSERT INTO tbl_movies VALUES(NULL, '{$cover['name']}', '{$title}', '{$year}', '{$runtime}', '{$story}', '{$trailer}', '{$release}')";
				$addQuery = mysqli_query($link, $addString);
				if($addQuery) {
					$qdrive = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1";
					$lastmovie = mysqli_query($link, $qstring);
					$row = mysqli_fetch_array($lastmovie);
					$lastID = $row['movies_id'];
					$genreString = "INSERT INTO tbl_mov_genre VALUES(NULL, {$lastID}, {$genre})";
					$genreResult = mysqli_query($link, $genreString);
					if($genreResult) {
						redirect_to("../admin_index.php");
					} else{
						$message = "Drive didn't input";
						return $message;
					}
				}else{
					$message = "Drive didn't input";
					return $message;
				}
				mysqli_close($link);
			}
		}else{
			echo "Really, a GIF...";
		}
	}
?>