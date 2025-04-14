<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 45%;

    }

    td,
    th {
        border: dotted 1px black;
        padding: 3px;
    }
</style>

<body>
    <?php $movies = array(
        "Skazani na Shawshank" => "dramat",
        "Nietykalni" => "biograficzny",
        "Władca Pierścieni: Powrót króla" => "fantasy",
        "Pulp Fiction" => "gangsterski",
        "Siedem" => "kryminał",
        "Podziemny krąg" => "thriller",
        "Django" => "western",
        "Król Lew" => "animacja",
        "Avengers: Wojna bez granic" => "akcja",
        "Dobry, zły i brzydki" => "western"
    );

    ?>
    <table style="float:left;">
        <caption>Sortowanie rosnąco według wartości asort</caption>
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
        <?php asort($movies);
        foreach ($movies as $key => $value) { ?>
            <tr><?php echo "<td>$key</td><td>$value</td>" ?> </tr>
        <?php } ?>

    </table>
    <table style="float:right;">
        <caption>Sortowanie rosnąco według kluczy ksort</caption>
        <tr>
            <th>Klasa</th>
            <th>Wartość</th>
        </tr>
        <?php ksort($movies);
        foreach ($movies as $key => $value) { ?>
            <tr><?php echo "<td>$key</td><td>$value</td>" ?> </tr>
        <?php } ?>

    </table>

<table style="width:100%"><tr><td style="border:none"></td></tr></table><br>


    
    <table style="float:left;">
        <caption>Sortowanie malejąco według wartości rsort</caption>
        <tr>
            <th>Klasa</th>
            <th>Wartość</th>
        </tr>
        <?php arsort($movies);
        foreach ($movies as $key => $value) { ?>
            <tr><?php echo "<td>$key</td><td>$value</td>" ?> </tr>
        <?php } ?>

   </table>
    <table style="float:right;">
        <caption>Sortowanie malejąco według kluczy krsort</caption>
        <tr>
            <th>Klasa</th>
            <th>Wartość</th>
        </tr>
        <?php krsort($movies);
        foreach ($movies as $key => $value) { ?>
            <tr><?php echo "<td>$key</td><td>$value</td>" ?> </tr>
        <?php } ?>

    </table>
</body>

</html>