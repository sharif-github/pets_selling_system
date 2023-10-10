<?php

	$VACCINE_STATUS = $_GET["VACCINE_STATUS"];
	$VACCINATION_DATE = $_GET["VACCINATION_DATE"];

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO vaccination VALUES ( '', '$VACCINE_STATUS', '$VACCINATION_DATE' )")

		or die("Can not execute query");


	echo "Record inserted:<br> Pets Scientific Vaccine Status = $VACCINE_STATUS <br> Vaccination Date = $VACCINATION_DATE";

	echo "<p><a href=read.php>READ all records</a>";

?>