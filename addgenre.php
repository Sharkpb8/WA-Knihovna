<?php
require_once "./classes/DBC.php";
require_once "./classes/User.php";
session_start();

// Vložení nového příspěvku do databáze
$query = DBC::getConnection()->query("call addgenre('" . $_POST["Name"] . "');");

// Přesměrování na domovskou stránku nebo jinou relevantní stránku
header('Location: adding_page.php');
exit();
?>