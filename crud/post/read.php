

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


		$results = mysqli_query( $connect, "SELECT * FROM post" )
			or die("Can not execute query");

		echo "<table class='ui unstackable collapsing selectable inverted table' style='margin:0 auto;'>";
		echo
		"<thead>
			<tr>
				<th>POST_ID</th>
				<th>PET_ID</th>
				<th>TIME</th>
				<th>DATE</th>
				<th>PERSON_ID</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
		</thead> ";
		echo "<tbody>";
		while ($rows = mysqli_fetch_array($results)) {
			extract($rows);
			echo "<tr>";
				echo "<td> $POST_ID </td>";
				echo "<td> $PET_ID </td>";
				echo "<td> $TIME </td>";
				echo "<td> $DATE </td>";
				echo "<td> $PERSON_ID </td>";

				echo "<td> <a href = 'delete.php?id=$POST_ID'> DELETE </a> </td>";
				echo "<td> <a href= 'update_input.php?id=$POST_ID&a=$PET_ID&b=$TIME&c=$DATE&d=$PERSON_ID'> UPDATE </a> </td>";
			echo "</tr> \n";
		}
		echo "</tbody>";
		echo "</table \n> ";

		echo "<br><a href=create_input.php> <button class='ui primary button' style='margin:0 auto;'> CREATE a new record</button> </a>";
		echo "<a href=http://localhost/pets_selling_system/crud> <button class='ui button' style='margin:0 auto;'> Go to Home</button> </a>";
	?>
	
</body>

</html>