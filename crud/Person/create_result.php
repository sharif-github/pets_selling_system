<?php

	$first_name = $_GET["FIRST_NAME"];

	$last_name = $_GET["LAST_NAME"];	
	
	$email = $_GET["EMAIL"];

	$phone = $_GET["PHONE"];
	
	$pet_id = $_GET["PET_ID"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO person VALUES ( NULL, '$first_name', '$last_name', '$email', '$phone', $pet_id )" )

		or die("Can not execute query");



	echo "Record inserted:<br> First Name = $first_name <br> Last Name = $last_name <br> Email = $email <br> Phone = $phone <br> Pet ID = $pet_id";



	echo "<p><a href=read.php>Read all records</a>";

?>