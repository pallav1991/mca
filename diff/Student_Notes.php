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
		<title>Student Notes</title>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery.min.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\jquery-ui.js"></script>
		<script src="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\js\bootstrap.min.js"></script>
		<link rel="stylesheet" href="bootstrap-3.3.5-dist\bootstrap-3.3.5-dist\css\bootstrap.min.css">
		<script type="text/javascript">
					$(function() {
					$("a.ajax-link").on("click", function(e) {
					e.preventDefault();
					$("#main_notes").load(this.href);
				});
			});
			
			</script>
		
		
	</head>
			<body>
			<div>
				<br><br>
				<center><marquee><font size="5" color="#9400D3" face="Comic Sans MS"><u><b>Student Notes<b></u></font></marquee></center>
			</div>
			
				<div id='parent_id' class="row" >
						<div class ='col-md-3' style="height:100%; font-size:14pt;">
							<ul class="nav nav-pills nav-stacked">
							  <li role="presentation" ><a class="ajax-link" href="list_files.php?tname=Vaishali&sby=teacher">Dr.Vaishali Sangivakar</a></li>
							  <li role="presentation"><a href="#">Ms. Pradnya Muley</a></li>
							  <li role="presentation"><a href="#">Ms. Pratibha Adkar</a></li>
							  <li role="presentation"><a href="#">Mr. Yogeshchandra Puranik</a></li>
							  <li role="presentation"><a href="#">Ms. Maithali Vadkar</a></li>
							  <li role="presentation" ><a class="ajax-link" href="Stud_Home.php">Ms. Shivani Budhakar</a></li>
							  <li role="presentation"><a class="ajax-link" href="list_files.php?tname=Prakash&sby=teacher">Mr. Prakash Kene</a></li>
							  <li role="presentation"><a href="#">Ms. Netraja Muley</a></li>
							  <li role="presentation"><a href="#">Mr. Shripad Bhide</a></li>
							  <li role="presentation"><a href="#">Ms. Swati Ghule</a></li>
							  <li role="presentation"><a href="#">Ms. Rama Bansode</a></li>
							  <li role="presentation"><a class="ajax-link" href="list_files.php?sby=student">All Student Notes</a></li>
							</ul>
						</div>
							
						<div class ='col-md-9' style="height:100%;" id="main_notes">
						
						</div>
				</div>
		
		
			</body>
		
</html>