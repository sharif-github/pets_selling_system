<html>

<head>
	<title>Pet Selling System</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body>

	<head>
		<style>
			h1 {
				color: blue;
			}
		</style>
	</head>
	<h1>Food Review Table: </h1>

	<?php
	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
	$connect = mysqli_connect(HOST, USER, PASS, DB)
		or die("Can not connect");


	$results = mysqli_query($connect, "SELECT * FROM food_review")
		or die("Can not execute query");

	echo "<table class='ui unstackable collapsing fixed single line celled table' style='margin: 0 auto;'> \n";
	echo "<th>FOOD REVIEW ID</th> <th>FOOD ID</th> <th>PERSON ID</th> <th>POST ID</th><th>REVIEW DETAILS</th> <th>Delete</th> <th>Update</th> \n";

	while ($rows = mysqli_fetch_array($results)) {
		extract($rows);
		echo "<tr>";
		echo "<td> $FOOD_REVIEW_ID </td>";
		echo "<td> $FOOD_ID </td>";
		echo "<td> $PRESON_ID </td>";
		echo "<td> $POST_ID </td>";
		echo "<td> $REVIEW_DETAILS </td>";
		echo "<td> <a href = 'delete.php?id=$FOOD_REVIEW_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?food_review_id=$FOOD_REVIEW_ID&food_id=$FOOD_ID&person_id=$PRESON_ID&post_id=$POST_ID&review_details=$REVIEW_DETAILS'> Update </a> </td>";
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