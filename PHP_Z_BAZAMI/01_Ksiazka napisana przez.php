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
    $query = "Select tytul, Imie, Nazwisko from ksiazki";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
         while ($sql=mysqli_fetch_assoc($result)) {
            ?> <p> Książka <i>"<?= $sql["tytul"] ?>"</i> została napisana przez <strong> <?= $sql["Imie"] . " " . $sql['Nazwisko']?> </strong></p>
        <?php }
    } else {
        echo "Brak wyników";
    }
     ?>
     
</body>
</html>