<?php
session_start();

$questions = [
    ["Stolica Włoch to:", "Rzym"],
    ["Ile wynosi 8 + 12?", "20"],
    ["Największa planeta w Układzie Słonecznym to:", "Jowisz"],
    ["Który kontynent jest najmniejszy?", "Australia"]
];

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
    $_SESSION['current_question'] = 0;
    $_SESSION['last_feedback'] = "";
}

$quiz_finished = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['answer'])) {
    $index = $_SESSION['current_question'];
    $user_answer = trim($_POST['answer']);
    $correct_answer = $questions[$index][1];
    
    if (strcasecmp($user_answer, $correct_answer) == 0) {
        $_SESSION['score']++;
        $_SESSION['last_feedback'] = "Poprawna odpowiedź!";
    } else {
        $_SESSION['last_feedback'] = "Niepoprawna odpowiedź. Prawidłowa to: <strong>$correct_answer</strong>";
    }
    
    $_SESSION['current_question']++;
    
    if ($_SESSION['current_question'] >= count($questions)) {
        $quiz_finished = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-color: #ddd;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 15px;
            border: 1px solid #aaa;
            display: inline-block;
            text-align: center;
        }
        h1, h2 {
            color: black;
        }
        p {
            font-size: 16px;
        }
        input[type="text"] {
            padding: 5px;
            font-size: 14px;
            border: 1px solid #000;
            width: 70%;
            margin: 5px 0;
        }
        button {
            padding: 5px 15px;
            font-size: 14px;
            border: 1px solid black;
            background-color: #bbb;
            color: black;
        }
        button:hover {
            background-color: #999;
        }
        .feedback {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: red;
        }
        .score {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
            color: blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Quiz</h1>
        
        <?php if ($quiz_finished): ?>
            <h2>Koniec quizu!</h2>
            <p class="score">Twój wynik: <?php echo $_SESSION['score']; ?> / <?php echo count($questions); ?></p>
            <a href="?reset=true">
                <button>Spróbuj ponownie</button>
            </a>
            <?php session_destroy(); ?>
        <?php else: ?>
            <?php if (!empty($_SESSION['last_feedback'])): ?>
                <p class="feedback"> <?php echo $_SESSION['last_feedback']; ?> </p>
                <p class="score">Aktualny wynik: <?php echo $_SESSION['score']; ?> / <?php echo $_SESSION['current_question']; ?></p>
                <form method="POST">
                    <button type="submit" name="next">Dalej</button>
                </form>
                <?php $_SESSION['last_feedback'] = ""; ?>
            <?php else: ?>
                <form method="POST">
                    <p><?php echo $questions[$_SESSION['current_question']][0]; ?></p>
                    <input type="text" name="answer" required>
                    <button type="submit">Odpowiedz</button>
                </form>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
