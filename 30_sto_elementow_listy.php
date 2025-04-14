<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol {
            list-style:upper-roman;
            margin-left:40px;
        }
    </style>
</head>
<body>
    <ol>
        <?php for($n=1; $n<=100;$n++)
        { ?>
         <li>To jest <?= $n?>. element listy</li>
        <?php
        }
        ?>
    </ol>
</body>
</html>