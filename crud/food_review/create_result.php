<?php

	$food_id = $_GET["FOOD_ID"];

	$person_id = $_GET["PERSON_ID"];	
	
	$post_id = $_GET["POST_ID"];

	$review_details = $_GET["REVIEW_DETAILS"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO food_review VALUES ( NULL, $food_id, $person_id, $post_id, '$review_details' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Food Id = $food_id <br> Person Id = $person_id <br> Post Id = $post_id <br> Review Details = $review_details";



	echo "<p><a href=read.php>Read all records</a>";

?>