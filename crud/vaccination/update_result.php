<?php

	$id = $_GET["id"];
	$VACCINE_STATUS = $_GET["VACCINE_STATUS"];
	$VACCINATION_DATE = $_GET["VACCINATION_DATE"];

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "UPDATE vaccination SET VACCINE_STATUS='$VACCINE_STATUS', VACCINATION_DATE='$VACCINATION_DATE' WHERE VACCINE_ID = $id";

	// echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");

	echo "<p>Record updated:<br> VACCINE_STATUS = $VACCINE_STATUS <br> VACCINATION_DATE = $VACCINATION_DATE";

	echo "<p><a href=read.php>READ all records</a>";

?>