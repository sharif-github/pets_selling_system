

<html>

<head>
	<title> Pets Selling System </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" >
</head>

<body>
	<h1>Post Table</h1>
	<?php

		require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT FOOD_NAME,REVIEW_DETAILS FROM food JOIN food_review USING(FOOD_ID)")
			or die("Can not execute query");

		echo "<table class='ui unstackable collapsing selectable inverted table' style='margin:0 auto;'>";
		echo
		"<thead>
			<tr>
				<th>FOOD NAME</th>
				<th>REVIEW DETAILS</th>			
			</tr>
		</thead> ";
		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results)) {
			extract($rows);
			echo "<tr>";
				echo "<td> $FOOD_NAME </td>";
				echo "<td> $REVIEW_DETAILS </td>";
				

			echo "</tr> \n";
		}
		echo "</tbody>";
		echo "</table \n> ";

		echo "<br>";


		$results2 = mysqli_query( $connect, "SELECT SUM(FOOD_PRICE) as sum FROM food JOIN food_review USING(FOOD_ID)" )
			or die("Can not execute query");

		echo "Total Price: ";

		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results2)) {
			extract($rows);
			echo "<tr>";
				echo "<td> $sum </td>";
			echo "</tr> \n";
		}
		echo "</tbody>";

		echo "<br>";

		echo "<br>";
		echo "<a href=http://localhost/pets_selling_system/crud> <button class='ui button' style='margin:0 auto;'> Go to Home</button> </a>";



	?>
	
</body>

</html>