<!DOCTYPE html>
<html>
<head>
	<title>Simple Guessing Game</title>
</head>
<body>
<h1>Welcome to this guessing game</h1>
<p>Guess your number and have it in the url</p>

<?php
$message;

if (!isset($_GET['guess'])) {
 	$message = "Missing guess parameter";
} elseif ($_GET['guess'] == "") {
	$message = "Your guess is too short";
} elseif (!is_numeric($_GET['guess'])) {
	$message = "Your guess is not a number";
} elseif ($_GET['guess'] < 36) {
	$message = "Your guess is too low";
} elseif ($_GET['guess'] > 36) {
	$message = "Your guess is too high";
} else {
	$message = "Congratulations - You are right";
}
?>

<p><?php echo $message ?></p>
</body>
</html>