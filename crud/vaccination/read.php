
<html>

<head>
	<title> Vaccination Table </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" >
</head>

<body>
	<h1>Vaccination Table</h1>
	<?php

		require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
		$connect = mysqli_connect( HOST, USER, PASS, DB )
			or die("Can not connect");


		$results = mysqli_query( $connect, "SELECT * FROM vaccination" )
			or die("Can not execute query");

		echo "<table class='ui unstackable collapsing selectable inverted orange table' style='margin:0 auto;'>";
		echo
		"<thead>
			<tr>
				<th>VACCINE_ID</th>
				<th>VACCINE_STATUS</th>
				<th>VACCINATION_DATE</th>

				<th>Delete</th>
				<th>Update</th>
			</tr>
		</thead> ";
		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results)) {
			extract($rows);
			echo "<tr>";
				echo "<td> $VACCINE_ID </td>";
				echo "<td> $VACCINE_STATUS </td>";
				echo "<td> $VACCINATION_DATE </td>";

				echo "<td> <a href = 'delete.php?id=$VACCINE_ID'> DELETE </a> </td>";
				echo "<td> <a href= 'update_input.php?id=$VACCINE_ID&a=$VACCINE_STATUS&b=$VACCINATION_DATE'> UPDATE </a> </td>";
			echo "</tr> \n";
		}
		echo "</tbody>";
		echo "</table \n> ";

		echo "<br><a href=create_input.php> <button class='ui primary button' style='margin:0 auto;'> CREATE a new record</button> </a>";
		echo "<a href=http://localhost/pets_selling_system/crud> <button class='ui button' style='margin:0 auto;'> Go to Home</button> </a>";
	?>
	
</body>

</html>