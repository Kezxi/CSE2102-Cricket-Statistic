<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['update']))
{    
    $pid = $_POST['pid'];
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$dob = $_POST['dob'];
	$batting_style = $_POST['batting_style'];
	$bowling_style = $_POST['bowling_style'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$team = $_POST['team'];    
        
        $result = mysqli_query($mysqli, "UPDATE players SET fname ='$fname',lname ='$lname',dob ='$dob', batting_style ='$batting_style', bowling_style='$bowling_style', height= '$height', weight='$weight', team ='$team' WHERE pid=$pid");
        header("Location: admin.php");
    }

?>
<?php

$pid = $_GET['pid'];

$result = mysqli_query($mysqli, "SELECT * FROM players WHERE pid=$pid");
 
while($row = mysqli_fetch_array($result))
{
    $fname = $row['fname'];
	$lname = $row['lname'];
	$dob = $row['dob'];
	$batting_style = $row['batting_style'];
	$bowling_style = $row['bowling_style'];
	$height = $row['height'];
	$weight = $row['weight'];
	$team = $row['team'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="admin.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="update.php">
        <table border="0">
            <tr> 
                <td>First Name</td>
                <td><input type="text" name="fname" value="<?php echo $fname;?>"></td>
            </tr>
            <tr> 
                <td>Last Name</td>
                <td><input type="text" name="lname" value="<?php echo $lname;?>"></td>
            </tr>
            <tr> 
                <td>Date of Birth</td>
                <td><input type="date" name="dob" value="<?php echo $dob;?>"></td>
            </tr>
            <tr>
			<tr> 
                <td>Batting Style</td>
                <td><input type="text" name="batting_style" value="<?php echo $batting_style;?>"></td>
            </tr>
			<tr> 
                <td>Bowling Style</td>
                <td><input type="text" name="bowling_style" value="<?php echo $bowling_style;?>"></td>
            </tr>
			<tr> 
                <td>Height</td>
                <td><input type="text" name="height" value="<?php echo $height;?>"></td>
            </tr>
			<tr> 
                <td>Weight</td>
                <td><input type="text" name="weight" value="<?php echo $weight;?>"></td>
            </tr>
			<tr> 
                <td>Team</td>
                <td><input type="text" name="team" value="<?php echo $team;?>"></td>
            </tr>
                <td><input type="hidden" name="pid" value=<?php echo $_GET['pid'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>