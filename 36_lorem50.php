<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset><legend>lorem50</legend>
        <form method="post">
       <?php if($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <p>Oto wpisany tekst:</p><br>
            <p style="color:red;font-style:italic"><?= $_POST['lorem'] ?></p>
       <?php } else { ?>
        <textarea name="lorem" cols="50" rows="6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta harum cumque nihil omnis, sunt corrupti fugiat inventore sequi unde, aut quibusdam eaque hic provident temporibus soluta. Aspernatur culpa optio incidunt accusamus natus, corrupti pariatur quas qui rerum tempore autem sunt ab provident alias totam magnam quo quis dignissimos unde harum!</textarea><br>
        <input type="submit">
        <?php } ?>
        </form>
    </fieldset>
</body>
</html>