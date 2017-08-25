<?php
	ob_start();
	include("dbconnect.php");
?>
<?php
	if(isset ($_GET['id']))
	{
	  $id = $_GET['id'];
	 $query = mysqli_query($dbconn, "DELETE FROM `daily_event` WHERE `id`= '$id'");
		if($query){
			header('Location:dailyactivities.php');
			}
	}
		
?>