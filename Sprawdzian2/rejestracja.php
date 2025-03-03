<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        sup {
            color: red;
        }
        fieldset {
            border:  solid 4px yellowgreen;
        }
    </style>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Rejestracja</legend>
            <label for="login">Login:<sup>*</sup></label> <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                 if($_POST['login']== ''){
                     echo 'Login jest wymagany';
                     }
                     }   ?><br>
            <input id="login" type="text" name="login"><br>
            <label for="pass">Hasło:<sup>*</sup></label><?php if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                 if($_POST['pass']== ''){
                     echo 'Hasło jest wymagane';
                     }
                     } ?>  <br>
            <input id="pass" type="password" name="pass"><br>
            <label>Wybierz jedną rolę:<sup>*</sup></label> <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (!isset($_POST['role'])) {
                    echo 'Wybierz jedną rolę';
                }
            } ?> <br>
            <input type="radio" name="role" value="User" id="user"><label>Użytkownik</label><br>
            <input type="radio" name="role" value="Author" id="author"><label>Autor</label><br>
            <input type="radio" name="role" value="Redakthor" id="red"><label>Redaktor</label><br>
            <input type="radio" name="role" value="Administrathor" id="admin"><label>Administrator</label><br>
            <input type="submit" value="Zarejestruj">
        </fieldset>
    </form>
</body>

</html>