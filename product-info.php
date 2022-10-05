<?php require 'classes/database.php'; ?>

<?php

// hier moet de info van de anderen tabelen te voor schijn komen. 

$sql = "SELECT * FROM product";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {
   $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

if (isset($_POST["submit"])) {
   $categorie = $_POST["category"];

   $sql = "SELECT *, category as category FROM product WHERE category = '$categorie'";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <title>Snack'in Sea</title>
</head>

<body>
   <header>
      <h1>Welkom bij Snack'in Sea!</h1>
   </header><br>
   <h1>Producten</h1>
   <table class="table table-striped table-dark">

      <!--<th>ID</th>-->
      <th>De product</th>
      <th>Informatie</th>
      <th>Categorie</th>
      <th>Foto</th>
      </tr>
      </thead>
      <tbody>
         <?php foreach ($products as $product) : ?>
            <tr>
               <!--<td><?php echo $product["id"] ?></td>-->
               <td><?php echo $product["naam"] ?></td>
               <td><?php echo $product["info"] ?></td>
               <td><?php echo $product["category"] ?></td>
               <td><img src="../img/" <?php echo $product["foto"] ?>.jpg alt="product.foto" width="200px" height="200px"></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>
   <h1><a href="product-overzicht.php">Ga hier terug naar overzicht</a></h1>
   <footer>
      <a href="loguit.php">Log uit</a>
      <a href="user-overzicht">Gebruikers</a>
   </footer>
</body>

</html>