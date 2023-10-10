<?php

	$food_id = $_GET["food_id"];

	$food_name = $_GET["food_name"];

	$food_price = $_GET["food_price"];
	
	$food_weight = $_GET["food_weight"];
	
	$person_id = $_GET["person_id"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE food SET FOOD_NAME='$food_name', FOOD_PRICE='$food_price', FOOD_WEIGHT='$food_weight', PERSON_ID='$person_id' WHERE food_id = $food_id";

	



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> FOOD_NAME=$food_name <br> FOOD_PRICE=$food_price <br> FOOD_WEIGHT=$food_weight";



	echo "<p><a href=read.php>READ all records</a>";

?>