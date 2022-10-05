<?php

session_start();

require 'classes/database.php';

$id = $_GET["id"]; //17

$sql = "SELECT * FROM bestel WHERE id = $id LIMIT 1";

if ($result = mysqli_query((new Database())->getConnection(), $sql)) {

    $user = mysqli_fetch_assoc($result);

    if (is_null($user)) {
        header("location: bestel-overzicht.php");
    }
}

$sql = "SELECT *, users.voornaam as user_id, product.naam as product_id
FROM besteling 
JOIN users 
ON users.id = besteling.user_id 
JOIN product
ON product.id = besteling.product_id";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="update-bestel-verwerk.php" method="post">

        <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
        <div class=" form-group">
            <label for="user">De besteller</label>
            <input type="text" name="user" id="user" class="form-control" value="<?php echo $user["user_id"] ?>">
        </div><br>
        <div class=" form-group">
            <label for="product">De producten</label>
            <input type="text" name="product" id="product" class="form-control" value="<?php echo $user["product_id"] ?>">
        </div><br>
        <div class=" form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="<?php echo $user["hoeveelheid"] ?>">
        </div><br>
        <div class=" form-group">
            <label for="status">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="<?php echo $user["status"] ?>">
        </div><br>
        <div class="form-group">
            <label for="tijd">Tijd</label>
            <input type="date" name="tijd" id="tijd" class="form-control" value="<?php echo $user["tijd"] ?>">
        </div><br>
        <div class=" form-group">
            <button type="submit" class="shadow-sm btn btn-info" name="submit">Update gebruiker!</button>
            <a href="bestel-overzicht.php" class="shadow-sm btn btn-danger">Annuleer</a>
        </div><br>

    </form>

</body>

</html>