<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $query = "select tytul, imie, nazwisko, wydawnictwo, miejsce_wyd, rok_wyd, objetosc_ks, cena, dzialy.nazwa from ksiazki inner join dzialy on Ksiazki.id_dzial=dzialy.id_dzial";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
         while ($sql=mysqli_fetch_assoc($result)) {
         ?><p>"<?= $sql['tytul']?>" - <?= $sql['imie'] . " " . $sql['nazwisko']?>, wydawnictwo <?= $sql['wydawnictwo']?> (<?= $sql['miejsce_wyd'] . " " . $sql['rok_wyd']?>), <?= $sql['objetosc_ks']?> str. Cena: <?= $sql['cena']?> zł (dział: <?= $sql['nazwa'] ?>)</p>    
        <?php }
    } else {
        echo "Brak wyników";
    }
     ?>
     
</body>
</html>