<!DOCTYPE html>
<html>
<head>
    <title>Finale</title>
    <meta charset="utf-8" />
    <!-- Link Style sheet -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    $answer = $_POST["answer"];

    if (!(isset($_COOKIE['money']))) {
        if (!($answer == "D")) {
            header("Location: ./wrong.php");
            exit();
        } else {
            // Set the cookie and initialize the money variable
            setcookie('money', 1000000);
            $money = 1000000;

            // Append the score to the data.txt file
            $file = './data/data.txt';
            $scoreToAppend = $money . "\n";
            file_put_contents($file, $scoreToAppend, FILE_APPEND);
        }
    }
    ?>
  
    <div class="login-box">
        <form action="./startreg.php" method="post">
            <img class="final-img" src="../data/logo.png" alt="Logo" class="center">
            <?php 
            if (isset($_COOKIE['money'])) {
                $money = $_COOKIE['money'];
                echo "<h2>Congratulations!</h2> <h2> You've made it with $".$money."<h2>";
            } else {
                // Handle the case when the cookie is not set
                echo "<h2>Congratulations!</h2> <h2> You've made it with $1,000,000<h2>";
            }
            ?>
        </form>
        <a class="button" title="Sign up" href="./start.php">TRY AGAIN</a>
        <a class="button" title="Leaderboard" href="../leaderboard.php">LEADERBOARD</a>
    </div>
</body>
</html>
