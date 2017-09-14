<?php
require_once 'config.php';
session_start();

//to ensure that same user cannot attemp the test twice.
$res = mysql_query("UPDATE users SET count=1 where user_name='".$_SESSION['name']."' ") or die(mysql_error()); 
$count=mysql_fetch_array($res);

session_destroy();
header( 'Location: http://localhost/quiz/index.php' ) ;
?>

