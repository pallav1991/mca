<?php  
session_start();
if(isset($_SESSION)){
$username=$_SESSION['name'];
}else{
echo "Not Printing";
} 
$tname=$_GET['tname'];
echo $tname;
?>
<html>
	<head>
		<title>Notes</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<style>
			body {background-color:#3c3c3c;
			color:white;}
		</style>
	
	</head>
			<body>
				<?php include 'Connection.php';
				$query="SELECT document FROM Notes WHERE TeacherName= $tname";
				$result=mysql_query($query);
			/*	if($result)
					echo "success";
				else
					echo "Failed"; */
				$row=mysql_fetch_array($result);
				
				echo "<table>"; // start a table tag in the HTML

					while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
					echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>";  //$row['index'] the index here is a field name
					}

					echo "</table>"; 
				?>
			</body>
</html>