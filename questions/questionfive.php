<!DOCTYPE html>
<html>

<head>
    <title>Question 5</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="questionstyle.css">
</head>

<body>
<?php
    $answer = $_POST["answer"];
    if ($answer == "X") {
        setcookie('money', 10000);
       header("Location: final.php");
    } else {
       if($answer !== "B"){
        header("Location: wrong.php"); 
       }
    }
?>
        <h1>Question 5</h1>
    <div>
    <form action="./final.php" method="post">
    <fieldset>
	<legend>Who wasn't a member of the Beatles?</legend>

	<div class="options">
		<input type="radio" id="JohnLennon" name="answer" value="A">
		<label for="JohnLennon">John Lennon</label>
	</div>
	<div class="options">
		<input type="radio" id="RingoStar" name="answer" value="B">
		<label for="RingoStar">Ringo Star</label>
	</div>
	<div class="bottom-options">
		<input type="radio" id="PaulMcCartney" name="answer" value="C">
		<label for="PaulMcCartney">Paul McCartney</label>
	</div>
	<div class="bottom-options">
		<input type="radio" id="JustinTimberlake" name="answer" value="D">
		<label for="JustinTimberlake">Justin Timberlake</label>
	</div>
	<div class="bottom-options" id="quit-section">
		<input type="radio" id="Quit" name="answer" value="X">
		<label id="Quit-Label" for="Quit">I'll quit at $1,00,000</label>
	</div>
    <div class="submit-section">
    <input class="submit-box" type="submit" value="Submit">
    <div>
    </fieldset>
        </form>
    </div>
</body>

</html>
