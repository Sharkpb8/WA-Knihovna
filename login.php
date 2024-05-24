<?php
require_once "./classes/User.php";
require_once "./classes/DBC.php";
session_start();
if (empty($_SESSION["atempts"]))
{
    $_SESSION["atempts"] = 0;
}
if(empty($_POST["username"]) || empty($_POST["password"])){
    header('Location: index.php');
    exit();
}

verifyUser($_POST["username"], $_POST["password"]);

function verifyUser(string $username, string $password): void
{
    $connection = DBC::getConnection();
    $statement = $connection->prepare("SELECT id, username, password FROM users WHERE username = :username LIMIT 1");
    $statement->execute([":username" => $username]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if ($result && password_verify($password, $result["password"])) {
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_name"] = $result["username"];
        $username = $_POST["username"];
        $_SESSION['username'] = $username;
        $_SESSION["loggedin"] = true;
        $_SESSION["atempts"] = 0;
        header('Location: katalog_page.php');
    } else {
        $_SESSION["atempts"] = $_SESSION["atempts"] +1;
        if($_SESSION["atempts"] >= 3)
        {
	        error_log( '' . date('Y-m-d H:i:s') . ' - Login attempt on user: ' . $_POST["username"] . PHP_EOL, 3, "./log.txt");
        }
        header("Location: login_page.php");
    }
}
?>