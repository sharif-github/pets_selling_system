<html>
    <head>
         <title>Pet Selling System</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    <body>
    <head>
       <style> h1{
       	color: blue;
       }
   </style>	
   </head>
    <h1>Pets Table: </h1>




<?php
	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM pets" )
		or die("Can not execute query");

	echo "<table class='ui unstackable collapsing fixed single line celled table' style='margin: 0 auto;'> \n";

	echo "<th>PET ID</th> <th>PET NAME</th> <th>PET AGE</th> <th>PET WEIGHT</th><th>PET PRICE</th><th>PERSON ID</th><th>PETS ADDITIONAL INFO ID</th><th>VACCINE ID</th><th>PET REVIEW ID</th><th>NAGOTIABILITY</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $PET_ID </td>";
		echo "<td> $PET_NAME </td>";
		echo "<td> $PET_AGE </td>";
		echo "<td> $PET_WEIGHT </td>";
		echo "<td> $PET_PRICE </td>";	
		echo "<td> $PERSON_ID </td>";
		echo "<td> $PETS_ADDITIONAL_INFO_ID </td>";
		echo "<td> $VACCINE_ID </td>";
		echo "<td> $PET_REVIEW_ID </td>";	
		echo "<td> $NAGOTIABILITY </td>";	
		echo "<td> <a href = 'delete.php?id=$PET_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?pet_id=$PET_ID&pet_name=$PET_NAME&pet_age=$PET_AGE&pet_weight=$PET_WEIGHT
		&pet_price=$PET_PRICE&person_id=$PERSON_ID&pets_add_info_id=$PETS_ADDITIONAL_INFO_ID&vaccine_id=$VACCINE_ID&
		pet_review_id=$PET_REVIEW_ID&nagotiability=$NAGOTIABILITY'> Update </a> </td>";
		echo "</tr> \n";
	}
    
	echo "</tbody></table> \n";
 
	echo "<p><br><a href=create_input.php><button class='positive ui button'>Create a new record</button></a>";
?>

 <body>
 <a href="http://localhost/pets_selling_system/crud">
     <button class="negative ui button">HOME</button>
    </a> 
 </body>

</body>
</html>