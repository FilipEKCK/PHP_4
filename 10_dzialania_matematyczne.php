<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        fieldset {
            padding:15px;
        }
    </style>
</head>
<body>
 <?php $x=5;
          $y=15;
          ?>
    <fieldset><legend>AD 1.</legend>
Wynik dodawania 5 i 15 wynosi <?= $x + $y ?> <br><br>
Wynik odejmowania 5 i 15 wynosi <?= $x - $y ?><br><br>
Wynik mnożenia 5 i 15 wynosi <?= $x * $y ?><br><br>
Wynik dzielenia 5 przez 15 wynosi <?= $x / $y ?><br><br>
Reszta z dzielenia 5 przez 15 wynosi <?= $x % $y ?><br><br>
</fieldset>
<?php $a=4;
      $b=35
      ?> 
<fieldset><legend>AD 2.</legend>
Obwód prostokąta o bokach długości 4 i 35 jest równy <?= 2*$a + 2*$b  ?> <br><br>
Pole prostokąta o bokach długości 4 i 35 jest równe <?= $a*$b ?>j<sup>2</sup> <br><br>
</fieldset>
<?php $r=16;
      $alfa=93
      ?> 
<fieldset><legend>AD 3.</legend>
Obwód koła o promieniu 9 jest równy <?= round(2*pi()*$r, 2) ?>  <br><br>
Pole koła o promieni 9 jest równe <?= round(pi()*$r**2,2)?> <br><br>
Pole wycinka koła o promieniu 9 i kącie środkowym 95 jest równe <?= round($alfa/360*pi()*$r**2,2)?> <br><br>
</fieldset>
</body>
</html>