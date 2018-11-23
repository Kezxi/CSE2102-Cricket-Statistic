<!DOCTYPE html>

<html>
	<head>
		<title> Player Bowling Statistics</title>

		<style>
			body
			{
				font-family: sans-serif;
				font-size: 11pt;
				background-image: url(../images/starcbg.jpg);
				background-size:100% 100%;
				background-attachment: fixed;

			}

			#table
			{
			position: absolute;
			width: 94%;
			height: 35%;
			top: 25%;
			margin-left: 3%;
			margin-right: 3%;

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

			#batting_stats_button
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

					 <section id="batting_stats_button">
						 <ul>
							 <li><a href="../players_batting_tables/akeem_blackman.php"><img src="../images/batting_stats.png"></a></li>
						 </ul>
					 </section>
		</header>


		<table id="table" align="center">
			<tr>
				<td id="header" colspan="14"><h1> Bowling Statistics </h1></td>
			</tr>

			<tr id="columns">
				<th></th>
				<th>Mat</th>
				<th>Inns</th>
				<th>Balls</th>
				<th>Runs</th>
				<th>Wkts</th>
				<th>BBI</th>
				<th>BBM</th>
				<th>Avg</th>
				<th>Econ</th>
				<th>SR</th>
				<th>4W</th>
				<th>5W</th>
				<th>10W</th>
			</tr>


			<?php
			$conn = mysqli_connect("localhost", "root", "", "player_statistics");
			// Check connection
			if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT Test, Mat,	Inns,	Balls,	Runs,	Wkts,	BBI,	BBM,	Avg,	Econ,	SR,	4W,	5W,	10W FROM akeem_blackman_bowl";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["Test"]. "</td><td>" . $row["Mat"] . "</td><td>"
			. $row["Inns"]. "</td><td>" . $row["Balls"] . "</td><td>" . $row["Runs"] . "</td><td>" . $row["Wkts"] . "</td><td>" . $row["BBI"] . "</td><td>" . $row["BBM"] . "</td><td>" . $row["Avg"]. "</td><td>" . $row["Econ"]. "</td><td>" . $row["SR"]. "</td><td>" . $row["4W"]. "</td><td>" . $row["5W"]. "</td><td>" . $row["10W"]."</td></tr>";
			}
			echo "</table>";
			} else { echo "0 results"; }
			$conn->close();
			?>


		</table>
	</body>
</html>
