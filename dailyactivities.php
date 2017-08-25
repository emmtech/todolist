<?php
	include_once('dbconnect.php');
?>	
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
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
			margin:0px;
			padding:0px;
			//background-color:#000000;
			background:url(images/todolist.jpg);
			//background-repeat:no-repeat;
			//background-size:cover;
			background-origin:content-box;
			//color:#FFFFFF;
		}
		.wrapper{
			margin:30px auto;
			width:1000px;
			//color:#FFFFFF;
			//background:#FFFFFF;
		}
		#myForm form{
			margin:30px auto;
			background: #FFFFFF;
			width: 350px;
			width:transparent;
		}
		#myForm legend{
			margin-left:500px;
		}
		#fm{
			border:none;
			border-bottom:3px dotted red;
			height:30px;
			width:300px;
			text-align:center;
			font-family:Raavi;
			font-size:14px;
			font-weight:bolder;
		}
		#fm td{
			background:#999;
		}
		#mySubmit{
			height:50px;
			width:150px;
		}
		#mySubmit:hover{
			border:1px dotted red;
			}
		#blink{
		text-align:center; color:#F2DA31
		}
		@keyframes myDesign{
	from{background-color:red}
	to{background-color:#FF9F9F;}
	}
@-webkit-keyframes myDesign{
	from{background-color:red}
	to{background-color:#FF9F9F;}
	}
@-moz-keyframes myDesign{
	from{background-color:red;}
	to{background-color:#FF9F9F;}
	}
#todo{
	/*background-color:red;
		animation-name:myDesign;
		-moz-animation-name:myDesign;
		-webkit-animation-duration:4s;
		-moz-animation-duration:4s;
		animation-duration:4s;
		animation-iteration-count:infinite;
		-moz-animation-iteration-count:infinite;*/
	}
	#footer{
		color:#FF0000;
		background:#FFFFFF;
		text-align:center;
	}
		</style>
	</head>
	<body onLoad="blinker();">
		<div class ="wrapper">
			<div id="myForm">
						<form method ="POST" action ="">
							<table cellspacing ="8" bgcolor="#FFFFFF">
								<tr>
									<td><input type ="text" size ="40" name ="tname" required ="required" placeholder ="Enter the name of your task" id ="fm" style="background:none; text-transform:inherit;"/></td>
								</tr>
								<tr>
									<td><b style="color:#000000; font-weight:bolder;">Start Date:</b></td>
								</tr>
								<tr>
									<td><input type ="date" name ="startdate" id= "fm" required ="required" title="start date" style="background:none;"/></td>
								</tr>
								<tr>
									<td><b style="color:#000000; font-weight:bolder;">End Date:</b></td>
								</tr>
								<tr>
									<td><input type ="date" name ="enddate" required ="required" title="end date" id="fm" style="background:none;"/></td>
								</tr>
								<tr>
									<td><b style="color:#000000; font-weight:bolder;">Task Time:</b></td>
								</tr>
								<tr>
									<td><input type ="time" size ="40" name ="tasktime" required ="required" placeholder ="Time for the task to be executed" id ="fm" style="background:none;"/></td>
								</tr>
                                <tr>
                                	<td><b style="color:#000000; font-weight:bolder;">Your Task Description</b></td>
                                </tr>
								<tr>
									<td><textarea name ="desc" required ="required" cols ="40" rows="10" placeholder ="Enter the description of your task" style="background:none;"></textarea></td>
								</tr>
								<tr>
									<td><input type = "image" src="images/add_r2_c2.jpg" name="submit" value ="ADD INFORMATION" id="mySubmit"/></td>
								</tr>
								<tr>
									<td>
									
										<?php
										/*if (isset($_POST['tname']) && isset($_POST['startdate']) && isset($_POST['enddate']) 
											&& isset($_POST['tasktime']) && isset($_POST['desc']))*/
											if(isset($_POST['submit'])){
												
											$tname = $_POST['tname'];
											$sdate = $_POST['startdate'];
											$edate = $_POST['enddate'];
											$tasktime = $_POST['tasktime'];
											$desc = $_POST['desc'];
											if(!empty($tname) && !empty($sdate) && !empty($edate) && !empty($tasktime) && !empty($desc)){
												if($sdate > $edate){
													echo "<font color ='red'>" ."The start date "."<b>".$sdate."</b>"." must not be greater than or equal to end date"."<b>".$edate."</b>"."</font>";
													}else{
													$sql = "INSERT INTO `daily_event` VALUES (null,'$tname','$sdate','$edate','$tasktime','$desc')";
													//$query = mysqli_query($sql,$main_db);
													//var_dump($sql);
													if(!mysqli_query($dbconn,$sql)){
														echo "There is an error processing your event list";
													}else{
														echo "<b style ='text-align:center;'>"."Todo list posted"."</b>";
													}
												}
											}else{
												echo "All fields are required";
											}
										}
?>
									</td>
								</tr>
								<tr></tr>
							</table>
						</form>
					<div>
						<table border="0" width ="100%">
                        	<tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
                            <tr>&emsp;</tr>
							<tr bgcolor="#FF0000" style="font-weight:bolder; color:#FFFFFF;">
								<td>Task Name</td>
								<td>Start Date Task</td>
								<td>End Date Task </td>
								<td>Start Time</td>
								<td>Task Description</td>
								<td>Update</td>
							</tr>
								<?php
									$sql = "SELECT * FROM `daily_event`";	
									$res = mysqli_query($dbconn, $sql);
									while($result = mysqli_fetch_array($res)){
										echo "<tr style='background-color:#FCFFCC; color:#FF0000; bordercolor:#E49A36;'>";
										echo "<td>"."<b>".$result['taskName']."</b>"."</td>";
										echo "<td>"."<b>".$result['startTask']."</b>"."</td>";
										echo "<td>"."<b>".$result['endTask']."</b>"."</td>";
										echo "<td>"."<b>".$result['taskTime']."</b>"."</td>";
										echo "<td>"."<b>".$result['taskDesc']."</b>"."</td>";
										echo "<td><a style=\"color:blue\" href=\"edittodlist.php?id=$result[id]\"><img src=\"images/edit.png\" width=\"30px\" height=\"30px\"></a> | <a style=\"color:white\" href=\"delete.php?id=$result[id]\"onClick =\"return confirm('Are you sure you want to delete this entry?')\"><img src=\"images/delete22.png\" width=\"30px\" height=\"30px\"></a></td>";
									    echo "</tr>";
									}
								?>
						</table>
					</div>
			</div>
		</div>
        <div id ="footer">
        	<p>Advanced To-do list created by Emmanuel Omotayo &copy; 2017 INTEGER Training Class</p>
        </div>
	</body>
	</html>
	