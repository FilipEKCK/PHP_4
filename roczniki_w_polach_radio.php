<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset {
            border: 2px solid black;
        
        }
    </style>
</head>
<body>
    <form>
    <fieldset><legend>Roczniki</legend>
  <?php for ($i = 0; $i <=15; $i++) 
  { ?>
  <input type="radio" name="roczniki" value="<?= 2010 + $i ?>" id="<?= 2010 + $i ?>" >
  <label for="<?= 2010 + $i ?>"><?= 2010 + $i ?></label>
  <br> <?php ; 
  }   ?>
</fieldset></form>
</body>
</html>