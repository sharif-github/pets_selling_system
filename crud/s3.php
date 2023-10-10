

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


		$results = mysqli_query( $connect, "SELECT PET_NAME, PET_PRICE FROM pets WHERE PETS_ADDITIONAL_INFO_ID
		IN (SELECT PETS_ADDITIONAL_INFO_ID FROM pets_additional_info WHERE
			PETS_BAD_HABIT = 'no')" )
			or die("Can not execute query");

		echo "<table class='ui unstackable collapsing selectable inverted table' style='margin:0 auto;'>";
		echo
		"<thead>
			<tr>
				<th>PET_NAME</th>
				<th>PET_PRICE</th>
			</tr>
		</thead> ";
		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results)) {
			extract($rows);
			echo "<tr>";

				echo "<td> $PET_NAME </td>";
				echo "<td> $PET_PRICE </td>";

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