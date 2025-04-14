<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Pliki w katalogu <span>materialy/</span></h1>
    <?php
    $dir = "C:/Users/ct21smoragf/Documents/GitHub/PHP_4/materialy";
    $files = array_diff(scandir($dir), array('.', '..'));
    ?> <br>
    <ul>
        <?php foreach ($files as $file) {
            $size= filesize(  $dir . DIRECTORY_SEPARATOR . $file);
            echo "<li><a href='view.php?file=$file'>$file</a>  $size  KB</li>";
        }
        ?>
    </ul>
</body>

</html>