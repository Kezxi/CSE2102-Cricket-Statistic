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

<title>Cricket Statistics</title>

<style>

input[type=text], input[type=password] {
    padding: 12px 20px;
    margin: 10px 0;
    display: inline-block;
	}

.cancel  {
	background-color: #892323;

 border: none;
 color: white;
 padding: 12px 28px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 margin-top: 14px;
 font-size: 16px;
 border-radius: 4px;
 border: 2px solid #008CBA;
 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	}

  .mybutton {
	 background-color: #4CAF50; /* Green */
	 border: none;
	 color: white;
	 padding: 12px 28px;
	 text-align: center;
	 text-decoration: none;
	 display: inline-block;
	 margin-top: 14px;
	 margin-bottom: 14px;
	 font-size: 16px;
	 border-radius: 4px;
	 border: 2px solid #008CBA;
	 box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  }

	.container
	{
		width: 50%;
		position: fixed;
		margin-right: 25%;
		margin-left: 25%;

	}

</style>


</head>
<body>
<?php if (!logged_in()){
    if (isset($_GET['message'])) echo $_GET['message'];
?>
    <div style="border: solid 1px #892323;" class="container" align="center">
        <h1>Welcome to Cricket Statistics</h1>
		<div class= "img">
		<img src="assets/avatar.jpg" alt="Avatar" class="Avatar" width="150px">
		</div>
        <h2>Login As An Association</h2>
		<div>
        <form  action="?login=yes" method="post"  name="login">
        <label><b>Username:</b></label></br>
		<input name="username" placeholder="Enter Username" type="text" /></br>
        <label><b>Password:</b></label></br>
		<input name="password" placeholder="Enter Password" type="password" /></br>
        <input  name="submit" type="submit" value="Login" class="cancel"/>



		</div>

<a href="guest_home.html" class="mybutton"  onclick="alert('Logged In As A Player/Guest!')">Or Login As Player/Guest</a>

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
