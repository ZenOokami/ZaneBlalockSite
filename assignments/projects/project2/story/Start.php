<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../style.css">
	<title></title>
</head>

<body style="background-image: url('../imgs/noirstart.jpg'); backround-repeat: no-repeat; background-size: cover;">
	<div>

	</div>

	<div class="glass">
		<?php
		// Let's set some variables
		$_SESSION["story_progression"] = 0;

		?>

		<b>Hello Detective, can you give us your name?:</b><br>
		&nbsp;

		<form action="1.php" method="post">
			<input type="text" name="detective" placeholder="Please input your name">
			<input type="submit">
		</form>

	</div>

	<div>

	</div>
</body>


</html>
