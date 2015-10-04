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
		<title>Teacher Home</title>
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
		
		 
		<style>
			body {background-color:#D3D3D3;color:white;}
			.topcorner{
			  position:absolute;
			   top:10;
			   right:-980;
			   color:red;
			  }
			  .topcorner1{
			  position:absolute;
			   top:10;
			   right:-900;
			   color:red;
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
				$query="SELECT First_Name, Middle_Name, Last_Name FROM teacher_details WHERE Email = '$username' ";
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
				  <li role="presentation"><a class="ajax-link" href="Send_Notification.php">Notification</a></li>
				  <li role="presentation"><a class="ajax-link" href="upload.php">Upload</a></li>
				 </ul>
			 <div class="pull-right">
				 <ul class="nav navbar-nav">
				 
					<li style="color:white; font-family:Gabriola; font-size:25pt"><?php echo $row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name'];?></li>			
					<li ><a href="logout.php"><span style="color:#FFA500;font-size:15pt;" class="glyphicon glyphicon-off"></a></li>
					
				</ul>
			</div>
			</div>
		</nav>
			
			
			<div class="grid_3" id="main_content">
				
				
			</div>
			
					
			</body>
</html>