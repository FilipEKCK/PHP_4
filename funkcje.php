<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $string = "Czesc, piekny i swiecie! " ?>
    <?= $string ?>
<p> <strong>strlen:</strong> Zwraca długość podanego ciągu znaków: <?= strlen($string) ?><br>
<strong>str_word_count:</strong> Zlicza liczbę słów w podanym ciągu znaków: <?php echo(str_word_count($string)) ?><br>
<strong>strrev:</strong> Odwraca podany ciąg znaków: <?= strrev($string) ?><br>
<strong>strpos:</strong> Znajduje pozycję pierwszego wystąpienia podciągu w ciągu znaków: <?= strpos($string, "swiecie") ?> <br>
<strong>str_replace:</strong> Zastępuje wszystkie wystąpienia podciągu innym podciągiem. <?= str_replace("Czesc", "Zegnaj", $string) ?><br>
<strong>strtolower:</strong> Konwertuje wszystkie znaki w ciągu na małe litery. <?= strtolower($string) ?><br>
<strong>strtoupper:</strong> Konwertuje wszystkie znaki w ciągu na wielkie litery. <?= strtoupper($string) ?> <br> 
<strong>ucwords:</strong> Konwertuje pierwszy znak każdego słowa w ciągu na wielką literę. <?= ucwords($string) ?> <br>
<strong>trim:</strong> Usuwa białe znaki (spacje, tabulatory) z początku i końca ciągu. <?= trim($string) ?> <br>
<strong>strstr:</strong> Znajduje pierwsze wystąpienie podciągu w ciągu znaków i zwraca resztę ciągu od tego miejsca. <?= strstr($string, "piekny") ?><br> 
<strong>substr:</strong> Zwraca podciąg z ciągu znaków, zaczynając od określonej pozycji. <?= substr($string, 7, 6 ) ?><br>
<strong>str_pad:</strong> Dopisuje znaki do ciągu, aby osiągnąć określoną długość. </p> <?= str_pad($string, 40, "!") ?>
</body>
</html>