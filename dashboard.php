<?php

session_start();

if (!$_SESSION["isLoggedIn"]) {
    echo "Deze gebruiker mag hier niet komen"
}

echo "Je bent op de dashboard";
?>
<a href="logout.php">logout</a>