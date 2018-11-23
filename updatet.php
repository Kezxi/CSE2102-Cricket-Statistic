<?php
// including the database connection file
include_once("connect.php");
 
if(isset($_POST['update']))
{    
    $tid = $_POST['tid'];
    $tname = $_POST['tname'];    
        
        $result = mysqli_query($mysqli, "UPDATE tournament SET tname ='$tname' WHERE tid=$tid");
        header("Location: admin.php");
    }

?>
<?php

$tid = $_GET['tid'];

$result = mysqli_query($mysqli, "SELECT * FROM tournament WHERE tid=$tid");
 
while($row = mysqli_fetch_array($result))
{
    $tname = $row['tname'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="admin.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="updatet.php">
        <table border="0">
            <tr> 
                <td>Tournament Name</td>
                <td><input type="text" name="tname" value="<?php echo $tname;?>"></td>
            </tr>
                <td><input type="hidden" name="tid" value=<?php echo $_GET['tid'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>