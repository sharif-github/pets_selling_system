<?php

	$PERSON_ID = $_GET["PERSON_ID"];
	$REVIEW_DETAILS = $_GET["REVIEW_DETAILS"];
	

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO seller_review VALUES ( '', '$PERSON_ID', '$REVIEW_DETAILS' )" )

		or die("Can not execute query");


	echo "Record inserted:<br> Person Id = $PERSON_ID <br> Review Details = $REVIEW_DETAILS";

	echo "<p><a href=read.php>READ all records</a>";

?>