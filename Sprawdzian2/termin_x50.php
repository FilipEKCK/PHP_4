<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid lightgray;
            padding: 5px;
        }
        .colspan{
             text-align:center;
        }
    </style>
</head>
<body>
<form><table>
    <caption>Terminy</caption>
        <?php 
        for ($i=0; $i<=50; $i++){
       ?> <tr><td><label for="termin<?=$i?>">Termin <?=$i?>:</label></td><td><input type='date' id="termin<?=$i?>"></td></tr>   <?php
        }
        ?>
        <tr><td colspan="2" class="colspan"><input type="submit" value="zatwierdz" ></td></tr>
    </table></form>

</body>
</html>