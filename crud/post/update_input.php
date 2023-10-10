
<html>
	<head>
		<!-- <title>A simple E-Commerce Site!</title> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
	<?php
		$id = $_GET["id"];
		$PET_ID = $_GET["a"];
		$TIME = $_GET["b"];
		$DATE = $_GET["c"];
		$PERSON_ID = $_GET["d"];
	?>

	<h1>Update Record</h1>

	<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=update_result.php>

		<div class="field">
			<input type="Hidden" name="id" value='<?php echo $id; ?>'">
		</div>

		<div class="field">
			<label>Pet ID:</label>
			<input type="text" name="PET_ID" value='<?php echo $PET_ID; ?>'">
		</div>

		<div class="field">
			<label>Time:</label>
			<input type="text" name="TIME" value='<?php echo $TIME; ?>'">
		</div>

		<div class="field">
			<label>Date:</label>
			<input type="text" name="DATE" value='<?php echo $DATE; ?>'">
		</div>

		<div class="field">
			<label>Person ID:</label>
			<input type="text" name="PERSON_ID" value='<?php echo $PERSON_ID; ?>'">
		</div>

		<button class="ui button" type="submit">Update</button>

	</form>
	</body>
</html>