<?php 
	session_start();
	if(isset($_POST["masterhp"])){
		$_SESSION["hp"] == $_POST["masterhp"];
	}
	if(isset($_POST["masterdmg"])){
		$_SESSION["dmg"] == $_POST["masterdmg"];
	}
	if(isset($_POST["masterres"])){
		$_SESSION["res"] == $_POST["masterres"];
	}            

?>
<form method="post" action="dsad4.php">
<p>Enter Master's health (between 1 and 20) </p> 
	<input type="integer" name="masterhp">
	<p>Enter Master's attack (between 6 and 10) </p> 
	<input type="integer" name="masterdmg">
	<p>Enter Master's resistance (between 1 and 5) </p> 
	<input type="integer" name="masterres">
	<p></p>
	<input type="submit" name="submit" value="Submit"f>
</form>