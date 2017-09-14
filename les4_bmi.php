<!DOCTYPE html>
<html>
<body>
<center>
<?php
	if (isset($_POST['gewicht']) && isset($_POST['lengte'])) {
		$antwoord = $_POST['gewicht'] / ($_POST['lengte'] * $_POST['lengte']);
		echo "Jou BMI is: ". $antwoord;
	} else {
		echo "Vul alle velden in";
	}

?>
<h1> BMI METER </h1>
<form action="les4_bmi.php" method="post">
	Gewicht: <br><input type="text" name="gewicht"><br><br>
	Lengte: <br><input type="text" name="lengte"><br><br>
	<input type="submit" value="Submit">
</form>
</center>

</body>
</html>