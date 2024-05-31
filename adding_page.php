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
    <title>Add Book</title>
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
                <a class="nav-link " href="katalog_page.php" style="color:white">Katalog</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="borrowed_page.php" style="color:white">Moje půjčky</a>
                </li>
                <?php
                if($_SESSION["username"] === "admin"){
                  echo '<li class="nav-item">';
                  echo  '<a class="nav-link active" aria-current="page" href="#" style="color:white">Add Book</a>';
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
            <p>Form for new book</p>
            <form action="addbook.php" method="post">
                <label for="Name">Book name:</label>
                <input type="text" id="Name" name="Name"><br><br>
                <label for="genre">Genre:</label>
                <input type="text" id="genre" name="genre"><br><br>
                <label for="authorname">Author name:</label>
                <input type="text" id="authorname" name="authorname"><br><br>
                <label for="authorsurename">Author surename:</label>
                <input type="text" id="authorsurename" name="authorsurename"><br><br>
                <label for="releasedate">Release Date (yyyy-mm-dd):</label>
                <input type="text" id="releasedate" name="releasedate"><br><br>
                <input type="submit" value="Add">
            </form>
            <br>
            <br>
            <p>Form for new Genre</p>
            <form action="addgenre.php" method="post">
                <label for="Name">Genre name:</label>
                <input type="text" id="Name" name="Name"><br><br>
                <input type="submit" value="Add">
            </form>
            <br>
            <br>
            <p>Form for new Author</p>
            <form action="addauthor.php" method="post">
                <label for="authorname">Author name:</label>
                <input type="text" id="authorname" name="authorname"><br><br>
                <label for="authorsurename">Author surename:</label>
                <input type="text" id="authorsurename" name="authorsurename"><br><br>
                <input type="submit" value="Add">
            </form>
        </div>
    </div>
    <footer>
      <p>Made By Adam Hlaváčik</p>
    </footer>
</body>
</html>