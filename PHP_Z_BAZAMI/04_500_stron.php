<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse:collapse;
        }
        td,th {
            border:solid 1px black;
            padding:3px;
        }
    </style>
</head>

<body>
    <?php
    $hostname = 'localhost';
    $username = 'smorag';
    $password = 'maslo';
    $database = 'smorag';
    $conn = mysqli_connect($hostname, $username, $password, $database);
    if (!$conn) {
        ?>
        <p> Jest jakis błąd ziomeczku <?= mysqli_connect_error($conn) ?></p><? php;
    } else {
        ?>
        <p>Jest wszystko git</p> <?php
    }
    $query = "select sygnatura, tytul, concat(imie, ' ', nazwisko) as autor, dzialy.nazwa, wydawnictwo, rok_wyd, objetosc_ks, cena from ksiazki inner join dzialy on ksiazki.id_dzial=dzialy.id_dzial where objetosc_ks>500 order by objetosc_ks";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        ?>
        <table>
            <tr>
                <th>Sygnatura</th>
                <th>Tytuł</th>
                <th>Autor</th>
                <th>Dział</th>
                <th>Wydawnictwo</th>
                <th>Rok wydania</th>
                <th>Liczba stron</th>
                <th>Cena</th>
            </tr><?php
            while ($sql = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?= $sql['sygnatura'] ?></td>
                    <td><?= $sql['tytul'] ?></td>
                    <td><?= $sql['autor'] ?></td>
                    <td><?= $sql['nazwa'] ?></td>
                    <td><?= $sql['wydawnictwo'] ?></td>
                    <td><?= $sql['rok_wyd'] ?></td>
                    <td><?= $sql['objetosc_ks'] ?></td>
                    <td><?= $sql['cena'] ?></td>
                </tr><?php

            } ?>
        </table> <?php
    } else {
        echo "Brak wyników";
    }
    ?>
</body>

</html>

















