

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


		$results = mysqli_query( $connect, "SELECT FIRST_NAME,LAST_NAME,EMAIL,PHONE FROM person WHERE PERSON_ID IN (SELECT PERSON_ID FROM food WHERE FOOD_PRICE>500)" )
			or die("Can not execute query");

		echo "<table class='ui unstackable collapsing selectable inverted table' style='margin:0 auto;'>";
		echo
		"<thead>
			<tr>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
			</tr>
		</thead> ";
		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results)) {
			extract($rows);
			echo "<tr>";

				echo "<td> $FIRST_NAME </td>";
				echo "<td> $LAST_NAME </td>";
				echo "<td> $EMAIL </td>";
				echo "<td> $PHONE </td>";

			echo "</tr> \n";
		}
		echo "</tbody>";
		echo "</table \n> ";

		echo "<br>";

		echo "<br>";

		echo "<br>";
		echo "<a href=http://localhost/pets_selling_system/crud> <button class='ui button' style='margin:0 auto;'> Go to Home</button> </a>";



	?>
	
</body>

</html>