<!DOCTYPE html PUBLIC>
<head>
    <title>Question 4</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="questionstyle.css">
</head>

<body>
<?php
    $answer = $_POST["answer"];
    if ($answer == "X") {
        setcookie('money', 1000);
       header("Location: final.php");
    } else {
       if($answer !== "B"){
        header("Location: wrong.php"); 
       }
    }
?>
        <h1>Question 4</h1>
    <div>
        <form action="./questionfive.php" method="post">
    <fieldset>
	<legend>What is the final destiny of life?</legend>

	<div class="options">
		<input type="radio" id="71" name="answer" value="A">
		<label for="71">71</label>
	</div>
	<div class="options">
		<input type="radio" id="84" name="answer" value="B">
		<label for="84">84</label>
	</div>
	<div class="bottom-options">
		<input type="radio" id="24" name="answer" value="C">
		<label for="24">24</label>
	</div>
	<div class="bottom-options">
		<input type="radio" id="42" name="answer" value="D">
		<label for="42">42</label>
	</div>
	<div class="bottom-options" id="quit-section">
		<input type="radio" id="Quit" name="answer" value="X">
		<label id="Quit-Label" for="Quit">I'll quit at $10,000</label>
	</div>
    <div class="submit-section">
    <input class="submit-box" type="submit" value="Submit">
    <div>
    </fieldset>
        </form>
    </div>
</body>
</html>