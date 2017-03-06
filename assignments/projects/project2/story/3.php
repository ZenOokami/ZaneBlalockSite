<?php
session_start();
?>

<!DOCTYPE html> 
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
	<title><?php
	$_SESSION["choice_made"] = $_POST["choice"];
	print($_SESSION["choice_made"]); 
	?></title>
	<link rel="stylesheet" href="../style.css">
</head>

<body style="background-image: url('../imgs/noir03.jpg'); background-repeat: no-repeat; background-size:cover;">

	<div class="glass">
		<?php
		
		if($_SESSION["choice_made"] == "raise"){
			print("<p>
			Nah - Wagner still owes me for that <i><b>bowling</b></i> fiasco.
			</p>");
		}else{
			print("<p>
			Not until he pays me back for that <i><b>bowling</b></i> fiasco…
			</p>");
		}
		
		print("
			<p>
				I open the door slowly - giving everyone in the room a chance to notice that I&apos;ve arrived. 
				<br>
				It works&#133; a crying woman stares at me - eyes piercing my soul as if I&apos;m the one who has caused her whatever caused her current emotional state.
				<br>
				She shouts at me for being late as the tears leave tracks running down her face. Sad. 
				<br>
				However, I&apos;m not an emotional person - I remind her that I came despite it being past my hours of operations, in the rain&#133; 
				<br>
				Wagner shoots me one hell of a glance.
				<br>
				I sit down and listen to her tale.
				<br>
				She&apos;d gotten worried not hearing from her son for 5 days&#133; that was about 2 weeks ago. 
				A college kid, sophomore, computer science web programmer. Apparently the university says he&apos;s doing some specialized work for the staff before up and vanishing - they&apos;ve been fully cooperative in the investigation started by officers, but by week 2 they seemed to simply stop searching.
				<br>
				Officers searched his dorm, the roommate was reluctant to speak about anything - he was taken in for questioning but let go when they found nothing strange about him to the case. He was later relocated to a different dorm room as to not allow tampering of evidence at the crime scene.
				<br>
				The mother&apos;s last bit of information on the case was that she noticed a date circled on the calendar&#133; it was the day that he was last seen. 
				<br>
				Based on the information I had 3 possible locations to start after I perform a quick look around my office to prepare:
				<br>
			</P>
		");
		
		?>
	</div>
	
	<div class="glass">
		<form action="4.php" method="post">
			<input type="radio" name="choice" value="csDepartment"><b>Visit the Head of the CS Department</b><i>($25 cab fee)</i>
			<input type="radio" name="choice" value="roommate"><b>Visit the relocated roommate</b><i>($20 cab fee)</i>
			<input type="radio" name="choice" value="crimeScene"><b>Visit the Crime Scene</b><i>($20 cab fee)</i>
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