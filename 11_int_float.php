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
<?php $cala1=5; $cala2=8; $czesc1=5.5; $czesc2=6.4; ?>
<fieldset><legend>AD 2.</legend>
 Zmienna $cala1 ma wartość 5 a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($cala1))?> <br><br>
 Zmienna $cala2 ma wartość 8 a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($cala2)) ?>  <br><br>
 Zmienna $czesc1 ma wartość 5,5 a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($czesc1)) ?> <br><br>
 Zmienna $czesc2 ma wartość 6,4 a funkcja is_int() zwraca dla niej wynik: <?= var_dump(is_int($czesc2)) ?> 
 <hr>
 Zmienna $cala1 ma wartość 5 a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($cala1))?> <br><br>
 Zmienna $cala2 ma wartość 8 a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($cala2))?> <br><br>
 Zmienna $czesc1 ma wartość 5,5 a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($czesc1))?> <br><br>
 Zmienna $czesc2 ma wartość 6,4 a funkcja is_float() zwraca dla niej wynik: <?= var_dump(is_float($czesc2))?> <br><br>
</fieldset>
<?php $dodaj = "59.85" + 100 ?>
<fieldset><legend>AD 3.</legend>
Zmienna $dodaj ma wartość 159.85, a funkcja is_numeric() zwraca dla niej wynik: <?= var_dump(is_numeric($dodaj))?> <br><br>
</fieldset>
</body>
</html>