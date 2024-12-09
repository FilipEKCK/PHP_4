<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width:100%;
            table-layout:fixed;
            border-collapse:collapse;
        }
        td {
            background-color: aliceblue;
            border: dodgerblue solid 2px;
            padding-top: 10px;
            padding-bottom: 10px;
            color:blue;
            text-align:center;
        }
    </style>
</head>
<body>
    <table><tr>
    <?php $tablica1= range(0,10);
          shuffle($tablica1);
          foreach ($tablica1 as $wartosc)
          { ?>
          <td> <?php echo "$wartosc "?></td> 
          <?php } ?>
          </tr></table>
</body>
</html>