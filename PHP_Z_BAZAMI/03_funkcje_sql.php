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
    $query = "Select upper(concat(imie, ' ', nazwisko)) as Pracownicy from pracownicy";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        ?><ul><?php
         while ($sql=mysqli_fetch_assoc($result)) {
         ?><li><?= $sql['Pracownicy']?></li> 
         <?php } ?><ul><?php
    } else {
        echo "Brak wyników";
    }
     ?>
     
</body>
</html>