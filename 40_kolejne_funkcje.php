<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Kolejne fajne funkcje</h1>
    <p>Include I Require służą do dołączania plikow php, Natomiast include, natomiast jeżeli wystapi błąd, to include go wyświetli ale dalej odpali cały skrypt. A REQUIRE wyrzuci fatal error i zatrzyma skrypt.
        Używa się tego w sytuacjach gdy chcemy dołączyć kompletnie niezbędny plik bez którego działanie strony nie ma sensu. </p><br>
<p><strong>fopen()</strong> Otwiera plik i zwraca wskaźnik do pliku.</p>
<?php
$file = fopen("plik.txt", "w");
fclose($file);
?>

<p><strong>fread()</strong> Odczytuje określoną liczbę bajtów z pliku.</p>
<?php
$file = "plik.txt";

if (file_exists($file) && filesize($file) > 0) {
    $handle = fopen($file, "r");
    echo fread($handle, filesize($file));
    fclose($handle);
} else {
    echo "Plik jest pusty lub nie istnieje.";
}


?>

<p><strong>feof()</strong> Sprawdza, czy osiągnięto koniec pliku.</p>
<?php
$file = fopen("plik.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>

<p><strong>fgets()</strong> Odczytuje pojedynczą linię z pliku.</p>
<?php
$file = fopen("plik.txt", "r");
echo fgets($file);
fclose($file);
?>

<p><strong>fwrite()</strong> Zapisuje tekst do pliku.</p>
<?php
$file = fopen("plik.txt", "w");
fwrite($file, "Hello, world!");
fclose($file);
?>

<p><strong>fclose()</strong> Zamyka otwarty plik.</p>
<?php
$file = fopen("plik.txt", "r");
fclose($file);
?>

</body>
</html>