<h1> Pracownicy</h1>
<?php
$query = "select * from pracownicy inner join stanowiska on pracownicy.Id_stanowisko=stanowiska.Id_stanowisko";
$result = mysqli_query($conn, $query); ?>
<p>Tabela Pracownicy zawiera <?= mysqli_num_rows($result) ?> rekordów</p>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Stanowisko</th>
            <th>Miasto</th>
            <th>Data zatrudnienia</th>
            <th>Wynagrodzenie</th>
            
            
        </tr><?php
        while ($sql = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $sql['Id_pracownika'] ?></td>
                <td><?= $sql['Imie'] ?></td>
                <td><?= $sql['Nazwisko'] ?></td>
                <td><?= $sql['Nazwa'] ?></td>
                <td><?= $sql['Miasto'] ?></td>
                <td><?= $sql['Data_zatrudnienia'] ?></td>
                <td><?= $sql['Wynagrodzenie'] ?> zł</td>
                
                
                
            </tr><?php
        }
        ?>
    </table><?php } else {
    echo "Brak wyników";
} ?>