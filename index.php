<?php
session_start();

if (!$_SESSION["is_logged_in"]) {
   header("location: inloggen.php");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="gridbox.css">
   <title>Snack'in Sea</title>
</head>

<body>
   <header>
      <h1>Welkom bij Snack'in Sea!</h1>
   </header>
   <div class="main">
      <div class="item item1">

      </div>
      <div class="item item2">
         <a href="bestel-overzicht.php">Bestel</a>
      </div>
      <div class="item item3">
         <a href="product-overzicht.php">Product</a>
      </div>
      <div class="item item4">

      </div>
   </div>
   <h1>Bestellingen</h1>
   <ul>
      <li>Bestelling1</li>
   </ul>
   <footer>
      <a href="loguit.php" class="shadow-sm btn btn-danger">Log uit</a>

   </footer>
</body>

</html>