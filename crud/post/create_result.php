<?php

	$PET_ID = $_GET["PET_ID"];
	$TIME = $_GET["TIME"];
	$DATE = $_GET["DATE"];
	$PERSON_ID = $_GET["PERSON_ID"];

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	
	mysqli_query( $connect, "INSERT INTO post VALUES ( '', '$PET_ID', '$TIME', '$DATE', '$PERSON_ID' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Id = $PET_ID <br> Price = $TIME <br> Quantity = $DATE <br> Expire Date = $PERSON_ID";

	echo "<p><a href=read.php>READ all records</a>";

?>