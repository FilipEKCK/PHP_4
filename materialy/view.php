<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea{
            width:100%;
            height:400px;
            background-color:rgb(213, 176, 172);
            border:2px solid black;
        }
        body{
            background-color: rgb(212, 224, 155);
            color:rgb(57, 64, 83);
        }
      div{
       text-align:center;
      }
      input{
        background-color:rgb(86, 163, 166);
        height:50px;
        width:100px;
      }
      h1{
        background-color:rgb(86, 163, 166);
      }
    </style>
</head>
<body>
    <h1>Zawartość pliku <?php $file = $_GET['file'];
    echo $file;
    $dir = "C:/Users/ct21smoragf/Documents/GitHub/PHP_4/materialy";
    if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $plik= fopen($file, "w+");
     fwrite($plik, $_POST['write']);
     fclose($plik);
    }
    
    ?></h1><form method="post">
    
    <textarea name="write"><?php 
    $content = file_get_contents($dir . "/" . $file);
    echo $content;
    ?></textarea><br>
    <div><input type="submit" value="zmień"></div></form>
    <?php  ?>
</body>
</html>