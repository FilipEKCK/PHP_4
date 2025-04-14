<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 p{
    font-family:Arial;
    color:cornflowerblue;
    font-size:large;
    text-shadow: 1px 1px blue;
 }
    </style>
</head>
<body>
    <p><?php $suma=0; 
    for($i=10;$i<=99;$i++){
        if ($i%2==0) {
        echo "$i | ";
        $suma=$suma+$i;
        }
    } 
    ?></p>
    <p>Suma powyższych liczb jest równa <?= $suma ?></p>
</body>
</html>