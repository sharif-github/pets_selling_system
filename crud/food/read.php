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
	<h1>Food Table: </h1>
	<?php
	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
	$connect = mysqli_connect(HOST, USER, PASS, DB)
		or die("Can not connect");


	$results = mysqli_query($connect, "SELECT * FROM food")
		or die("Can not execute query");



	echo "<table class='ui unstackable collapsing fixed single line celled table' style='margin: 0 auto;'> \n";
	echo "<thead><tr><th>FOOD ID</th> <th>FOOD NAME</th> <th>FOOD PRICE</th> <th>FOOD WEIGHT</th><th>PERSON ID</th> <th>Delete</th> <th>Update</th></tr></thead> <tbody>\n";

	while ($rows = mysqli_fetch_array($results)) {
		extract($rows);
		echo "<tr>";
		echo "<td> $FOOD_ID </td>";
		echo "<td> $FOOD_NAME </td>";
		echo "<td> $FOOD_PRICE </td>";
		echo "<td> $FOOD_WEIGHT </td>";
		echo "<td> $PRESON_ID </td>";
		echo "<td> <a href = 'delete.php?id=$FOOD_ID'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?food_id=$FOOD_ID&food_name=$FOOD_NAME&food_price=$FOOD_PRICE&food_weight=$FOOD_WEIGHT&person_id=$PRESON_ID'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</tbody></table> \n";

	echo "<p><br><a href=create_input.php><button class='positive ui button'>Create a new record</button></a>";


	?>


</body>

<body>
	<a href="http://localhost/pets_selling_system/crud">
		<button class="negative ui button">HOME</button>
	</a>
</body>


</html>