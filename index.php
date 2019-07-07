<?php 
$objective = str_replace(" ", "", $_POST["objective"]);
//var_dump($objective);
$number = explode("+", $objective);

$return = $number[0] + $number[1];

?>

<html>
 <head>
  <meta charset="utf-8">
  <title>PHP-CALCULATOR</title>
 </head>
 <body>

   <form action="/" method="post">

   <p> <input type="text" name="objective" size="10" required></input></p>
   <p>= <?php echo $return; ?></p>
   <p> <input type="submit" value="calculate"></input> </p>

   </form>

 </body>
</html>