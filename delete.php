<?php
include("connect.php");
 
$id = $_GET['pid'];
 
$result = mysqli_query($mysqli, "DELETE FROM players WHERE pid=$id");
header("Location:admin.php");
?>