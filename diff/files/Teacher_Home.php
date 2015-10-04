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
		<title>Student Home</title>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<script src="C:\wamp\www\Project\bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js"> </script>
		<style>
			body {background-color:#778899;color:white;}
			.topcorner{
			   position:absolute;
			   top:10;
			   right:20;
			   color:red;
			  }
			  .topcorner1{
			   position:absolute;
			   top:7;
			   right:80;
			  }
			  ul.nav > li > a:hover {
				background-color: #000000;
				color: #FFA500;
				border-style: none;
			}
		</style>		
	</head>
			<body>
			<?php include 'Connection.php';
				$query="SELECT First_Name, Middle_Name, Last_Name FROM first_year WHERE Roll_No = $username ";
				$result=mysql_query($query);
			/*	if($result)
					echo "success";
				else
					echo "Failed"; */
				$row=mysql_fetch_array($result);
			?>
			<br>
			<div class="topcorner"><a href="Login.php"><span style="color:#FFA500;font-size:15pt;" class="glyphicon glyphicon-off"></a></div>
			<div class="topcorner1" style="color:white; face-family:Arial Rounded MT Bold; font-size:15pt"><?php echo $row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name'];?></div>
		
			<div>
			<ul class="nav nav-tabs">
			  <li role="presentation" ><a href="StudentActivity/Stud_Home.html">Home</a></li>
			  <li role="presentation"><a href="#">Notification</a></li>
			  <li role="presentation"><a href="#">Notes</a></li>
			  <li role="presentation"><a href="#">Upload</a></li>
			</ul>
			</div>
			<div id="frame">
			</div>
			
					
			</body>
</html>