<?php

	$id = $_GET["SELLER_REVIEW_ID"];
	$PERSON_ID = $_GET["PERSON_ID"];
	$REVIEW_DETAILS = $_GET["REVIEW_DETAILS"];

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");

	$query 	= "UPDATE seller_review SET PERSON_ID='$PERSON_ID', REVIEW_DETAILS='$REVIEW_DETAILS' WHERE SELLER_REVIEW_ID = $id";


	mysqli_query( $connect, $query )

		or die("Can not execute query");

	echo "<p>Record updated:<br>  PERSON_ID = $PERSON_ID <br> REVIEW_DETAILS  = $REVIEW_DETAILS";

	echo "<p><a href=read.php>READ all records</a>";

?>