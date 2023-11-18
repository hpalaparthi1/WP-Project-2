<!DOCTYPE html>
<html>

<head>
    <title>Question 3</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="questionstyle.css">
</head>

<body>
<?php
    $answer = $_POST["answer"];
    if ($answer == "X") {
        setcookie('money', 100);
       header("Location: final.php");
    } else {
       if($answer !== "B"){
        header("Location: wrong.php"); 
       }
    }
?>
        <h1>Question 3</h1>
    <div>
        <form action="./questionfour.php" method="post">
    <fieldset>
	<legend>In the UK, the abbreviation NHS stands for National what Service?</legend>

	<div class="options">
		<input type="radio" id="Humanity" name="answer" value="A">
		<label for="Humanity">Humanity</label>
	</div>
	<div class="options">
		<input type="radio" id="Health" name="answer" value="B">
		<label for="Health">Health</label>
	</div>
	<div class="bottom-options">
		<input type="radio" id="Honour" name="answer" value="C">
		<label for="Honour">Honour</label>
	</div>
	<div class="bottom-options">
		<input type="radio" id="Household" name="answer" value="D">
		<label for="Household">Household</label>
	</div>
	<div class="bottom-options" id="quit-section">
		<input type="radio" id="Quit" name="answer" value="X">
		<label id="Quit-Label" for="Quit">I'll quit at $1000</label>
	</div>
    <div class="submit-section">
    <input class="submit-box" type="submit" value="Submit">
    <div>
    </fieldset>
        </form>
    </div>
</body>

</html>
