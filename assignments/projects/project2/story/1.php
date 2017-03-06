<?php 
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css">
	<title>Start Your Case!</title>
</head>

<body style="background-image: url('../imgs/noir003.jpg'); background-repeat: no-repeat; background-size:cover;">

	<div class="glass">
		<?php 
		$_SESSION["hp"] = 100;
		$_SESSION["stamina"] = 100;
		$_SESSION["money"] = 250.00;
		?>
		
		<?php
		$_SESSION["detective_name"] = $_POST["detective"];
		// echo $_SESSION["detective_name"];

		print("<p> My name is " .$_SESSION["detective_name"].
		". This is the story on how I solved a missing person's case.

		It was a stormy night as I walked to my office… had received a notification that some poor soul needed help and that apparently the police weren’t being much help. Not surprised when it comes to this city...

		This walk feels like it’s taking forever, I stop to think what it is that I want to make this trip more bearable:
		</p>");

		?>
	</div>

	<div class="glass">
		<form action="2.php" method="post">
			<input type="radio" name="choice" value="smoke"><b>Smokes</b>
			<input type="radio" name="choice" value="gum"><b>Chewing Gum</b>
			<br>
			<input type="submit">
		</form>
	</div>
	<br>
	<table class="glass">
		<tr>
			<td><b>Health:</b><?php echo $_SESSION["hp"] ?></td>
			<td><b>Stamina:</b><?php echo $_SESSION["stamina"] ?></td>
			<td><b>Money:</b><?php echo $_SESSION["money"] ?></td>
		</tr>
	</table>
</body>

<footer>
</footer>

</html>
