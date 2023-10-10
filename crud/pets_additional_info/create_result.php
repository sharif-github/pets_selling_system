<?php

	$PET_SCIENTIFIC_NAME = $_GET["PET_SCIENTIFIC_NAME"];
	$FOOD_ID = $_GET["FOOD_ID"];
	$PETS_AVG_LIFE_EXPECTANCY = $_GET["PETS_AVG_LIFE_EXPECTANCY"];
	$PETS_BAD_HABIT = $_GET["PETS_BAD_HABIT"];

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");


	mysqli_query( $connect, "INSERT INTO pets_additional_info VALUES ( '', '$PET_SCIENTIFIC_NAME', '$FOOD_ID', '$PETS_AVG_LIFE_EXPECTANCY', '$PETS_BAD_HABIT' )" )

		or die("Can not execute query");


	echo "Record inserted:<br> Pets Scientific Name = $PET_SCIENTIFIC_NAME <br> Food Id = $FOOD_ID <br> Pets Average Life Expectancy = $PETS_AVG_LIFE_EXPECTANCY <br> Pets Bad Habit = $PETS_BAD_HABIT";

	echo "<p><a href=read.php>READ all records</a>";

?>