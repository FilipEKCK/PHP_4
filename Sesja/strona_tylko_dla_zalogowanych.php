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
    <?php include 'menu.php'; ?>
    <br>
    <H1>Strona tylko dla zalogowanych</H1>
   <?php if (isset($_SESSION['login_status'])){
        include 'print_r.php';
    }
    else {
        ?><p>Nie jesteś zalogowany, wróć na ta strone po logowaniu by wyświetlić zawartość</p> <?php 
    }
    ?>
    
</body>
</html>