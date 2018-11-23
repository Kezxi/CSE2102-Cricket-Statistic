<!DOCTYPE html>

<html>
	<head>
		<title> Player Batting Statistics</title>

		<style>
			body
			{
				font-family: sans-serif;
				font-size: 11pt;
				background-image: url(../images/evinbg.jpg);
				background-size:100% 100%;
				background-attachment: fixed;

			}

			#table
			{
			position: absolute;
			width: 80%;
			height: 35%;
			top: 25%;
			margin-left: 10%;
			margin-right: 10%;

			}

			table, th, td
			{
				border: 1px solid black;
				border-collapse:collapse;
				opacity: 0.75;
			}

			th, td
			{
				padding: 1%;
				text-align: center;
			}

			#columns
			{
				background-color: #a70000;
				color: white;
			}



			tr
			{
				background-color: white;
			}

			header
			{

			  width: 80%;
			  position: fixed;


			  height:16%;

				margin-left: 10%;
				margin-right: 10%;
				margin-top: 1%;
			}

			#bowling_stats_button
			{

				position:fixed;
				right:10%;
			}

			#profile_button
			{
				position:fixed;

				left:10%;
			}



			.container{
			  width:100%;
				height: 100%;
				overflow:hidden;
			}

			img {
			    border-radius:50%;
					height: 100px;
					width: 100px;
					margin-top:-10%;

			}

		</style>
	</head>

	<body>

<header>
	 <section id="profile_button">
				 <ul>
					 <li><a href="../player_profiles/akeem_blackman.html"><img src="../player_images/akeem_blackman.jpeg"></a></li>
				 </ul>
			 </section>

			 <section id="bowling_stats_button">
				 <ul>
					 <li><a href="../players_bowling_tables/akeem_blackman.php"><img src="../images/bowling_stats.png"></a></li>
				 </ul>
			 </section>
</header>

		<table id="table" align="center">
			<tr>
				<td id="header" colspan="11"><h1> Batting Statistics </h1></td>
			</tr>

			<tr id="columns">
				<th></th>
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
			</tr>



			<?php
$conn = mysqli_connect("localhost", "root", "", "player_statistics");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Test, Mat,	Inns,	NO,	Runs,	HS,	Avg,	100s,	50s,	4s,	6s FROM akeem_blackman_bat";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
	 while($row = $result->fetch_assoc()) {
	 echo "<tr><td>" . $row["Test"]. "</td><td>" . $row["Mat"] . "</td><td>"
. $row["Inns"]. "</td><td>" . $row["NO"] . "</td><td>" . $row["Runs"] . "</td><td>" . $row["HS"] . "</td><td>" . $row["Avg"] . "</td><td>" . $row["100s"] . "</td><td>" . $row["50s"]. "</td><td>" . $row["4s"]. "</td><td>" . $row["6s"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

		</table>
	</body>
</html>
