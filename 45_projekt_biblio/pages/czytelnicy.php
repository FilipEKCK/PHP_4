<h1>Czytelnicy</h1>
<?php
$query = "select * from czytelnicy";
$result = mysqli_query($conn, $query); ?>
<p>Tabela czytelnicy zawiera <?= mysqli_num_rows($result) ?> rekordów</p>

<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="small">
        <tr>
            <th>L.P</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Adres</th>
            <th>Kod</th>
            <th>Miasto</th>
            <th>Data zapisania</th>
            <th>Data skreślenia</th>
            <th>Nr dowod</th>
            <th>Funkcja</th>
            <th>Płeć</th>
        </tr><?php
        while ($sql = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $sql['Nr_czytelnika'] ?></td>
                <td><?= $sql['Imie'] ?></td>
                <td><?= $sql['Nazwisko'] ?></td>
                <td><?= $sql['Data_ur'] ?></td>
                <td><?= $sql['Ulica'] ?></td>
                <td><?=  substr(str_pad($sql['Kod'], 5, '0', STR_PAD_LEFT), 0, 2) . '-' . substr(str_pad($sql['Kod'], 5, '0', STR_PAD_LEFT), 2) ?></td>
                <td><?= $sql['Miasto'] ?></td>
                <td><?= $sql['Data_zapisania'] ?></td>
                <td><?= $sql['Data_skreslenia'] ?></td>
                <td><?= $sql['Nr_legitymacji'] ?></td>
                <td><?= $sql['Funkcja'] ?></td>
                <td><?= $sql['Plec'] ?></td>
            </tr><?php
        }
        ?>
    </table><?php } else {
    echo "Brak wyników";
} ?>