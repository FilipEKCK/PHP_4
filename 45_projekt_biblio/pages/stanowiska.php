<h1>Stanowiska</h1>
<?php
$query = "select * from stanowiska";
$result = mysqli_query($conn, $query); ?>
<p>Tabela stanowiska zawiera <?= mysqli_num_rows($result) ?> rekordów</p>
<?php
if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
        <tr>
            <th>Id stanowiska</th>
            <th>Nazwa</th>  
        </tr><?php
        while ($sql = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $sql['Id_stanowisko'] ?></td>
                <td><?= $sql['Nazwa'] ?></td>
            </tr><?php
        }
        ?>
    </table><?php } else {
    echo "Brak wyników";
} ?>