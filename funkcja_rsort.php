<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol {
            list-style-type:upper-roman;
        }
    </style>
</head>
<body>
    <?php $numbers = array(rand(0,99), rand(0,99),rand(0,99),rand(0,99),rand(0,99));
    rsort($numbers) ?>
    <ol>
        <?php foreach( $numbers as $wartosc) 
        { ?>
       <li><?php echo $wartosc ?> </li>
       <?php }?>
    </ol>

</body>
</html>