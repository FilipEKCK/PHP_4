<h1>Wypożyczenia</h1>
<?php
$query = "select * from wypozyczenia inner join pracownicy on wypozyczenia.Id_pracownika=pracownicy.Id_pracownika inner join ksiazki on wypozyczenia.Sygnatura=ksiazki.Sygnatura inner join czytelnicy on wypozyczenia.Nr_czytelnika=czytelnicy.Nr_czytelnika";
$result = mysqli_query($conn, $query); ?>
<p>Tabela wypożyczenia zawiera <?= mysqli_num_rows($result) ?> rekordów</p>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>Nr transakcji</th>
            <th>Sygnatura</th>
            <th>Id pracownika</th>
            <th>Nr czytelnika</th>
            <th>Data wypożyczenia</th>
            <th>Data zwrotu</th>
        </tr>
          <?php
        while ($sql = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $sql['Nr_transakcji'] ?></td>
                <td><?= $sql['Tytul'] ?></td>
                <td><?= $sql['pracownicy.Nazwisko'] tu naprawić  ?></td>
                <td><?= $sql['Nazwisko'] ?></td>
                <td><?= $sql['Data_wypozyczenia'] ?></td>
                <td><?= $sql['Data_zwrotu'] ?></td>
       <?php
        }
        ?>
    </table><?php } else {
    echo "Brak wyników";
} ?>