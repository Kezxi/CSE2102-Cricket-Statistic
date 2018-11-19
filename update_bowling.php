<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['update']))
{    
	$bowling_id= $_POST['bowling_id'];
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
        
        $result = mysqli_query($mysqli, "UPDATE bowling_statistics SET pid ='$pid',tid ='$tid', mat ='$mat',inns ='$inns',balls ='$balls', runs ='$runs', wkts='$wkts', bbi= '$bbi', bbm='$bbm', avg ='$avg' , econ ='$econ' , sr ='$sr', fourw ='$fourw', fivew ='$fivew', ten ='$ten' WHERE bowling_id=$bowling_id");
        header("Location: admin.php");
    }

?>
<?php

$bowling_id = $_GET['bowling_id'];

$result = mysqli_query($mysqli, "SELECT * FROM bowling_statistics WHERE bowling_id=$bowling_id");
 
while($row = mysqli_fetch_array($result))
{
	$tid = $row['tid'];
    $mat = $row['mat'];
	$inns = $row['inns'];
	$balls = $row['balls'];
	$runs = $row['runs'];
	$wkts = $row['wkts'];
	$bbi = $row['bbi'];
	$bbm = $row['bbm'];
	$avg = $row['avg'];
	$econ = $row['econ'];
	$sr = $row['sr'];
	$fourw = $row['fourw'];
	$fivew = $row['fivew'];
	$ten = $row['ten'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="admin.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="update_bowling.php">
        <table border="0">
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
                <td>Balls</td>
                <td><input type="text" name="balls" value="<?php echo $balls;?>"></td>
            </tr>
			<tr> 
                <td>Runs</td>
                <td><input type="text" name="runs" value="<?php echo $runs;?>"></td>
            </tr>
			<tr> 
                <td>Wkts</td>
                <td><input type="text" name="wkts" value="<?php echo $wkts;?>"></td>
            </tr>
			<tr> 
                <td>BBI</td>
                <td><input type="text" name="bbi" value="<?php echo $bbi;?>"></td>
            </tr>
			<tr> 
                <td>BBM</td>
                <td><input type="text" name="bbm" value="<?php echo $bbm;?>"></td>
            </tr>
			<tr> 
                <td>Avg</td>
                <td><input type="text" name="avg" value="<?php echo $avg;?>"></td>
            </tr>
			<tr> 
                <td>Econ</td>
                <td><input type="text" name="econ" value="<?php echo $econ;?>"></td>
            </tr>
			<tr> 
                <td>Sr</td>
                <td><input type="text" name="sr" value="<?php echo $sr;?>"></td>
            </tr>
			<tr> 
                <td>Fourw</td>
                <td><input type="text" name="fourw" value="<?php echo $fourw;?>"></td>
            </tr>
			<tr> 
                <td>Fivew</td>
                <td><input type="text" name="fivew" value="<?php echo $fivew;?>"></td>
            </tr>
			<tr> 
                <td>Ten</td>
                <td><input type="text" name="ten" value="<?php echo $ten;?>"></td>
            </tr>
                <td><input type="hidden" name="bowling_id" value=<?php echo $_GET['bowling_id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>