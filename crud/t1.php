

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


		$results = mysqli_query( $connect, "SELECT * FROM pets JOIN person USING (PET_ID)" )
			or die("Can not execute query");

		echo "<table class='ui unstackable collapsing selectable inverted table' style='margin:0 auto;'>";
		echo
		"<thead>
			<tr>
				<th>PET_ID</th>
				<th>PET_NAME</th>
				<th>PET_AGE</th>
				<th>PET_WEIGHT</th>
				<th>PET_PRICE</th>
				<th>PERSON_ID</th>
				<th>PETS_ADDITIONAL_INFO_ID</th>
				<th>VACCINE_ID</th>
				<th>PET_REVIEW_ID</th>
				<th>NAGOTIABILITY</th>

				<th>PERSON_ID </th>
				<th>FIRST_NAME</th>
				<th>LAST_NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
				<th>PET_ID </th>
				
			</tr>
		</thead> ";
		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results)) {
			extract($rows);
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


				echo "<td> $PERSON_ID </td>";
				echo "<td> $FIRST_NAME </td>";
				echo "<td> $LAST_NAME </td>";
				echo "<td> $EMAIL </td>";
				echo "<td> $PHONE </td>";
				echo "<td> $PET_ID </td>";

			echo "</tr> \n";
		}
		echo "</tbody>";
		echo "</table \n> ";

		echo "<br>";


		$results2 = mysqli_query( $connect, "SELECT COUNT(PET_ID) as c FROM pets JOIN person USING (PET_ID)" )
			or die("Can not execute query");

		echo "Total Number of person: ";

		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results2)) {
			extract($rows);
			echo "<tr>";
				echo "<td> $c </td>";
			echo "</tr> \n";
		}
		echo "</tbody>";

		echo "<br>";

		echo "<br>";
		echo "<a href=http://localhost/pets_selling_system/crud> <button class='ui button' style='margin:0 auto;'> Go to Home</button> </a>";



	?>
	
</body>

</html>