<html>    <head>         <title>Pet Selling System</title>         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">    </head>    <body>    	<head>       <style> h1{       	color: blue;       }   </style>	   </head><?php    error_reporting(0);    $food_review_id = $_GET["food_review_id"];		$food_id = $_GET["food_id"];		$person_id = $_GET["person_id"];		$post_id = $_GET["post_id"];		$review_details = $_GET["review_details"];?><h1>Update Record</h1><form class="ui form" style="max-width: 300px; margin: 0 auto;" action="update_result.php">  <input type=hidden name=food_review_id value='<?php echo $food_review_id; ?>'> <br>    <div class="field">    <label>Food ID</label>   <input type=text name=food_id value='<?php echo $food_id; ?>'>  </div>  <div class="field">    <label>Person ID</label>    <input type=text name=person_id value='<?php echo $person_id; ?>'>  </div>   <div class="field">    <label>Post ID</label>    <input type=text name=post_id value='<?php echo $post_id; ?>'>  </div>   <div class="field">    <label>Update Review</label>    <input type=text name=review_details value='<?php echo $review_details; ?>'>  </div>    <button class="positive ui button" type="submit" >Update</button> </form></body></html>