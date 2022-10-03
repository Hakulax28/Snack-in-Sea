<?php

session_start();

if (!$_SESSION["isLoggedIn"]) {
    //echo "Deze gebruiker mag hier niet komen";
}

//echo "Je bent op de dashboard";
?>

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
        <h1>Welkom bij Snack'in Sea!</h1>
    </header>
    <div class="main">
        <div class="item items1">
            <h1 class="titel">Bestel</h1>
        </div>
        <div class="item items2">
            <h1 class="titel">Producten</h1>
        </div>
        <div class="item items3">
            <h1 class="titel">Bestel</h1>
        </div>
        <div class="item items4">
            Test
        </div>
    </div>
    <footer>

    </footer>
</body>

</html>