<?php
require_once "./classes/DBC.php";
require_once "./classes/User.php";
session_start();

$query = DBC::getConnection()->query("call addauthor('" . $_POST["authorname"] . "','" . $_POST["authorsurename"] . "');");

header('Location: adding_page.php');
exit();
?>