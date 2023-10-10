<?php

	$id = $_GET["id"];
	$PET_SCIENTIFIC_NAME = $_GET["PET_SCIENTIFIC_NAME"];
	$FOOD_ID = $_GET["FOOD_ID"];
	$PETS_AVG_LIFE_EXPECTANCY = $_GET["PETS_AVG_LIFE_EXPECTANCY"];
	$PETS_BAD_HABIT = $_GET["PETS_BAD_HABIT"];

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	$query 	= "UPDATE pets_additional_info SET PET_SCIENTIFIC_NAME='$PET_SCIENTIFIC_NAME', FOOD_ID='$FOOD_ID', PETS_AVG_LIFE_EXPECTANCY='$PETS_AVG_LIFE_EXPECTANCY', PETS_BAD_HABIT='$PETS_BAD_HABIT' WHERE PETS_ADDITIONAL_INFO_ID = $id";


	// echo $query;

	mysqli_query( $connect, $query )

		or die("Can not execute query");

	echo "<p>Record updated:<br> PET_SCIENTIFIC_NAME = $PET_SCIENTIFIC_NAME <br> FOOD_ID = $FOOD_ID <br> PETS_AVG_LIFE_EXPECTANCY = $PETS_AVG_LIFE_EXPECTANCY <br> PETS_BAD_HABIT = $PETS_BAD_HABIT";

	echo "<p><a href=read.php>READ all records</a>";

?>