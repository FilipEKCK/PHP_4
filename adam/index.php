<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dir = "C:/Users/ct21smoragf/Documents/GitHub/PHP_4/materialy"; // Ścieżka do katalogu
$files = array_diff(scandir($dir), array('.', '..')); // Pobieramy pliki, usuwamy "." i ".."

echo "<h2>Zawartość katalogu: $dir</h2>";
echo "<ul>";

foreach ($files as $file) {
    $filePath = $dir . DIRECTORY_SEPARATOR . $file; 
    if (is_file($filePath)) { // Sprawdzamy, czy to plik, a nie folder
        $size = filesize($filePath);
        echo "<li>
                <a href='view.php?file=" . urlencode($file) . "'>$file</a> 
                - $size bajtów
              </li>";
    }
}
echo "</ul>";
?>
</body>
</html>