<?php
	require_once("functions.php");
	if (logged_is_as('admin')) 
	{ 
	?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href= "styles/style.css">
</head>
<style>
#navbar {
  position: sticky;
  top: 0%;
}
nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #892323;
    display: flex;
}

nav li {
    border-right: 1px solid #bbb;
}

nav li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    text-transform: uppercase;
}

nav li a:hover {
    background-color: #111;
}

nav li a.active {
  background-color: black;
}

nav {
  position: sticky;
  top: 0%;
}

.header {
	padding: 5px;
}

h1, h2 {
	text-align: center;
}

table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
	padding: 10px;
}

th {
	font-size: 18px;
	text-align: center;
    height: 30px;
	background-color: #892323;
    color: white;
}
</style>
<body>
<div class="header">
<center><img src="assets/ball.png" width="150px"></center>
</div>
	<nav class = "nav" id = "navbar">
    <ul>
      <li><a class= "active" href= "admin.php">Home</a></li>
	  <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
<h2>Welcome Admin!</h2>
<h2>List of Players</h2>
<center><img src="assets/cricket.png" width="500px"></center>

<p><center><a href="insert.php">Add a New Player</a></center></p>

<?php
$con=mysqli_connect("localhost","root","","cricket_stats");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM players");

echo "<center><table>
<tr>
<th>PID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Date of Birth</th>
<th>Batting style</th>
<th>Bowling Style</th>
<th>Height</th>
<th>Weight</th>
<th>Team</th>
<th>Update</th>
<th>Delete</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['dob'] . "</td>";
echo "<td>" . $row['batting_style'] . "</td>";
echo "<td>" . $row['bowling_style'] . "</td>";
echo "<td>" . $row['height'] . "</td>";
echo "<td>" . $row['weight'] . "</td>";
echo "<td>" . $row['team'] . "</td>";
echo "<td><a href=\"update.php?pid=$row[pid]\">Edit</a></td>";
echo "<td><a href=\"delete.php?pid=$row[pid]\" onClick=\"return confirm('This record will be deleted.')\">Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<h2>Tournaments</h2>
<p><center><a href="insert_t.php">Add a New Tournament</a></center></p>
<?php
$con=mysqli_connect("localhost","root","","cricket_stats");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM tournament");

echo "<center><table>
<tr>
<th>TID</th>
<th>Name</th>
<th>Update</th>
<th>Delete</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['tid'] . "</td>";
echo "<td>" . $row['tname'] . "</td>";
echo "<td><a href=\"updatet.php?tid=$row[tid]\">Edit</a></td>";
echo "<td><a href=\"delete.php?tid=$row[tid]\" onClick=\"return confirm('This record will be deleted.')\">Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<h2>Batting Statistics</h2>
<p><center><a href="insert_batting.php">Add New Batting Statistics</a></center></p>
<?php
$con=mysqli_connect("localhost","root","","cricket_stats");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM batting_statistics");

echo "<center><table>
<tr>
<th>Batting Id.</th>
<th>PID</th>
<th>TID</th>
<th>Mat</th>
<th>Inns</th>
<th>NO</th>
<th>Runs</th>
<th>HS</th>
<th>Avg</th>
<th>100</th>
<th>50</th>
<th>4s</th>
<th>6s</th>
<th>Update</th>
<th>Delete</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['batting_id'] . "</td>";
echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['tid'] . "</td>";
echo "<td>" . $row['mat'] . "</td>";
echo "<td>" . $row['inns'] . "</td>";
echo "<td>" . $row['no'] . "</td>";
echo "<td>" . $row['runs'] . "</td>";
echo "<td>" . $row['hs'] . "</td>";
echo "<td>" . $row['avg'] . "</td>";
echo "<td>" . $row['hundred'] . "</td>";
echo "<td>" . $row['fifty'] . "</td>";
echo "<td>" . $row['fours'] . "</td>";
echo "<td>" . $row['sixes'] . "</td>";
echo "<td><a href=\"update_batting.php?batting_id=$row[batting_id]\">Edit</a></td>";
echo "<td><a href=\"delete.php?batting_id=$row[batting_id]\" onClick=\"return confirm('This record will be deleted.')\">Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

<h2>Bowling Statistics</h2>
<p><center><a href="insert_bowling.php">Add New Bowling Statistics</a></center></p>
<?php
$con=mysqli_connect("localhost","root","","cricket_stats");

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM bowling_statistics");

echo "<center><table>
<tr>
<th>Bowling Id.</th>
<th>PID</th>
<th>TID</th>
<th>Mat</th>
<th>Inns</th>
<th>Balls</th>
<th>Runs</th>
<th>Wkts</th>
<th>BBI</th>
<th>Avg</th>
<th>Econ</th>
<th>SR</th>
<th>4W</th>
<th>5W</th>
<th>10</th>
<th>Update</th>
<th>Delete</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['bowling_id'] . "</td>";
echo "<td>" . $row['pid'] . "</td>";
echo "<td>" . $row['tid'] . "</td>";
echo "<td>" . $row['mat'] . "</td>";
echo "<td>" . $row['inns'] . "</td>";
echo "<td>" . $row['balls'] . "</td>";
echo "<td>" . $row['runs'] . "</td>";
echo "<td>" . $row['wkts'] . "</td>";
echo "<td>" . $row['bbi'] . "</td>";
echo "<td>" . $row['avg'] . "</td>";
echo "<td>" . $row['econ'] . "</td>";
echo "<td>" . $row['sr'] . "</td>";
echo "<td>" . $row['fourw'] . "</td>";
echo "<td>" . $row['fivew'] . "</td>";
echo "<td>" . $row['ten'] . "</td>";
echo "<td><a href=\"update_bowling.php?bowling_id=$row[bowling_id]\">Edit</a></td>";
echo "<td><a href=\"delete.php?bowling_id=$row[bowling_id]\" onClick=\"return confirm('This record will be deleted.')\">Delete</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>
<?php 
	}
?>