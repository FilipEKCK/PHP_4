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
    <H1>Jakie powinno być dobre hasło?</H1>
    <?php if(isset($_COOKIE['Ciacho'])){
      echo $_COOKIE['Ciacho'];
    } else {
        ?> <p>No właśnie, jakie?</p> <?php
    }
     include 'stopka.php'?>
    


</body>

</html>