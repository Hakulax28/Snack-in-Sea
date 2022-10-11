<?php

session_start();

//if (!$_SESSION["isLoggedIn"]) {
//echo "Deze gebruiker mag hier niet komen";
//}

//echo "Je bent op de dashboard";
?>

<?php require 'classes/database.php'; ?>

<?php

// hier moet de info van de anderen tabelen te voor schijn komen. 

$sql = "SELECT * FROM besteling";

$sql = "SELECT *, users.voornaam as user_id, product.naam as product_id
FROM besteling 
JOIN users 
ON users.id = besteling.user_id 
JOIN product
ON product.id = besteling.product_id";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {
    $bestels = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

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
    <table class="table table-striped table-dark">

        <thead>
            <tr>
                <!--<th>ID</th>-->
                <th>Gebruikers die de besteling hebben gemaakt</th>
                <th>De product dat ze willen</th>
                <th>De hoeveelheid</th>
                <th>Wat het op dit moment is</th>
                <th>De tijd van bestelling</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bestels as $bestel) : ?>
                <tr>
                    <!--<td><?php echo $bestel["id"] ?></td>-->
                    <td><?php echo $bestel["user_id"] ?></td>
                    <td><?php echo $bestel["product_id"] ?></td>
                    <td><?php echo $bestel["hoeveelheid"] ?></td>
                    <td><?php echo $bestel["status"] ?></td>
                    <td><?php echo $bestel["tijd"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <footer>
        <a href="loguit.php">Log uit</a>
        <a href="user-overzicht">Gebruikers</a>
    </footer>
</body>

</html>