<?php 
	session_start();
	if(isset($_POST["fnum"]) && $_POST["fnum"] <= 100 && $_POST["fnum"] >=1)
	{
		$_SESSION["num"] = $_POST["fnum"]; 
	}else
	{
		echo "Invalid input";
	}
	 
?>
<form method="post" action="dsad3.php">
<p>Enter how many fighters you want to play against
 (between 1 and 100) </p> 
	<input type="integer" name="fnum">
	<p></p>
	<input type="submit" name="submit" value="Submit"f>
</form>