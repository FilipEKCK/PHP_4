<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <?php if($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <p>Oto twój wybór:<?= " ",  $_POST['kwota'] ?>  <?= $_POST['waluta'] ?></p>
        <?php }
         else { ?>
            <label for="kwota">Podaj kwotę:</label><input id="kwota" type="number" value="kwota" name="kwota"><br><br>
            <label for="waluta">Wybierz walutę:</label><select id="waluta" name="waluta">
            <option value="Dolary">Dolar USA</option>
            <option value="Euro">Euro</option>
            <option value="Funty Szwajcarskie">Frank szwajcarski</option>
            <option value="Funty szterlinga">Funt szterling</option>
        </select><br><br>
        <input type="submit" value="Wybierz">
            <?php } ?>
    </form>
</body>
</html>