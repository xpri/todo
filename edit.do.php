<?php

	include("db.php");

	$taskid = $_POST["taskid"];

	// print_r($_POST);

	$name = $_POST["name"];
	$starttime = $_POST["starttime"];
	$stoptime = $_POST["stoptime"];
	$location = $_POST["location"];
	$description = $_POST["description"];

	$sql = "UPDATE tasks SET name='$name', description='$description', starttime='$starttime', stoptime='$stoptime', location='$location' WHERE taskid='$taskid'";

	if(mysqli_query($conn, $sql)){
		// echo "Succesfully Inserted";
		header('location: index.php');
	}
	else{
		die(mysqli_error($conn));
	}

?>