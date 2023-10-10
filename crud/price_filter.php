
<html>
    <head>
         <title>Pet Selling System</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    </head>
    <body>
    <head>
       <style> h1{
       	color: blue;
       }
   </style>	
   </head>
    <h1>Pets Table: </h1>


    <form class="ui form" style="max-width: 300px; margin: 0 auto;" action="price_filter_show.php">
    
        <div class="field">
            <label>Price Range</label>
            <input type="text" name="l" placeholder="Lower Price">
            <br><br>
            <input type="text" name="u" placeholder="Upper Price">
        </div>
        

        <button class="positive ui button" type="submit">Filter</button>

        <br><br>

    </form>


<?php
    
?>


</body>
</html>