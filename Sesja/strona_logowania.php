<?php session_start()
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 </head>
 <body>
    <?php include 'menu.php'?>
    <BR>
    <h1>Strona Logowania</h1>
    <?php if (isset($_SESSION['login_status'])){ ?>
     <p></p><?php } else { ?>
    <form method="post">
     <label for="login">Login:</label><br>
     <input type="text" name="login" id="login" autofocus required placeholder="login">
     <br><br>
     <label for="password">Hasło:</label><br>
     <input type="password" required name="pass" id="password" placeholder="hasło:">
     <br><br>
     <input type="submit" value="Zaloguj">
     
     </form> <?php } ?>
     <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if ($_POST['login'] == 'Admin' && $_POST['pass'] == 'Admin123')
        {
         ?> <p>Logowanie zakończone pomyślnie</p>
         <?php $_SESSION['Login'] = $_POST['login']; $_SESSION['pass'] = $_POST['pass']; $_SESSION['login_status'] = true;
         
        } else {
            ?><p>Logowanie niezakończone pomyślnie, błędny login lub hasło.</p> <?php
        }
     }

     
    ?>
    <?php include 'print_r.php' ?> 
    
 </body>
 </html>