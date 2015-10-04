<?php  
session_start();
if(isset($_SESSION)){
	if(isset($_SESSION['name'])){
		$username=$_SESSION['name'];
	}else{
		header("Loacation:Login.php");
	}
}else{
echo "Not Printing";
} 
?>
<html>
	<head>
		<title>Student Home</title>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery.min.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery-ui.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\bootstrap.js"></script>
	<!--	<script type="text/javascript">
			$('#addContent').click(function(){
			   $("#StudHome").load("file.php");
			   return false;
			});
		</script>	-->
		
		<script type="text/javascript">
					$(function() {
					$("a.ajax-link").on("click", function(e) {
					e.preventDefault();
					$("#main_content").load(this.href);
				});
			});
			
			</script>
		
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">	
				
	</head>
			<body>
			<?php include 'Connection.php';
				$query="SELECT First_Name, Middle_Name, Last_Name FROM student WHERE Roll_No = $username ";
				$result=mysql_query($query);
			/*	if($result)
					echo "success";
				else
					echo "Failed"; */
				$row=mysql_fetch_array($result);
			?>
			<br>
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin:.3em; margin-bottom: 1px; margin-right: 0.25em;">
    
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			   <!-- <a class="navbar-brand" href="http://www.moderncoe.edu.in">Modern College</a>-->
			</div>
		
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li role="presentation" ><a class="ajax-link" href="Stud_Home.php">Home</a></li>
				  <li role="presentation"><a class="ajax-link" href="All_Notifications.php">Notification</a></li>
				  <li role="presentation"><a class="ajax-link" href="Student_Notes.php">Notes</a></li>
				  <li role="presentation"><a class="ajax-link" href="upload.php">Upload</a></li>
				</ul>
				<div class="pull-right">
				<ul class="nav navbar-nav">
					
					<li style=" color:white; font-family:Gabriola; font-size:25pt;"><?php echo $row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name'];?></li>			
					<li ><a href="logout.php"><span style="color:#FFA500;font-size:15pt;" class="glyphicon glyphicon-off"></a></li>
					
				</ul>
				</div>
			</div>
			</nav>
			
			<center>
				<br />
				<?php
					include 'connection.php';
					$query="SELECT * FROM notification ORDER BY Id desc LIMIT 5";
					$result = mysql_query($query);
					/*if($result)
						echo "Success";
					else	
						echo "Fail";*/
						$value="";
					while($row =mysql_fetch_array($result)){
						$value.="   *".$row['Notification'];
					}
					echo "<marquee size='50px' style='padding-top:18px; color:white;font-family:Arial Black;font-size:15px' bgcolor='red'>$value</marquee>";
				?>
			<div class="grid_3" id="main_content">
				
				
			</div>
			</center>
			
					
			</body>
</html>