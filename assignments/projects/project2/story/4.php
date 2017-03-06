<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
		$_SESSION["choice_made"] = $_POST["choice"];
		print($_SESSION["choice_made"]);
		?>
	</title>
	<link rel="stylesheet" href="../style.css">
</head>

<body style="background-image: url('../imgs/noir004.png'); background-repeat: no-repeat; background-size:cover;">
	<div class="glass">
		<?php
		
		if($_SESSION["choice_made"] == "csDepartment"){
			$_SESSION["money"] -= 25.00;
			
		}elseif($_SESSION["choice_made"] == "roommate"){
			$_SESSION["money"] -= 20.00;
		}else{
			$_SESSION["money"] -= 20.00;
		}
		
		?>
		<b>To be continued...</b>
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