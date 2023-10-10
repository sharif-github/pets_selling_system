<?php

	$pet_name = $_GET["PET_NAME"];

	$pet_age = $_GET["PET_AGE"];	
	
	$pet_weight = $_GET["PET_WEIGHT"];

	$pet_price = $_GET["PET_PRICE"];
	
	$person_id = $_GET["PERSON_ID"];
	
	$pets_additional_info_id = $_GET["PETS_ADDITIONAL_INFO_ID"];

	$vaccine_id = $_GET["VACCINE_ID"];	
	
	$pet_review_id = $_GET["PET_REVIEW_ID"];

	$nagotiability = $_GET["NAGOTIABILITY"];
	
	



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO pets VALUES ( NULL, '$pet_name', $pet_age, $pet_weight, $pet_price, $person_id, $pets_additional_info_id, $vaccine_id, $pet_review_id, $nagotiability )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Pet Name = $pet_name <br> Pet Age = $pet_age <br> Pet Weight = $pet_weight <br> Pet Price = $pet_price <br> Person ID = $person_id<br> Pets Additional Info ID = $pets_additional_info_id<br> Vaccine ID = $vaccine_id<br> Pet Review ID = $pet_review_id<br> Nagotiability= $nagotiability";



	echo "<p><a href=read.php>Read all records</a>";

?>