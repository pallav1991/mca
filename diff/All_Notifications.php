<?php  
session_start();
if(isset($_SESSION)){
$username=$_SESSION['name'];
}else{
echo "Not Printing";
}
?>

<html>
	<head>
		<title>Notes</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<style>
			body {background-color:#B0C4DE;
			color:#000080;}
		</style>
	
	</head>
			<body>
			<?php
					include 'connection.php';
					$query="SELECT * FROM notification";
					$result = mysql_query($query);
						echo "<table class='table'>";
						echo "<tr><th>Notification</th><th>Notification For</th><th>Teacher Name</th><th>Date</th></tr>";
					while($row =mysql_fetch_array($result)){
					
						echo "<tr><td>" . $row['Notification'] . "</td><td>" . $row['Notification_For'] . "</td><td>" . $row['Teacher_Name'] . "</td><td>" . $row['Date'] . "</td></tr>";
					}
						echo "</table>";
					
				?>
			</body>
		</html>