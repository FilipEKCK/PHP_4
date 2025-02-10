<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Liczby dwucyfrowe podzielne przez 22: <?php for($i=10; $i<=100; $i++) 
    {
        if($i%22==0){
            echo $i, " ";
        } 
    } ?> </p>
    <p> Iloczyn liczb dwucyfrowych podzielnych przez 22 jest równy <?php $liczba=1;
     for($i=10; $i<=100; $i++){
        if($i%22==0){
            $liczba= $liczba*$i;
            
        }
        ;
    } 
    echo $liczba;
    ?> </p>
</body>
</html>