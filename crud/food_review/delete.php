<?php

	$id = $_GET["id"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM food_review WHERE FOOD_REVIEW_ID=$id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=read.php>READ all records</a>";

?>