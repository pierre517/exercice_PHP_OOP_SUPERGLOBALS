<?php
session_start();


setcookie("last_visit", date("d/m/Y H:i"), time() + 3600);

echo "Bonjour   " . $_SESSION['user'] . "<br>";

if (isset($_COOKIE['last_visit'])) {
    echo "Derniere visite : " . $_COOKIE['last_visit'];
}
