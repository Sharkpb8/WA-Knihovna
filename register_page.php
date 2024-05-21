<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg " style="background-color: #423c3c;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color:white;">Home</a>
            </li>
            <?php
            session_start();
              if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                echo '<li class="nav-item">';
                echo  '<a class="nav-link " aria-current="page" href="logout.php">Log out</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="data.php">Data</a>';
                echo ' </li>';
              }else{
                echo '<li class="nav-item">';
                echo  '<a class="nav-link active" aria-current="page" href="login_page.php" style="color:white">Login</a>';
                echo '</li>';
              }
              ?>
            </ul>
          </div>
        </div>
      </nav>

      <div class="outer-container">
      <div class="inner-container">
      <form action="register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Submit">
    </form>
    </div>
    </div>

</body>
</html>