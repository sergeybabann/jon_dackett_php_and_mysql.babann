<?php 

$stock = 0;
$ordered = 3;

if ($stock > 0) {
  $message = 'In stock';
} else if ($ordered > 0) {
  $message = 'Coming soon'; 
 } else {
  $message = 'Sold out';
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>if else Statement</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
  </body>
</html>