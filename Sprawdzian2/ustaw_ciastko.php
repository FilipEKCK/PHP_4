<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="title">Nazwa<sup>*</sup>:</label><br><input type="text" name="title" id="title"
            value="favorite_band" required readonly><br><br>
        <label for="disc">Zawartość ciastka<sup>*</sup>:</label><br><textarea name="disc" id="disc" required
            placeholder="zawartość"><?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo $_POST['disc'];
            } ?></textarea>
            <br><br>
        <label for="num">Wygasa:</label><br><input type="number" name="num" id="num"
            value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                echo $_POST['num'];
            } else {
                echo '60';
            } ?>" step="60">
            <br><br>
        <input type="submit" value="Ustaw">
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $disc = $_POST['disc'];
        $num = $_POST['num'];
        setcookie($title, $disc, time() + $num, "/");
    }
    ?><br>
    <a href="strona_glowna.php">Strona Główna</a>
</body>

</html>