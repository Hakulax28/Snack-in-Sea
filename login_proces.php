<?php


$email = $_POST["email"];

require 'classes/database.php';

$sql = "SELECT FROM users WHERE email = $email";

$result = mysqli_query($conn, $sql);

if (!is_null($result)) {
    $user = mysqli_fetch_assoc($result); // 1 rij


    if ($user["wachtwoord"] == $_POST["wachtwoord"]) {
        //de gebruiker met email en wachtwoord zijn bekend. YEAAH!!

        session_start();

        $_SESSION["user"] = $user;
        $_SESSION["is_logged_in"] = true;

        header("location: dashboard.php");
    }
}
