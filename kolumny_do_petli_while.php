<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            background-color:greenyellow;
            border:solid 1px green;
            padding:10px;
        }
        table {
            border-collapse:collapse
        }
    </style>
</head>
<body>
    <table>
    <tr>
        <?php $n=1;
        do
        { ?>
    <td>To jest kolumna numer <?= $n?></td>
    <?php $n++;
     }
    

  while($n<=5)
  ?>
             
              </tr>
        
    </table>
</body>
</html>