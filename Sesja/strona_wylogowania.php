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
    <?php include 'menu.php' ?><br>
    <H1>Strona Wylogowania</H1>
    <form method="post">
        <?php if (isset($_SESSION['login_status'])) { ?>
        <input type="submit" value="Przycisk do wylogowania, naciśnij jeżeli chcesz zakończyć podróż">
        <?php } ?>
    </form>
    <?php if ($_SERVER['REQUEST_METHOD']=== 'POST'){
       session_unset();
       session_destroy();
   }
   include 'print_r.php';
     ?>
</body>
</html>