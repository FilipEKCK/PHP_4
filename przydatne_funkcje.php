<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="white">Usuń "białe" znaki</label><input type="text" id="white" name="puste_znaki"><br>
    <label for="strips">Usuń ukosniki (backslash)</label><input type="text" id="strips" name="ukosniki"><br>
    <label for="special">Zamień znaki html na tzw. encje</label><input type="text" id="special" name="encje_html"><br>
    <input type="submit" value="wyślij"><br>
    </form>
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST'){ ?>
    Tekst z pola <em>puste_znaki</em> bez funkcji <strong>trim</strong>: <?php var_dump($_POST['puste_znaki']);?><br>
    Tekst z pola <em>ukosniki</em> bez funkcji <strong>stripslashes</strong>: <?php var_dump($_POST['ukosniki']);?><br>
    Tekst z pola <em>encje_html</em> bez funkcji <strong>htmlspecialchars</strong>: <?php var_dump($_POST['encje_html']);?><br>
    <br>
    Tekst z pola <em>puste_znaki</em> z zastosowaniem <strong>trim</strong>: <?php var_dump(trim($_POST['puste_znaki']));?><br>
    Tekst z pola <em>ukosniki</em> z zastosowaniem <strong>stripslashes</strong>: <?php var_dump(stripslashes($_POST['ukosniki']));?><br>
    Tekst z pola <em>encje_html</em> z zastosowaniem <strong>htmlspecialchars</strong>: <?php var_dump(htmlspecialchars($_POST['encje_html']));?><br>
   <?php }
    ?>
</body>
</html>