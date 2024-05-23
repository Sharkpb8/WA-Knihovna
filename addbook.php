<?php
require_once "./classes/DBC.php";
require_once "./classes/User.php";
session_start();

$text = $_POST['text'];

// Vložení nového příspěvku do databáze
$query = DBC::getConnection()->query("call addbook('" . $_POST["genre"] . "','" . $_POST["authorname"] . "','" . $_POST["authorsurename"] . "','" . $_POST["Name"] . "','" . $_POST["releasedate"] . "');");

// Přesměrování na domovskou stránku nebo jinou relevantní stránku
header('Location: addbook_page.php');
exit();
?>