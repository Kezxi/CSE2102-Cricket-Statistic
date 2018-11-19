<?php
	session_start();
    require("functions.php");
?>
<?php
    if (isset($_GET['logout'])) {
        session_destroy();
        $message = "Logged out.";
        print "<meta http-equiv=\"refresh\" content=\"0;URL=?message={$message}\">";
    } else {

    if (isset($_GET['login']))  {
        if (isset($_POST['username'])) 
			$username = $_POST['username'];
			$password= md5($_POST['password']);
		
        $result = query("SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' LIMIT 1");
        if (!empty($result)) {
            $user = $result[0];
            $_SESSION['logged_in_user_id'] = $user['uid'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['type'] = $user['type'];

            $message = "Sucessully logged in.";
            print "<meta http-equiv=\"refresh\" content=\"0;URL=?message={$message}\">";
        } else {
            $message = "Re-enter your username and password and try again.";
            print "<meta http-equiv=\"refresh\" content=\"0;URL=?message={$message}\">";
        }
    }
        else {

?>
<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles/style.css">
<title>Cricket Statistics App</title>
</head>
<body>
<?php if (!logged_in()){
    if (isset($_GET['message'])) echo $_GET['message'];
?>
    <div class="container" align="center">
        <h1>Welcome to Cricket Statistics</h1>
		<div class= "img">
		<img src="assets/avatar.jpg" alt="Avatar" class="Avatar" width="150px">
		</div>
        <h2>Login</h2>
		<div>
        <form action="?login=yes" method="post"  name="login">
        <label><b>Username:</b></label></br>
		<input name="username" placeholder="Enter Username" type="text" /></br>
        <label><b>Password:</b></label></br>
		<input name="password" placeholder="Enter Password" type="password" /></br>
        <input  name="submit" type="submit" value="Login" class="cancel"/>
		</div>
      </form>
    </div>

<?php
}
    else {
    if (isset($_GET['message'])) 
	echo $_GET['message'];
    ?>


<?php
	if ($_SESSION['type'] == "admin") 
		include('admin.php');
			else include('visitor.php');
	    } 
?>
</body>
</html>
<?php
    } 
} 
?>
