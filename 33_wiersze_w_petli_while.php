<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            background-color:lightgray;
            border:solid 1px gray;
            padding:10px;
        }
        table {
            border-collapse:collapse
        }
    </style>
</head>
<body>
    <table>
        
            <?php $n=1;
             while($n<=5)
             { ?>
             <tr><td>To jest wiersz numer <?= $n?></td></tr>
             <?php $n++;
              }
              ?>
        
    </table>
</body>
</html>