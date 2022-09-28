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
   <title>Snack'in Sea</title>
</head>

<body>
   <header>
      <p>Test</p>
   </header>
   <div class="">

      <div>

      </div>
   </div>
   <footer>

   </footer>
</body>

</html>