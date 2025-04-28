<h1>Działy</h1>
<?php
$query = 'Select * from dzialy';
$result = mysqli_query($conn, $query); ?>
<p>Tabela działy zawiera <?= mysqli_num_rows($result) ?> rekordów</p>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>Id działu</th>
            <th>Nazwa</th>
        </tr>
        <?php
        while ($sql = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $sql['Id_dzial'] ?></td>
                <td><?= $sql['Nazwa'] ?></td>
            </tr>
            <?php
        } ?>
    </table>
<?php
} else {
    echo 'Brak wyników';
}
?>