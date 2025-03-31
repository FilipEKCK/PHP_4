<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $mies=date('t')?>
    <style>
        td {
            border:solid black 2px;
            padding:20px
        }
        table {
            border-collapse:collapse
        }
    </style>
</head>
<body>
    <table><caption><?= $mies?></caption><tr>
    <?php for($i=1;$i<=$mies;$i++) {
     if ($i%7==0)
     echo "<td>$i</td></tr><tr>";
    else
    echo "<td>$i</td>";
    }
    ?>
    </tr>
   
    </table>
    
</body>
</html>