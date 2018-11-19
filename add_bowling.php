<html>
<head>
    <title>Add Bowling Statistics</title>
</head>
 
<body>
<?php 
	include_once("connect.php");

	if (isset($_POST['Submit'])) {
	$pid = $_POST['pid'];
	$tid = $_POST['tid'];
	$mat = $_POST['mat'];
	$inns = $_POST['inns'];
	$balls = $_POST['balls'];
	$runs = $_POST['runs'];
	$wkts = $_POST['wkts'];
	$bbi = $_POST['bbi'];
	$bbm = $_POST['bbm'];
	$avg = $_POST['avg'];
	$econ = $_POST['econ'];
	$sr = $_POST['sr'];
	$fourw = $_POST['fourw'];
	$fivew = $_POST['fivew'];
	$ten = $_POST['ten'];
	
	$result = mysqli_query($mysqli, "INSERT INTO bowling_statistics ( pid, tid, mat, inns, balls, runs, wkts, bbi, bbm, avg, econ,sr, fourw, fivew, ten) 
	VALUES ('$pid', '$tid', '$mat', '$inns', '$balls', '$runs', '$wkts', '$bbi', '$bbm', '$avg', '$econ','$sr','$fourw','$fivew','$ten')"); 
		 echo "Bowling Statistics added";
		 echo "<br/><a href='admin.php'>View</a>";
	}
?>
</body>
</html>
