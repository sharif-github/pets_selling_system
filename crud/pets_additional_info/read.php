<html>

<head>
	<title> A Simple E-Commerce Site </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" >
</head>

<body>
	<h1>Pets Additional Info Table</h1>
	<?php

		require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT * FROM pets_additional_info" )
			or die("Can not execute query");

		echo "<table class='ui unstackable collapsing selectable inverted olive table' style='margin:0 auto;'>";
		echo
		"<thead>
			<tr>
				<th>PETS_ADDITIONAL_INFO_ID</th>
				<th>PET_SCIENTIFIC_NAME</th>
				<th>FOOD_ID</th>
				<th>PETS_AVG_LIFE_EXPECTANCY</th>
				<th>PETS_BAD_HABIT</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
		</thead> ";
		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results)) {
			extract($rows);
			echo "<tr>";
				echo "<td> $PETS_ADDITIONAL_INFO_ID </td>";
				echo "<td> $PET_SCIENTIFIC_NAME </td>";
				echo "<td> $FOOD_ID </td>";
				echo "<td> $PETS_AVG_LIFE_EXPECTANCY </td>";
				echo "<td> $PETS_BAD_HABIT </td>";

				echo "<td> <a href = 'delete.php?id=$PETS_ADDITIONAL_INFO_ID'> DELETE </a> </td>";
				echo "<td> <a href= 'update_input.php?id=$PETS_ADDITIONAL_INFO_ID&a=$PET_SCIENTIFIC_NAME&b=$FOOD_ID&c=$PETS_AVG_LIFE_EXPECTANCY&d=$PETS_BAD_HABIT'> UPDATE </a> </td>";
			echo "</tr> \n";
		}
		echo "</tbody>";
		echo "</table>";

		echo "<br><a href=create_input.php> <button class='ui primary button' style='margin:0 auto;'> CREATE a new record</button> </a>";
		echo "<a href=http://localhost/pets_selling_system/crud> <button class='ui button' style='margin:0 auto;'> Go to Home</button> </a>";
	?>
</body>

</html>