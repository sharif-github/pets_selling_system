
<html>
	<head>
		<!-- <title>A simple E-Commerce Site!</title> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
	<h1> Create Record </h1>

	<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=create_result.php>
	<div class="field">
		<label>Pet's Scientific Name</label>
		<input type="text" name="PET_SCIENTIFIC_NAME" placeholder="Pet's Scientific Name">
	</div>

	<div class="field">
		<label>Food Id</label>
		<input type="text" name="FOOD_ID" placeholder="Food Id">
	</div>

	<div class="field">
		<label>Pet's Average Life Expectancy</label>
		<input type="text" name="PETS_AVG_LIFE_EXPECTANCY" placeholder="Pet's Average Life Expectancy">
	</div>

	<div class="field">
		<label>Pet's Bad Habit</label>
		<input type="text" name="PETS_BAD_HABIT" placeholder="Pet's Bad Habit">
	</div>

	<button class="ui primary button" type="submit">Add New Product</button>
	
	</form>
	</body>
</html>