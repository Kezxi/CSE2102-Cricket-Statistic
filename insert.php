
<html>
<head>
<link rel="stylesheet" href="styles/style.css">
<title>New Player</title>
</head>
<style>
.btn  {
	background-color: #892323;
    color: white;
    padding: 14px 20px;
    cursor: pointer;
	}
</style>
<body>
	<form method="post" action="add_player.php" >
		<div class="insert">
			<label>First Name</label>
			<input type="text" name="fname" value="">
		</div>
		<div class="insert">
			<label>Last Name</label>
			<input type="text" name="lname" value="">
		</div>
		<div class="insert">
			<label>Date of Birth</label>
			<input type="date" name="dob" value="">
		</div>
		<div class="insert">
			<label>Batting Style</label>
			<input type="text" name="batting_style" value="">
		</div>
		<div class="insert">
			<label>Bowling Style</label>
			<input type="text" name="bowling_style" value="">
		</div>
		<div class="insert">
			<label>Height</label>
			<input type="text" name="height" value="">
		</div>
		<div class="insert">
			<label>Weight</label>
			<input type="text" name="weight" value="">
		</div>
		<div class="insert">
			<label>Team</label>
			<input type="text" name="team" value="">
		</div>
		<div class="insert">
			<button class="btn" type="submit" name="Submit" >Submit</button>
		</div>
	</form>
</body>
</html>

