<?php
$error = 'Could not connect';
$db_host ='localhost';
$db_user ='root';
$db_pass ='';
$main_db ='todo_list';

$dbconn = mysqli_connect($db_host, $db_user, $db_pass);
if(!$dbconn){
	die("Could not connect".mysqli_error());
}
if(!mysqli_select_db($dbconn, $main_db)){
	die("Could not connect".mysqli_error());
}
/*if(!mysqli_connect($db_host, $db_user, $db_pass) || !mysqli_select_db($main_db,"todo_list")){
die($error);
}*/
?>