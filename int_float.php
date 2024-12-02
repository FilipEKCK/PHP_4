<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>int float</title>
</head>
<body>

<fieldset> <legend>AD.2</legend>
    <?php $int=10; $float=21.37 ?>
   <p>Zmienna $liczba1 ma wartość </p> 
   <?= var_dump(is_int($int)) ?>
   <?= var_dump(is_float($float)) ?>
</fieldset>
<fieldset> <legend>AD.2</legend>
<?php $dodaj="59.85"+100 var_dump(is_numeric($dodaj)) ?>

</body>
</html>