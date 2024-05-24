<?php
require_once "./classes/DBC.php";
require_once "./classes/User.php";
session_start();

$query = DBC::getConnection()->query("call addbook('" . $_POST["genre"] . "','" . $_POST["authorname"] . "','" . $_POST["authorsurename"] . "','" . $_POST["Name"] . "','" . $_POST["releasedate"] . "');");

header('Location: addbook_page.php');
exit();
?>