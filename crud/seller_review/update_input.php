

<html>
	<head>
		<!-- <title>A simple E-Commerce Site!</title> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
	<?php
		$SELLER_REVIEW_ID = $_GET["id"];
		$PERSON_ID = $_GET["a"];
		$REVIEW_DETAILS = $_GET["b"];
	?>

	<h1>Update Record</h1>

	<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=update_result.php>

		<div class="field">
			<input type="Hidden" name="SELLER_REVIEW_ID" value='<?php echo $SELLER_REVIEW_ID; ?>'">
		</div>

		<div class="field">
			<label>Person ID:</label>
			<input type="text" name="PERSON_ID" value='<?php echo $PERSON_ID; ?>'">
		</div>

		<div class="field">
			<label>Review Details:</label>
			<input type="text" name="REVIEW_DETAILS" value='<?php echo $REVIEW_DETAILS; ?>'">
		</div>


		<button class="ui button" type="submit">Update</button>

	</form>
	</body>
</html>