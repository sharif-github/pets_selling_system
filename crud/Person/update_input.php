<html>    <head>         <title>Pet Selling System</title>         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">    </head>    <body>    	<head>       <style> h1{       	color: blue;       }   </style>	   </head><?php   error_reporting(0);  $person_id = $_GET["person_id"];		$first_name = $_GET["first_name"];		$last_name = $_GET["last_name"];		$email = $_GET["email"];		$phone = $_GET["phone"];		$pet_id = $_GET["pet_id"];?><h1>Update Record</h1><form class="ui form" style="max-width: 300px; margin: 0 auto;" action="update_result.php">  <input type=hidden name=person_id value='<?php echo $person_id; ?>'> <br>    <div class="field">    <label>First Name</label>   <input type=text name=first_name value='<?php echo $first_name; ?>'>  </div>  <div class="field">    <label>Last Name</label>    <input type=text name=last_name value='<?php echo $last_name; ?>'>  </div>   <div class="field">    <label>Email</label>    <input type=text name=email value='<?php echo $email; ?>'>  </div>   <div class="field">    <label>Phone NO</label>    <input type=text name=phone value='<?php echo $phone; ?>'>  </div>  <div class="field">    <label>Pet ID</label>    <input type=text name=pet_id value='<?php echo $pet_id; ?>'>  </div>    <button class="positive ui button" type="submit" >Update</button> </form></body></html>