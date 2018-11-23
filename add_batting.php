<html>
<head>
    <title>Add Batting Statistics</title>
</head>
 
<body>
<?php 
	include_once("connect.php");

	if (isset($_POST['Submit'])) {
	$pid = $_POST['pid'];
	$tid = $_POST['tid'];
	$mat = $_POST['mat'];
	$inns = $_POST['inns'];
	$no = $_POST['no'];
	$runs = $_POST['runs'];
	$hs = $_POST['hs'];
	$avg = $_POST['avg'];
	$hundred = $_POST['hundred'];
	$fifty = $_POST['fifty'];
	$fours = $_POST['fours'];
	$sixes = $_POST['sixes'];
	
	$result = mysqli_query($mysqli, "INSERT INTO batting_statistics (pid, tid, mat, inns, no, runs, hs, avg, hundred, fifty, fours,sixes) 
	VALUES ('$pid', '$tid', '$mat', '$inns', '$no', '$runs', '$hs', '$avg', '$hundred', '$fifty', '$fours','$sixes')"); 
		 echo "Batting Statistics added";
		 echo "<br/><a href='admin.php'>View</a>";
	}
?>
</body>
</html>
