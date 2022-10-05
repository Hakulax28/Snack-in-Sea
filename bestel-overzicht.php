<?php require 'classes/database.php'; ?>

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

   <a href="registreer-melding.php" class="shadow-sm btn btn-success">Voeg een melding toe</a>

   <p></p>

   <table class="table table-striped table-dark">

      <thead>
         <tr>
            <!--<th>ID</th>-->
            <th>Gebruikers die de bericht hebben gemaakt</th>
            <th>Bericht</th>
            <th>Status</th>
            <th>Categorie</th>
            <th>Datum</th>
            <th>Opmerking</th>
            <th>Personeels die het behandelen</th>
            <th>Verwijder</th>
            <th>Update</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($messages as $message) : ?>
            <tr>
               <!--<td><?php echo $message["id"] ?></td>-->
               <td><?php echo $message["gebr_voornaam"] ?></td>
               <td><?php echo $message["bericht"] ?></td>
               <td><?php echo $message["status"] ?></td>
               <td><?php echo $message["categorie_naam"] ?></td>
               <td><?php echo $message["datum"] ?></td>
               <td><?php echo $message["opmerking"] ?></td>
               <td><?php echo $message["pers_voornaam"] ?></td>
               <?php

               if ($_SESSION['rol'] == "personeel") : ?>
                  <td><a href="melding-delete.php?id=<?php echo $message["id"] ?>" class="btn btn-danger">Delete</a></td>
                  <td><a href="melding-update.php?id=<?php echo $message["id"] ?>" class="btn btn-warning">Update</a></td>
               <?php endif ?>
            </tr>
         <?php endforeach; ?>
      </tbody>
   </table>

   <footer>
      <a href="dashboard.php">Ga hier terug</a>
   </footer>
</body>

</html>