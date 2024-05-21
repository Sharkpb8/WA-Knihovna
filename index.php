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
    <nav class="navbar navbar-expand-lg" style="background-color: #423c3c;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-underline">
            <li class="nav-item">
              <a class="nav-link active" href="#" style="color:white;">Home</a>
            </li>
            <?php
            session_start();
              if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                echo '<li class="nav-item">';
                echo  '<a class="nav-link" aria-current="page" href="logout.php" style="color:white">Log out</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="data.php" style="color:white">Katalog</a>';
                echo ' </li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="threads_page.php" style="color:white">Moje půjčky</a>';
                echo ' </li>';
              }else{
                echo '<li class="nav-item">';
                echo  '<a class="nav-link" aria-current="page" href="login_page.php" style="color:white">Login</a>';
                echo '</li>';

              }
              ?>
            </ul>
          </div>
        </div>
      </nav>
      <!-- <div class="textcenter">
      <p>Vítejte na naší webové stránce!</p>
      <p>Jsme váš průvodce do světa inspirace, objevování a zábavy.</p>
      <p>Nechte se unést naší bohatou paletou obsahu, který osloví vaše smysly, povzbudí vaši kreativitu a posune vaše myšlenky na nové úrovně.</p>
      </div> -->
      <div class="outer-container">
        <div class="inner-container">
            <h1>Knihovna U Zlaté Hvězdy</h1>
            <p>Otevírací Doba</p>
            <ul>
              <li>Po-Pá: 9:00 - 20:00</li>
              <li>So-Ne: 10:00 - 18:00</li>
              <li>Svátky: 10:00 - 16:00</li>
            </ul>
            <p>Kontaktní údaje</p>
            <ul>
              <li>Telefon: +420 123 456 789</li>
              <li>Email: info@knihovna-uzlatehvezdy.cz</li>
              <li>Facebook: <a href="https://www.facebook.com/KnihovnaUZlateHvezdy">KnihovnaUZlateHvezdy</a></li>
            </ul>
        </div>
    </div>
</body>
</html>