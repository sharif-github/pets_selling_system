<html>

<head>
	<title> Pets Selling System </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body>
	<h1>Seller Review Table</h1>
	<?php

	require_once('C:\xampp\htdocs\pets_selling_system\crud\db_connect.php');
	$connect = mysqli_connect(HOST, USER, PASS, DB)
		or die("Can not connect");


	$results = mysqli_query($connect, "SELECT * FROM seller_review")
		or die("Can not execute query");

	echo "<table class='ui unstackable collapsing selectable inverted yellow table' style='margin:0 auto;'>";
	echo
	"<thead>
			<tr>
				<th>SELLER_REVIEW_ID</th>
				<th>PERSON_ID</th>
				<th>REVIEW_DETAILS</th>

				<th>Delete</th>
				<th>Update</th>
			</tr>
		</thead> ";
	echo "<tbody>";
	while ($rows = mysqli_fetch_array($results)) {
		extract($rows);
		echo "<tr>";
		echo "<td> $SELLER_REVIEW_ID </td>";
		echo "<td> $PRESON_ID </td>";
		echo "<td> $REVIEW_DETAILS </td>";

		echo "<td> <a href = 'delete.php?id=$SELLER_REVIEW_ID'> DELETE </a> </td>";
		echo "<td> <a href= 'update_input.php?id=$SELLER_REVIEW_ID&a=$PRESON_ID&b=$REVIEW_DETAILS'> UPDATE </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody>";
	echo "</table \n> ";

	echo "<br><a href=create_input.php> <button class='ui primary button' style='margin:0 auto;'> CREATE a new record</button> </a>";
	echo "<a href=http://localhost/pets_selling_system/crud> <button class='ui button' style='margin:0 auto;'> Go to Home</button> </a>";
	?>

</body>

</html>