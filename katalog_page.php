<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #333;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline ">
              <li class="nav-item">
              <a class="nav-link" href="index.php" style="color:white;">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" href="#" style="color:white">Katalog</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="borrowed_page.php" style="color:white">Moje půjčky</a>
              </li>
              <?php
              if($_SESSION["username"] === "admin"){
                echo '<li class="nav-item">';
                echo  '<a class="nav-link" aria-current="page" href="adding_page.php" style="color:white">Add Book</a>';
                echo '</li>';
              }
              ?>
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php" style="color:white">Log out</a>
              </li>
            </ul>
          </div>
          <a class="navbar-brand" href="#" style="color:white;"><img src="/img/favicon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> Městská knihovna Praha</a>
        </div>
      </nav>
      <div class="outer-container">
        <div class="inner-container">
        <?php
        require_once "./classes/DBC.php";

        // Dotaz pro získání všech příspěvků
        $query = DBC::getConnection()->query("SELECT * FROM allbooks;");
        $books = $query->fetchAll();

        // Vypsání příspěvků
        foreach ($books as $b) {
           echo '<div>';
            echo '<p>Name:' . $b['bookname'] . '</p>';
            echo '<p>Author name: ' . $b['authorname'] . '</p>';
            echo '<p>Author surename: ' . $b['authorsurename'] . '</p>';
            echo '<p>Genre: ' . $b['genrename'] . '</p>';
            echo '<p>Release Date: ' . $b['release_date'] . '</p>';
              echo '<form action="borrow.php" method="post">';
              echo '<input type="hidden" name="bookname" value="' . $b['bookname'] . '">';
              echo '<input type="submit" value="Borrow">';
              echo '</form>';
            echo '</div>';
            echo '<br>';
        }
        ?>

        </div>
    </div>
    <footer>
      <p>Made By Adam Hlaváčik</p>
    </footer>
</body>
</html>