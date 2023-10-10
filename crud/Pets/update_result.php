<?php

	$pet_id = $_GET["pet_id"];
	
	$pet_name = $_GET["pet_name"];
	
	$pet_age = $_GET["pet_age"];
	
	$pet_weight = $_GET["pet_weight"];
	
	$pet_price = $_GET["pet_price"];
	
	$person_id = $_GET["person_id"];
	
	$pets_add_info_id = $_GET["pets_add_info_id"];
	
	$vaccine_id = $_GET["vaccine_id"];
	
	$pet_review_id = $_GET["pet_review_id"];
	
	$nagotiability = $_GET["nagotiability"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE pets SET PET_NAME='$pet_name', PET_AGE='$pet_age', PET_WEIGHT='$pet_weight', PET_PRICE='$pet_price', 
	PERSON_ID='$person_id',PETS_ADDITIONAL_INFO_ID='$pets_add_info_id',VACCINE_ID='$vaccine_id',PET_REVIEW_ID='$pet_review_id',
	NAGOTIABILITY='$nagotiability' WHERE pet_id = $pet_id";

	

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> PET_NAME=$pet_name <br> PET_AGE=$pet_age <br> PET_WEIGHT=$pet_weight <br> PET_PRICE=$pet_price <br> PERSON_ID=$person_id<br> PETS_ADDITIONAL_INFO_ID=$pets_add_info_id<br> 
	VACCINE_ID=$vaccine_id<br> PET_REVIEW_ID=$pet_review_id<br> NAGOTIABILITY=$nagotiability";



	echo "<p><a href=read.php>READ all records</a>";

?>