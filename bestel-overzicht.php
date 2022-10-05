<?php require 'classes/database.php'; ?>

<?php

// hier moet de info van de anderen tabelen te voor schijn komen. 

$sql = "SELECT * FROM besteling";

//$sql = "SELECT *, categorie.naam as categorie_naam, us1.voornaam as gebr_voornaam, us2.voornaam as pers_voornaam
//FROM product 
//JOIN categorie 
//ON categorie.id = message.categorie_id 
//JOIN users as us1
//ON us1.id = message.gebruiker_id 
//JOIN users as us2
//ON us2.id = message.personeel_id";

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
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
   <title>Snack'in Sea</title>
</head>

<body>
   <header>
      <h1>Welkom bij Snack'in Sea!</h1>
   </header>

   <a href="registreer-bestel.php" class="shadow-sm btn btn-success">Voeg een melding toe</a>

   <p></p>

   <table class="table table-striped table-dark">

      <thead>
         <tr>
            <!--<th>ID</th>-->
            <th>Gebruikers die de besteling hebben gemaakt</th>
            <th>De product dat ze willen</th>
            <th>De hoeveelheid</th>
            <th>Wat het op dit moment is</th>
            <th>De tijd van bestelling</th>
            <th>Verwijder</th>
            <th>Update</th>
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
               <td><a href="bestel-delete.php?id=<?php echo $bestel["id"] ?>" class="btn btn-danger">Delete</a></td>
               <td><a href="bestel-update.php?id=<?php echo $bestel["id"] ?>" class="btn btn-warning">Update</a></td>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

   <footer>
      <a href="dashboard.php">Ga hier terug</a>
   </footer>
</body>

</html>