<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <?php include 'menu.php' ?>
   <BR>
   <h1>Strona Logowania</h1>
   <?php 
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (isset($_POST['login']) && isset($_POST['pass']) && $_POST['login'] == 'Admin' && $_POST['pass'] == 'Admin123') {
         echo "<p>Logowanie zakończone pomyślnie</p>";
         $_SESSION['Login'] = $_POST['login'];
         $_SESSION['pass'] = $_POST['pass'];
         $_SESSION['login_status'] = true;
      } elseif (!isset($_POST['wyloguj'])) {
         echo "<p>Logowanie niezakończone pomyślnie, błędny login lub hasło.</p>";
      }
   }

   if (isset($_POST['wyloguj'])) {
      session_unset();
      session_destroy();
      $_SESSION = []; // Zapewnia, że $_SESSION nie będzie używane dalej w tym żądaniu
   }

   if (!empty($_SESSION['login_status']) && $_SESSION['login_status'] == true) { ?>
      <form method="post">
         <input type="submit" value="Przycisk do wylogowania, naciśnij jeżeli chcesz zakończyć podróż" name="wyloguj">
      </form>
   <?php } else { ?>
      <form method="post">
         <label for="login">Login:</label><br>
         <input type="text" name="login" id="login" autofocus required placeholder="login">
         <br><br>
         <label for="password">Hasło:</label><br>
         <input type="password" required name="pass" id="password" placeholder="hasło:">
         <br><br>
         <input type="submit" value="Zaloguj">
      </form>
   <?php } 
  
   ?>
</body>  
</html>