<html>
 <head>
  <title>Saturation cpu en PHP</title>
 </head>
 <body>
 <?php 
  // Calcul complexe répété
  $x = 0.0001;
  for ($i = 0; $i <= 9000000; $i++) {
    $x += sqrt($x);
  }
  echo $i.";";

 ?>
 </body>
</html>
