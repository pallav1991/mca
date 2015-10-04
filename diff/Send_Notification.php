<?php  
session_start();
if(isset($_SESSION)){
	if(isset($_SESSION['name'])){
		$username=$_SESSION['name'];
	}else{
	}
	
}else{
echo "Not Printing";
} 
		include 'Connection.php';
				$query="SELECT First_Name, Middle_Name, Last_Name FROM student WHERE Roll_No = $username ";
				$result=mysql_query($query);
			/*	if($result)
					echo "success";
				else
					echo "Failed"; */
				$row=@mysql_fetch_array($result);
			
				if(isset($_POST['submit'])){
							$Notification = $_POST['notification'];
							$Year = $_POST['n-year'];
							include 'connection.php';
							$query="INSERT INTO notification (Notification,Notification_For,Teacher_Name,Date) VALUES('$Notification','$Year','".$row['First_Name']." ".$row['Last_Name']."',NOW())";
							$result=mysql_query($query);
							echo "<script>alert (\"Notification Successfully Sent:\")</script>";
							header("Location:TeacherMain.php");
				
				}
?>



<html>
	<head>
		<title>Notification</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery.min.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery-ui.js"></script>
		
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<style>
			body {background-color:#B0C4DE;
			color:#696969;}
			select{color:black}
			.star{color:red}
		</style>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\bootstrap.js"></script>
	</head>
			<body><br>
			<div>
				<legend><center><marquee behavior="alternate"><font size="8" color="#D2691E" face="Comic Sans MS"><u><b>Notification<b></u></font></marquee></center></legend>
			</div>
			<center>
			
			<form id="notify" name="notify" method="post" action="Send_Notification.php" target="_self">
			
				<table width="75%" border="0" cellpadding="15" cellspacing="15">
					
					<tr>
						<td>
							<br><label for="notification"><span class="star">*</span> Notification:</label>
						</td>
						
					</tr>
					<tr>
						<td>
							<textarea type="text" class="form-control" rows="5" id="notification" placeholder="Write Notification" name="notification" style="width:50%" required> </textarea>
						</td>
					</tr>
					<tr>
						<td>
							<br><label for="year"><span class="star">*</span> Notification For:</label>
						</td>
					</tr>
					<tr>
						<td>
							<select type="text" id="n-year" class="form-control" name="n-year" style="width:150px" required>
								<option>First Year</option>
								<option>Second Year
								<option>Third Year
							</select>
						</td>
					</tr>
				
					<tr>
						<td>
							<br><input class="btn btn-primary " name="submit" id="submit" type="submit" value="submit">
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary " type="reset" value="Reset">
						</td>
					</tr>
				</table>
		</form>
		
		
		
	</body>
</html>