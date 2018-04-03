<?php

	//Get all of something
	function getAll($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);

		if($runAll){
				return $runAll;

		}else{
				$error = "There was a problem accessing this information. Sorry about your luck :)";
				return $error;
		}

		mysqli_close($link);
	}

function getSingle($tbl, $col, $id){
	include('connect.php');
	$start = substr($id, 0, 1);
	if($start != "'") {
		$id = "'".$id."'";
	}	
	
	$querySingle = "SELECT * FROM {$tbl} WHERE {$col} = {$id}";
	$runSingle = mysqli_query($link, $querySingle);

	if($runSingle){
		return $runSingle;
	}else{
		$error = "There was a problem accessing this information. Sorry about your luck :)";
		return $error;
	}

	mysqli_close($link);
}

function filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter){
	include('connect.php');

	$queryFilter = "SELECT * FROM {$tbl}, {$tbl2}, {$tbl3} WHERE {$tbl}.{$col} = {$tbl3}.{$col} AND {$tbl2}.{$col2} = {$tbl3}.{$col2} AND {$tbl2}.{$col3} = '{$filter}'";

	$runFilter = mysqli_query($link, $queryFilter);

	

	if($runFilter){
		return $runFilter;
	}else{
		$error = "There was a problem accessing this information. Sorry about your luck :)";
		return $error;
	}

	mysqli_close($link);
}

function filterType3($tbl, $tbl2, $tbl3, $tbl4, $col, $col2, $col3, $col4, $filter){
	include('connect.php');

	$queryFilter3 = "SELECT * FROM {$tbl}, {$tbl2}, {$tbl3}, {$tbl4} WHERE {$tbl}.{$col} = {$tbl4}.{$col} AND {$tbl2}.{$col2} = {$tbl4}.{$col2} AND {$tbl3}.{$col3} = {$tbl4}.{$col3}  AND  {$tbl3}.{$col4} = '{$filter}'";

	$runFilter3 = mysqli_query($link, $queryFilter3);

	echo "test";

	if($runFilter3){
		echo $runFilter3;
		return $runFilter3;
	}else{
		$error = "There was a problem accessing this information. Sorry about your luck :)";
		return $error;
	}

	mysqli_close($link);
}

?>
