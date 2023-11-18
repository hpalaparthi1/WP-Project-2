<html>
<head>
    <title>Leaderboard</title>
    <meta charset="utf-8" />
    <!-- Link Style sheet -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>LEADERBOARD</h1>
    <div class="login-box">
        <img class="final-img" src="./data/logo.png" alt="Logo" class="center" width=50 height=60>
        <?php
        $file = './data/data.txt';
        $textFile = file_get_contents($file);

        if ($textFile !== false) {
            $lines = explode("\n", $textFile);
            $users = array();

            foreach ($lines as $line) {
                $userData = explode(',', $line);
                // Check if the line has at least two elements (name and score)
                if (count($userData) == 2) {
                    $users[] = array('name' => $userData[0], 'score' => (int)$userData[1]); // Convert score to integer
                }
            }

            // Sort the users array based on the score in descending order
            usort($users, function ($a, $b) {
                return $b['score'] - $a['score'];
            });

            // Display the leaderboard table
            ?>
            <div>
                <form action="leaderboard.php" method="GET">
                    <fieldset>
                        <table style="width:100%" id="player">
                            <tr style="text-align:center">
                                <th>RANK</th>
                                <th>PLAYER</th>
                                <th>SCORE</th>
                            </tr>
                            <?php
                        // Display up to the top 10 players
                        foreach ($users as $index => $user) {
                        if ($index < 10) {
                        echo '<tr>';
                        echo '<td>' . ($index + 1) . '</td>';
                        echo '<td>' . $user['name'] . '</td>';
                        echo '<td>' . $user['score'] . '</td>';
                        echo '</tr>';
    }
}
?>                        </table>
                        <br>
                    </fieldset>
                </form>
            </div>
            <?php
        } else {
            echo "Error reading the data file.";
        }
        ?>
    </div>
</body>
</html>
