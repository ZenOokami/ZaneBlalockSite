<?php
session_start();
 ?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="../style.css">
    <title>You took the <?php $_SESSION["choice_made"] = $_POST["choice"];
	print($_SESSION["choice_made"]); 
	?></title>
</head>

<body style="background-image: url('../imgs/noir2.jpg'); background-repeat: no-repeat; background-size:cover;">
	
	<div class="glass">
		<?php
		//echo $_SESSION["choice_made"];
		
		
		if($_SESSION["choice_made"] == "smoke"){
			$_SESSION["hp"] -= 5;
			print("<p>
				*Detective lights up* <b><i>-5 hp, smoking is bad for your health!</i></b>
				<br>
				Nothing like a smoke when it’s when raining.
			</p>");
		}else{
			print("<p>
				*Detective reluctantly consumes a piece of gum*
				<br>
				Not as great as smoking in the rain, but it beats having my lungs feel like I’m 75 years old...
			</p>");
		}
		
		print("
			<p>
				I’d made it up to my office. Lights on, I could see my assistant Wagner trying his hardest to fit an important role as I watched the silhouettes move as they converse. He’s simply paid to answer the phone… but I guess keeping clients preoccupied is a plus. 
				<br>
				Perhaps I should give him a Pay Raise...:
			</p>
		");
		
		?>
	</div>
	
	<div class="glass">
		<form action="3.php" method="post">
			<input type="radio" name="choice" value="raise"><b>Give Raise</b>
			<input type="radio" name="choice" value="noRaise"><b>Don't Give raise</b>
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

</html>
