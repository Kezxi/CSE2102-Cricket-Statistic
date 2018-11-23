<html>
<head>
    <title>Add Tournament</title>
</head>
 
<body>
<?php 
	include_once("connect.php");

	if (isset($_POST['Submit'])) {
	$tname = $_POST['tname'];

	$result = mysqli_query($mysqli, "INSERT INTO tournament (tname) VALUE ('$tname')"); 
		 echo "Tournament added";
		 echo "<br/><a href='admin.php'>View</a>";
	}
?>
</body>
</html>
