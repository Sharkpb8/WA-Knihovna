<?php
require_once "./classes/DBC.php";
session_start();

borrow($_POST['bookname']);

function borrow(string $name){
    $query = DBC::getConnection()->query("call addborrow('" . $_SESSION["username"] . "','" . $name . "');");
}

header('Location: katalog_page.php');
exit();