<html>
	<head>
		<!-- <title>A simple E-Commerce Site!</title> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
	<?php
		$id = $_GET["id"];
		$PET_SCIENTIFIC_NAME = $_GET["a"];
		$FOOD_ID = $_GET["b"];
		$PETS_AVG_LIFE_EXPECTANCY = $_GET["c"];
		$PETS_BAD_HABIT = $_GET["d"];
	?>

	<h1>Update Record</h1>

	<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=update_result.php>

		<div class="field">
			<input type="Hidden" name="id" value='<?php echo $id; ?>'">
		</div>

		<div class="field">
			<label>Pets Scientific Name:</label>
			<input type="text" name="PET_SCIENTIFIC_NAME" value='<?php echo $PET_SCIENTIFIC_NAME; ?>'">
		</div>

		<div class="field">
			<label>Food Id:</label>
			<input type="text" name="FOOD_ID" value='<?php echo $FOOD_ID; ?>'">
		</div>

		<div class="field">
			<label>Pet's Average Life Expectancy:</label>
			<input type="text" name="PETS_AVG_LIFE_EXPECTANCY" value='<?php echo $PETS_AVG_LIFE_EXPECTANCY; ?>'">
		</div>

		<div class="field">
			<label>Pet's Bad Habit:</label>
			<input type="text" name="PETS_BAD_HABIT" value='<?php echo $PETS_BAD_HABIT; ?>'">
		</div>

		<button class="ui button" type="submit">Update</button>

	</form>
	</body>
</html>