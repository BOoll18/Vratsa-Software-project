<?php 
	session_start();
	if(isset($_POST["fname"]) && $_POST["fname"] == "a" && $_POST["fname"] == "b" && $_POST["fname"] == "g"){
		$_SESSION["fighter"] == $_POST["fname"];
	}else
	{
		echo "Invalid input";
	}
	
?>
<form method="post" action="dsad.php">
<p>Enter the name of the fighters you want to play against 
("a" represents an Apprentice
"b" represents a Brute
"g" represents a Guardian
) </p> 
<?php for($i = 0; $i< $_POST["fnum"]; $i++) { ?>
			<p></p>
			<input type="text" name="fname">
			<p></p>
		<?php } ?>
	<p></p>
	<input type="submit" name="submit" value="Submit"f>
</form>