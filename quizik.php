<?php Session_start();
if (!isset($_SESSION['nr_pytania'])) 
    $_SESSION['nr_pytania'] = 1;
    $_SESSION['score'] = 0; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'pytania_odpowiedzi.php' ?>
<form method="post">
<div>
    <H1>QUIZ O WSZYSTKIM</H1><br>
    <p>Pytanie <?= $c</p>

    
</div>
</form>







</body>
</html>