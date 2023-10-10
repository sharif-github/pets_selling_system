
<html>
	<head>
		<!-- <title>A simple E-Commerce Site!</title> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
	<h1> Create Record </h1>

	<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=create_result.php>
	<div class="field">
		<label>Pet's Id:</label>
		<input type="text" name="PET_ID" placeholder="Pet's Id">
	</div>

	<div class="field">
		<label>Time:</label>
		<input type="text" name="TIME" placeholder="Time">
	</div>

	<div class="field">
		<label>Date:</label>
		<input type="text" name="DATE" placeholder="YYYY-MM-DD">
	</div>

	<div class="field">
		<label>Person Id:</label>
		<input type="text" name="PERSON_ID" placeholder="Person Id">
	</div>

	<button class="ui primary button" type="submit">Add New Product</button>
	
	</form>
	</body>
</html>