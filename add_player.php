<html>
<head>
    <title>Add Player</title>
</head>
 
<body>
<?php 
	include_once("connect.php");

	if (isset($_POST['Submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$batting_style = $_POST['batting_style'];
	$bowling_style = $_POST['bowling_style'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$team = $_POST['team'];

	$result = mysqli_query($mysqli, "INSERT INTO players (fname, lname, dob, batting_style, bowling_style, height, weight, team) VALUES ('$fname','$lname', '$dob', '$batting_style', '$bowling_style', '$height', '$weight', '$team')"); 
		 echo "Player added";
		 echo "<br/><a href='admin.php'>View</a>";
	}
?>
</body>
</html>
