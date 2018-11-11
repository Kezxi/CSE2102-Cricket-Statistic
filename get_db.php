<?php
require("connect.php");

try{
    $db = new PDO("mysql:host=" . db_server . ";dbname=" . db_name , db_user, db_password);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
