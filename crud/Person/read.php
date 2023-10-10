
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
    <h1>Person Table: </h1>

<?php
	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM person" )
		or die("Can not execute query");

	echo "<table class='ui unstackable collapsing fixed single line celled table' style='margin: 0 auto;'> \n";

	echo "<th>PERSON ID</th> <th>FIRST NAME</th> <th>LAST NAME</th> <th>EMAIL</th><th>PHONE</th><th>PET ID</th> <th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $PERSON_ID </td>";
		echo "<td> $FIRST_NAME </td>";
		echo "<td> $LAST_NAME </td>";
		echo "<td> $EMAIL </td>";
		echo "<td> $PHONE </td>";	
		echo "<td> $PET_ID </td>";	
		echo "<td> <a href = 'delete.php?id=$PERSON_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?person_id=$PERSON_ID&first_name=$FIRST_NAME&last_name=$LAST_NAME&email=$EMAIL&phone=$PHONE&pet_id=$PET_ID'> Update </a> </td>";
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