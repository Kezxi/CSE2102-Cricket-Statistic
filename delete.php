<?php
include("connect.php");
 
$pid = $_GET['pid'];
 
$result = mysqli_query($mysqli, "DELETE FROM players WHERE pid=$pid");
header("Location: admin.php");
?>

<?php
include("connect.php");
 
$tid = $_GET['tid'];
 
$result = mysqli_query($mysqli, "DELETE FROM tournament WHERE tid=$tid");
header("Location: admin.php");
?>

<?php
include("connect.php");
 
$bowling_id = $_GET['bowling_id'];
 
$result = mysqli_query($mysqli, "DELETE FROM bowling_statistics WHERE bowling_id=$bowling_id");
header("Location: admin.php");
?>

<?php
include("connect.php");
 
$batting_id = $_GET['batting_id'];
 
$result = mysqli_query($mysqli, "DELETE FROM batting_statistics WHERE batting_id=$batting_id");
header("Location: admin.php");
?>

