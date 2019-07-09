<?php

$objective = str_replace(" ", "", $_POST["objective"]);

$piece = str_split($objective);

$i = 0;

foreach ($piece as $element) {
  if (is_numeric($element)) {
      $number[$i] = $number[$i] * 10 + $element;
      //echo var_export($element, true) . " - число", PHP_EOL;
  } else {
      //echo var_export($element, true) . " - НЕ число", PHP_EOL;
      $symbol = $element;
      $i++;
  }
}

switch ($symbol) {
  case '+':
        $result = $number[0];
        for ($i = 1; $i < count($number); $i++) {
          $result = $result + $number[$i];
        }
      break;
  case '-':
        $result = $number[0];
        for ($i = 1; $i < count($number); $i++) {
          $result = $result - $number[$i];
        }
      break;
  case '*':
        $result = $number[0];
        for ($i = 1; $i < count($number); $i++) {
          $result = $result * $number[$i];
        }
      break;
  case '/':
        $result = $number[0];
        for ($i = 1; $i < count($number); $i++) {
          $result = $result / $number[$i];
        }
      break;
};


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