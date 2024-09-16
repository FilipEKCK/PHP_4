<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $znaki = "Ala ma kota"; $liczba = 69; $przecinek = 26.06; $bool = (FALSE); ?>
    
   <p>echo dla ciągu znaków: <?= $znaki ?> </p> 
   <p>echo dla liczby całkowitej <?= $liczba ?> </p> 
   <p>echo dla liczby rzeczywistej: <?= $przecinek?> </p> 
   <p>echo dla wartości boolyn: <?= $bool?> </p> 
   <hr>
   <p> var_dump dla ciągu znaków: <?php var_dump($znaki)  ?> </p>
   <p> var_dump dla ciągu liczby całkowitej: <?php var_dump($liczba)  ?> </p>
   <p> var_dump dla liczby rzeczywistej: <?php var_dump($przecinek)  ?> </p>
   <p> var_dump dla wartości boolyn: <?php var_dump($bool)  ?> </p>
   <hr>
    <?php define("Pierwsza", 1997); define("Druga", "Vagheyar")?>
    <p> print dla pierwszej stałej: <?php print(Pierwsza) ?></p>
    <p> print dla drugiej stałej: <?php print(Druga) ?></p>
    <hr>
    <p> var_export dla pierwszej stałej: <?php var_export(Pierwsza) ?></p>
    <p> var_export dla drugiej stałej: <?php var_export(Druga) ?></p>




</body>
</html>