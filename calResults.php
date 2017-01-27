<?php
    $firstN = $_GET["firstN"];
    $secondN = $_GET["secondN"];
    $results = $firstN + $secondN;.
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>your results</h1>
    <p>The sum of <?php echo $firstN; ?> and <?php echo $secondN; ?> is <?php echo $results; ?></p>
  </body>
</html>
