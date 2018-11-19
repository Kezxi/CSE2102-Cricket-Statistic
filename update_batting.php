<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['update']))
{    
	$batting_id= $_POST['batting_id'];
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
        
        $result = mysqli_query($mysqli, "UPDATE batting_statistics SET pid ='$pid', tid ='$tid', mat ='$mat',inns ='$inns',no ='$no', runs ='$runs', hs='$hs', avg= '$avg', hundred='$hundred', fifty ='$fifty' , fours ='$fours' , sixes ='$sixes' WHERE batting_id=$batting_id");
        header("Location: admin.php");
    }

?>
<?php

$batting_id = $_GET['batting_id'];

$result = mysqli_query($mysqli, "SELECT * FROM batting_statistics WHERE batting_id=$batting_id");
 
while($row = mysqli_fetch_array($result))
{
	$pid = $row['pid'];
	$tid = $row['tid'];
    $mat = $row['mat'];
	$inns = $row['inns'];
	$no = $row['no'];
	$runs = $row['runs'];
	$hs = $row['hs'];
	$avg = $row['avg'];
	$hundred = $row['hundred'];
	$fifty = $row['fifty'];
	$fours = $row['fours'];
	$sixes = $row['sixes'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="admin.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="update_batting.php">
        <table border="0">
            <tr> 
                <td>Pid</td>
                <td><input type="text" name="pid" value="<?php echo $pid;?>"></td>
            </tr>
            <tr> 
                <td>Tid</td>
                <td><input type="text" name="tid" value="<?php echo $tid;?>"></td>
            </tr>
            <tr> 
                <td>Mat</td>
                <td><input type="text" name="mat" value="<?php echo $mat;?>"></td>
            </tr>
            <tr>
			<tr> 
                <td>Inns</td>
                <td><input type="text" name="inns" value="<?php echo $inns;?>"></td>
            </tr>
			<tr> 
                <td>NO</td>
                <td><input type="text" name="no" value="<?php echo $no;?>"></td>
            </tr>
			<tr> 
                <td>Runs</td>
                <td><input type="text" name="runs" value="<?php echo $runs;?>"></td>
            </tr>
			<tr> 
                <td>HS</td>
                <td><input type="text" name="hs" value="<?php echo $hs;?>"></td>
            </tr>
			<tr> 
                <td>Avg</td>
                <td><input type="text" name="avg" value="<?php echo $avg;?>"></td>
            </tr>
			<tr> 
                <td>100</td>
                <td><input type="text" name="hundred" value="<?php echo $hundred;?>"></td>
            </tr>
			<tr> 
                <td>50</td>
                <td><input type="text" name="fifty" value="<?php echo $fifty;?>"></td>
            </tr>
			<tr> 
                <td>4s</td>
                <td><input type="text" name="fours" value="<?php echo $fours;?>"></td>
            </tr>
			<tr> 
                <td>6s</td>
                <td><input type="text" name="sixes" value="<?php echo $sixes;?>"></td>
            </tr>
                <td><input type="hidden" name="batting_id" value=<?php echo $_GET['batting_id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>