<?php
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	$tblG = "tbl_genre";
	$genQuery = getAll($tblG);

	$tblS = "tbl_studio";
	$studios = getAll($tblS);
	if(isset($_POST['submit'])) {
		$title = $_POST['title'];
		$cover = $_FILES['cover'];
		$year = $_POST['year'];
		$runtime = $_POST['runtime'];
		$story = $_POST['story'];
		$trailer = $_POST['trailer'];
		$release = $_POST['release'];
		$genre = $_POST['genList'];
		//echo $cover['name']; //echo $cover['type']; //echo $cover['size']; //echo $cover['tmp_name'];
		$uploadMovie = addMovie($title, $cover, $year, $runtime, $story, $trailer, $release, $genre);
		$message = $uploadMovie;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add Movie</title>
</head>
<body>
	<form action="admin_addmovie.php" method="post" enctype="multipart/form-data">
		<label>Drive Title:</label>
		<input type="text" name="title" value=" <?php if(!empty($title)){ echo $title;} ?>"><br><br>
		<label>Drive Image:</label>
		<input type="file" name="cover" value=" <?php if(!empty($cover)){ echo $cover;} ?>"><br><br>
		<label>Description:</label>
		<input type="text" name="story" value=" <?php if(!empty($story)){ echo $story;} ?>"><br><br>
		<label>Goal:</label>
		<input type="text" name="trailer" value=" <?php if(!empty($trailer)){ echo $trailer;} ?>"><br><br>
		<select name="commList">
			<option value="">Please select a community</option>
			<?php while($row = mysqli_fetch_array($genQuery)) {
				echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
			} ?>
		</select><br><br>
		<!--<select name="studio">
			<option value="">Please select a studio</option>
			<?php while($row = mysqli_fetch_array($studios)) {
				echo "<option value=\"{$row['studio_id']}\">{$row['studio_name']}</option>";
			} ?>
		</select><br><br>-->
		<input type="submit" name="submit" value="Add Movie">
	</form>
</body>
</html>