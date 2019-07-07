<?php 

$objective  = $_GET["objective"];
$number = explode("+", $objective);

$return = $number[0] + $number[1];

?>

<html>
 <head>
  <meta charset="utf-8">
  <title>PHP-CALCULATOR</title>
 </head>
 <body>

   <form action="/" method="get">

   <p> <input type="text" name="objective" size="10" required></input></p>
   <p>= <?php echo $return; ?></p>
   <p> <input type="submit" value="calculate"></input> </p>

   </form>

 </body>
</html>