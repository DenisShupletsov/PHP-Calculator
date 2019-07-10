<?php

$objective = str_replace(" ", "", $_POST["objective"]);

$piece = str_split($objective);

$i = 0;

foreach ($piece as $element) {
  if (is_numeric($element)) {
      $number[$i] = $number[$i] * 10 + $element;
  } else {
      $symbol[$i] = $element;
      $i++;
  }
}

$result = $number[0];

$g = 0;

for ($i = 1; $i < count($number); $i++) {

  switch ($symbol[$g]) {
    case '+':
            $result = $result + $number[$i];
        break;
    case '-':
            $result = $result - $number[$i];
        break;
    case '*':
            $result = $result * $number[$i];
        break;
    case '/':
            $result = $result / $number[$i];
        break;
  }

  $g++;

}



?>

<html>
 <head>
  <meta charset="utf-8">
  <title>PHP-CALCULATOR</title>
 </head>
 <body>

   <form action="/" method="post">

   <p> <input type="text" name="objective" size="10" required></input></p>
   <p>= <?php echo $result; ?></p>
   <p> <input type="submit" value="calculate"></input> </p>

   </form>

 </body>
</html>