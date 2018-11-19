<?php
require('connect.php');
$id=$_REQUEST['cid'];
$query = "DELETE FROM players WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: admin.php"); 
?>