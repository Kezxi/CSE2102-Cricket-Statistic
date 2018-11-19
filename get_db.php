<?php
require("connect.php");

define('db_server',$db_server);
define('db_user',$db_user);
define('db_password',$db_password);
define('db_name',$db_name);

try{
    $db = new PDO("mysql:host=" . db_server . ";dbname=" . db_name , db_user, db_password);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
