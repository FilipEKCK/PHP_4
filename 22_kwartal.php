<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kwartał</title>
    <style>
        h1{
            border-top:4px dotted pink;
            border-bottom:4px dotted pink;

        }
        body {
            text-align:center;
        }
        h3{
            border-top:2px dashed pink;
            border-bottom:2px dashed pink;
            font-family: cursive;
        }
        </style>
</head>
<body>
    <h2 style="color:darkorchid";>
 <?php
   $miesiąc=rand(1,15);
   ?>
   <h1>
    <?php echo $miesiąc ?>
</h1>
<h3>
   <?php 
   switch ($miesiąc) {
case  1:
     case 2:
        case 3:
            echo "Pierwszy kwartał";
             
                         }
   ?>
 <?php switch($miesiąc) {
case  4:
     case 5:
        case 6:
            echo "Drugi kwartał";
             
                         }
   ?>
    <?php switch ($miesiąc) {
case  7:
     case 8:
        case 9:
            echo "Trzeci kwartał";
            
                         }
   ?>
 <?php switch ($miesiąc) {
case  10:
     case 11:
        case 12:
            echo "czwarty kwartał";
             break; 
                         }
   ?>
    <?php switch ($miesiąc) {
        default:
            echo "Błędny numer miesiąca";
             break; 
                         }
   ?>

                        </h3>

   



</body>
</html>