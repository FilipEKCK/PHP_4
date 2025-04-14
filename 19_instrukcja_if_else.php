<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instrukcja if i else </title>
</head>
<body>

<h2 style="text-align:center; color:darkorchid">
<?php 
$losowa = rand(1,30) ;
echo $losowa;
?>

</h2> 

<h4 style="text-align:center; color:magenta"> 
    <?php
 if ($losowa >= 20) 
echo "Wylosowana liczba jest większa lub równa 20" ?>
<h4 style="text-align:center; color:navy">
<?php
if ($losowa % 2 == 0) 
echo "Jest parzyste";
else echo "jest nieparzysta";
?>
</h4>

<h4 style="text-align:center; color:deeppink">
    <?php 
    if($losowa<=10) echo "pierwsza dziesiątka";
    elseif  ($losowa<=20)     echo "druga dziesiątka"; 
    else echo "trzecia dziesiątka";
    ?>
    </h4>
</body>
</html>