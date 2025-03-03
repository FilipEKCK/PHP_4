<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Twój ulubiony zespół to 
        <?php if(isset($_COOKIE['favorite_band'])){
      echo $_COOKIE['favorite_band'];
    } else {
        ?> <p></p> <?php
    } ?></h2>
    <br><br><a href="ustaw_ciastko.php">Ustaw ciastko</a>
</body>
</html>