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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            session_start();
              if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                echo '<li class="nav-item">';
                echo  '<a class="nav-link active" aria-current="page" href="logout.php">Log out</a>';
                echo '</li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="data.php">Data</a>';
                echo ' </li>';
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="threads_page.php">Threads</a>';
                echo ' </li>';
              }else{
                echo '<li class="nav-item">';
                echo  '<a class="nav-link active" aria-current="page" href="login_page.php">Login</a>';
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
            <p>Your text goes here. This text block has a white background and occupies 60% of the width, with 20% space on either side.</p>
        </div>
    </div>
</body>
</html>