

<html>
	<head>
		<title>Pets Selling System</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
	<h1> Create Record </h1>

	<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=create_result.php>
	<div class="field">
		<label>Person ID:</label>
		<input type="text" name="PERSON_ID" placeholder="Person ID">
	</div>

	<div class="field">
		<label>Review Details:</label>
		<input type="text" name="REVIEW_DETAILS" placeholder="Review Details">
	</div>

	<button class="ui primary button" type="submit">Add New Product</button>
	
	</form>
	</body>
</html>