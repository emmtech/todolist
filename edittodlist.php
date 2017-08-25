<?php
include_once("dbconnect.php");
//session_start();
?>

<!DOCTYPE html>
	<html>
	<head>
		<title>Update your To-Do List</title>
		 <link rel="shortcut icon" href="images/todolist.jpg"  />
		 <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap-grid.css.map">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap-4.0.0/js/bootstrap.js"></script>
        <script type="text/javascript" src="bootstrap-4.0.0/js/bootstrap.min.js"></script>
		<style>
			body{
				//background:#000000;
				background:url(images/todolist.jpg);
				background-repeat:no-repeat;
				background-size:cover;
				background-origin:content-box;
				margin:0;
				padding:0;
			}
			.wrapper{
				background:#FFFFFF;
				width:400px;
				margin:30px auto;
			}
			#container{
				background:#FFFFFF;
				width:400px;
				color:blue;
			}
			#fm{
			height:30px;
			width:300px;
			//-webkit-border-radius:20px;
			//-moz-border-radius:20px;
		}
			#mySubmit{
			height:30px;
			background:blue;
			-webkit-border-radius:15px;
			color:white;
			font-weight:bolder;
		}
		#myForm{
			width:500px;
		}
		</style>
	</head>
	<body>
		<div class ="wrapper">
			<div id="container">
				<a href ="dailyactivities.php">Go back to add more events</a>	
					<?php
					if(isset($_GET['id'])){							
							$id = $_GET['id'];
							$sql = "SELECT * FROM `daily_event` WHERE id=$id";	
							$res = mysqli_query($dbconn, $sql);
							while($result = mysqli_fetch_array($res)){												 
							$taskName = $result['taskName'];
							$stask =    $result['startTask'];
							$etask =    $result['endTask'];
							$ttask =    $result['taskTime'];
							$desc =     $result['taskDesc'];
							}
			
					}
					?>
						<form action ="" method="POST" id ="myForm">
						
						<?php
						if (isset($_POST['Submit'])){
						
							$name =     $_POST['tname'];
							$dtask =    $_POST['dtask'];
							$ltask =    $_POST['ltask'];
							$timetask = $_POST['timetask'];
							$descr =     $_POST['descr'];
						
						if(!empty($name) && !empty($dtask) && !empty($ltask) && !empty($timetask) && !empty($descr)){
							if($dtask <= $ltask){
						$sql = "UPDATE `daily_event` SET `taskName` = '$name', `startTask` = '$dtask', `endTask` = '$ltask', `taskTime` = '$timetask', `taskDesc` = '$descr' WHERE `id` = $id";
							  if($query_run = mysqli_query($dbconn, $sql)){
									  echo "<script>";
									  echo $taskName = "";
									  echo $stask =   "";
									  echo $etask =   "";
									  echo $ttask = "";
							          echo $desc =   "";
									  echo "alert('Update Successfully...')";
									  echo "</script>";
									  //header('Location:dailyactivities.php');
								 }else{
									 echo 'error updating your profile';
								  }	
							}else{
								echo "<font color ='red'>" ."The start date "."<b>".$sdate."</b>"." must not be greater than or equal to end date"."<b>".$edate."</b>"."</font>";
								}
						}else{
							echo 'All the fields are required!';
						}
					}
						?>
							<table cellspacing="8">
								<tr>
									<td>Task Name:</td>
								</tr>
								<tr>
									<td><input type ="text" name= "tname"  id ="fm" size ="40" value ="<?php echo $taskName ?>"></td>
								</tr>
								<tr>
									<td>Start Date:</td>
								</tr>
								<tr>
									<td><input type ="date" name= "dtask"  id ="fm" size ="40" value ="<?php echo $stask?>"></td>
								</tr>
								<tr>
									<td>End Task</td>
								</tr>
								<tr>
									<td><input type ="date" name= "ltask"  id ="fm" size ="40" value ="<?php echo $etask?>"></td>
								</tr>
								<tr>
									<td>Task Time:</td>
								</tr>
								<tr>
									<td><input type ="time" name= "timetask"  id ="fm" size ="40" value ="<?php echo $ttask?>"></td>
								</tr>
								<tr>
									<td>Task Description:</td>
								</tr>
								<tr>
									<td><input type ="text" name= "descr"  id ="fm" size ="40" value ="<?php echo $desc?>"></td>
								</tr>
								<tr>
									<td>
										<input type="submit" name ="Submit" value ="UPDATE INFORMATION" id="mySubmit" />
									</td>
									<td>
										<input type ="hidden" name = "id" value ="<?php echo $result['id']; ?>"/>
									</td>
								</tr>
							</table>
						</form>
			</div>
		</div>
	</body>
	</html>
	