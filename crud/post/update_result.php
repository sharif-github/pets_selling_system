<?php

	$id = $_GET["id"];
	$PET_ID = $_GET["PET_ID"];
	$TIME = $_GET["TIME"];
	$DATE = $_GET["DATE"];
	$PERSON_ID = $_GET["PERSON_ID"];

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "UPDATE post SET PET_ID='$PET_ID', TIME='$TIME', DATE='$DATE', PERSON_ID='$PERSON_ID' WHERE POST_ID = $id";

	// echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");

	echo "<p>Record updated:<br> PET_ID = $PET_ID <br> TIME = $TIME <br> DATE = $DATE <br> PERSON_ID = $PERSON_ID";

	echo "<p><a href=read.php>READ all records</a>";

?>