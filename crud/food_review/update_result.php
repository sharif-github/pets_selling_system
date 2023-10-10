<?php

	$food_review_id = $_GET["food_review_id"];
	
	$food_id = $_GET["food_id"];
	
	$person_id = $_GET["person_id"];
	
	$post_id = $_GET["post_id"];
	
	$review_details = $_GET["review_details"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE food_review SET FOOD_ID='$food_id', PERSON_ID='$person_id', POST_ID='$post_id', REVIEW_DETAILS='$review_details' WHERE food_review_id=$food_review_id";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> FOOD_ID=$food_id <br> PERSON_ID=$person_id <br> POST_ID=$post_id <br> REVIEW_DETAILS=$review_details";



	echo "<p><a href=read.php>READ all records</a>";

?>