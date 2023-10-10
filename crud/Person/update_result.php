<?php

	$person_id = $_GET["person_id"];
	
	$first_name = $_GET["first_name"];
	
	$last_name = $_GET["last_name"];
	
	$email = $_GET["email"];
	
	$phone = $_GET["phone"];
	
	$pet_id = $_GET["pet_id"];



	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE person SET FIRST_NAME='$first_name', LAST_NAME='$last_name', EMAIL='$email', PHONE='$phone', PET_ID='$pet_id' WHERE person_id = $person_id";

	

	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> FIRST_NAME=$first_name <br> LAST_NAME=$last_name <br> EMAIL=$email <br> PHONE=$phone <br> PET_ID=$pet_id";



	echo "<p><a href=read.php>READ all records</a>";

?>