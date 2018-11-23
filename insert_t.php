
<html>
<head>
<link rel="stylesheet" href="styles/style.css">
<title>New Tournament</title>
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
	<form method="post" action="add_t.php" >
		<div class="insert">
			<label>Name</label><br>
			<input type="text" name="tname" value="">
		</div>
		<div class="insert">
			<button class="btn" type="submit" name="Submit" >Submit</button>
		</div>
	</form>
	
</body>
</html>

