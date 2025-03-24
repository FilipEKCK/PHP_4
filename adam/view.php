<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dir = "C:/Users/ct21smoragf/Documents/GitHub/PHP_4/materialy"; 

if (isset($_GET['file'])) {
    $file = $_GET['file'];
    $filePath = $dir . DIRECTORY_SEPARATOR . $file;

    if (file_exists($filePath) && is_file($filePath)) {
        echo "<h2>Zawartość pliku: $file</h2>";
        echo "<pre>" . htmlspecialchars(file_get_contents($filePath)) . "</pre>";
    } else {
        echo "Plik nie istnieje!";
    }
} else {
    echo "Nie podano pliku do wyświetlenia.";
}
?>
</body>
</html>