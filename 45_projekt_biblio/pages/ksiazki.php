<h1>Książki</h1>
<?php
$query = "select * from ksiazki inner join dzialy on ksiazki.Id_dzial=dzialy.Id_dzial ";
$result = mysqli_query($conn, $query); ?>
<p>Tabela Książki zawiera <?= mysqli_num_rows($result) ?> rekordów</p>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="small">
        <tr>
            <th>Sygnatura</th>
            <th>Tytuł</th>
            <th>Imie autora</th>
            <th>Nazwisko autora</th>
            <th>Wydawnicto</th>
            <th>Miejsce wydania</th>
            <th>Rok wydania</th>
            <th>Liczba stron</th>
            <th>Cena</th>
            <th>Dział</th>
            
        </tr><?php
        while ($sql = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $sql['Sygnatura'] ?></td>
                <td><?= $sql['Tytul'] ?></td>
                <td><?= $sql['Imie'] ?></td>
                <td><?= $sql['Nazwisko'] ?></td>
                <td><?= $sql['Wydawnictwo'] ?></td>
                <td><?= $sql['Miejsce_wyd'] ?></td>
                <td><?= $sql['Rok_wyd'] ?> r</td>
                <td><?= $sql['Objetosc_ks'] ?> stron</td>
                <td><?= $sql['Cena'] ?> zł</td>
                <td><?= $sql['Nazwa'] ?></td>
                
                
            </tr><?php
        }
        ?>
    </table><?php } else {
    echo "Brak wyników";
} ?>