<?php

	$food_name = $_GET["FOOD_NAME"];

	$food_price = $_GET["FOOD_PRICE"];	
	
	$food_weight = $_GET["FOOD_WEIGHT"];

	$person_id = $_GET["PERSON_ID"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO food VALUES ( NULL, '$food_name', $food_price, $food_weight, $person_id )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Food Name = $food_name <br> Food Price = $food_price <br> Food Weight = $food_weight <br> Person Id = $person_id";



	echo "<p><a href=read.php>Read all records</a>";

?>