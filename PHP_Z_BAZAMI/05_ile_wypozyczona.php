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
    $hostname='localhost';
    $username='smorag';
    $password='maslo';
    $database='smorag';    
   $conn = mysqli_connect($hostname, $username, $password, $database);
    if(!$conn){
        ?><p> Jest jakis błąd ziomeczku <?= mysqli_connect_error($conn) ?></p><?php ;
    } else {
        ?><p>Jest wszystko git</p> <?php
    }
    $query = "SELECT nr_transakcji, data_wypozyczenia, data_zwrotu, datediff(ifnull(data_zwrotu,now()),data_wypozyczenia) as dni from wypozyczenia order by dni;";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
       ?>
            <table>
                <tr>
                    <th>Numer transakcji</th>
                    <th>Data wypożyczenia</th>
                    <th>Data zwrócenia</th>
                    <th>Liczba dni</th>
                    
                </tr><?php
                while ($sql = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?= $sql['nr_transakcji'] ?></td>
                        <td><?= $sql['data_wypozyczenia'] ?></td>
                        <td><?= $sql['data_zwrotu'] ?></td>
                        <td><?= $sql['dni'] ?></td>
                        
                    </tr><?php
    
                } ?>
            </table> <?php
    } else {
        echo "Brak wyników";
    }
     ?> 
</body>
</html>