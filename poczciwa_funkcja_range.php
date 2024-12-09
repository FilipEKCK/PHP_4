<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $parzyste= range(0, 12, 2); ?>
    <pre>
    <?php   print_r($parzyste) ?>
    </pre>
    <?php $dziesiatki= range(-10, 100, 10);
          $polowki= range(-5.5, 5.5, 0.5);
          $litery_od_em= range('m', 'u');
          $litery_wstecz= range('X', 'E', );
          foreach ($parzyste as $wartosc)
          {
            echo "$wartosc ";
          }
          ?><br><br>
          <?php foreach ($dziesiatki as $wartosc)
          {
            echo "$wartosc ";
          } 
          ?><br><br>
          <?php foreach ($polowki as $wartosc)
          {
            echo "$wartosc ";
          } 
          ?>
          <br><br>
          <?php foreach ($litery_od_em as $wartosc)
          {
            echo "$wartosc ";
          } 
          ?><br><br>
          <?php foreach ($litery_wstecz as $wartosc)
          {
            echo "$wartosc ";
          } 
          ?>
</body>
</body>
</html>