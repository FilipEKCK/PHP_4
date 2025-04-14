<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        legend {
            border-left: solid 3px limegreen;
            border-right: solid 3px limegreen;
        }

        fieldset {
            border: solid 3px limegreen;
        }
    </style>
</head>

<body>
    <form method="POST">
        <fieldset>
            <legend>Najlepszy rok w muzyce</legend>
            <label for="rok">Wybierz najlepszy rok w muzyce:</label> <select required name="rok" id="rok">
                <option value=""> </option>

                <?php foreach (range(1500, 2020) as $rok) {
                    $selected = $_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['rok'] == $rok ? 'selected' : ''; ?>
                    <option <?= $selected ?> value="<?= $rok ?>"><?= $rok ?></option>
                <?php } ?>
            </select>
            <br>
            <input type="submit" value="Wybierz najlepszy rok w muzyce">
    </form>
    <?PHP if (isset($_POST['rok'])) { ?><br><br>
        <?php echo 'Według ciebie najlepszym rokiem w muzyce był rok: ', $_POST['rok'], ".";
    } ?>
    </fieldset>
</body>

</html>