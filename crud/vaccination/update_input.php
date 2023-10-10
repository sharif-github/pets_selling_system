

<html>
	<head>
		<!-- <title>A simple E-Commerce Site!</title> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
	<?php
		$id = $_GET["id"];
		$VACCINE_STATUS = $_GET["a"];
		$VACCINATION_DATE = $_GET["b"];
	?>

	<h1>Update Record</h1>

	<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=update_result.php>

		<div class="field">
			<input type="Hidden" name="id" value='<?php echo $id; ?>'">
		</div>

		<div class="field">
			<label>Vaccine Status:</label>
			<input type="text" name="VACCINE_STATUS" value='<?php echo $VACCINE_STATUS; ?>'">
		</div>

		<div class="field">
			<label>Vaccination Date:</label>
			<input type="text" name="VACCINATION_DATE" value='<?php echo $VACCINATION_DATE; ?>'">
		</div>


		<button class="ui button" type="submit">Update</button>

	</form>
	</body>
</html>