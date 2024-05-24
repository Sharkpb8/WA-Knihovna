<?php
require_once "./classes/DBC.php";
require_once "./classes/User.php";
session_start();

$query = DBC::getConnection()->query("call addgenre('" . $_POST["Name"] . "');");

header('Location: adding_page.php');
exit();
?>